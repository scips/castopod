<?php

declare(strict_types=1);

/**
 * @copyright  2021 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Modules\Media\Entities;

use CodeIgniter\Database\BaseResult;
use CodeIgniter\Entity\Entity;
use CodeIgniter\Files\File;
use Modules\Media\Models\MediaModel;

/**
 * @property int $id
 * @property string $file_key
 * @property string $file_url
 * @property int $file_size
 * @property string $file_mimetype
 * @property array|null $file_metadata
 * @property 'image'|'audio'|'video'|'document' $type
 * @property string|null $description
 * @property string|null $language_code
 * @property int $uploaded_by
 * @property int $updated_by
 */
class BaseMedia extends Entity
{
    protected File $file;

    /**
     * @var string[]
     */
    protected $dates = ['uploaded_at', 'updated_at'];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'file_extension' => 'string',
        'file_key' => 'string',
        'file_size' => 'int',
        'file_mimetype' => 'string',
        'file_metadata' => '?json-array',
        'type' => 'string',
        'description' => '?string',
        'language_code' => '?string',
        'uploaded_by' => 'integer',
        'updated_by' => 'integer',
    ];

    /**
     * @param array<string, mixed>|null $data
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->initFileProperties();
    }

    public function initFileProperties(): void
    {
        if ($this->file_key !== '') {
            helper('media');

            [
                'filename' => $filename,
                'dirname' => $dirname,
                'extension' => $extension,
            ] = pathinfo($this->file_key);

            $this->attributes['file_url'] = service('file_manager')->getUrl($this->file_key);
            $this->attributes['file_name'] = $filename;
            $this->attributes['file_directory'] = $dirname;
            $this->attributes['file_extension'] = $extension;
        }
    }

    public function setFile(File $file, ?string $key = null): self
    {
        $this->attributes['type'] = $this->type;
        $this->attributes['file_mimetype'] = $file->getMimeType();
        $this->attributes['file_metadata'] = json_encode(lstat((string) $file), JSON_INVALID_UTF8_IGNORE);
        $this->attributes['file_key'] = service('file_manager')->save($file, $key);

        if ($filesize = service('file_manager')->getRealSize($this->file_key)) {
            $this->attributes['file_size'] = $filesize;
        }

        return $this;
    }

    public function deleteFile(): bool
    {
        return service('file_manager')->delete($this->file_key);
    }

    public function delete(): bool|BaseResult
    {
        $mediaModel = new MediaModel();
        return $mediaModel->delete($this->id);
    }

    public function rename(): bool
    {
        $newFileKey = $this->file_directory . '/' . (new File(''))->getRandomName() . '.' . $this->file_extension;

        $db = db_connect();
        $db->transStart();

        if (! (new MediaModel())->update($this->id, [
            'file_key' => $newFileKey,
        ])) {
            return false;
        }

        if (! service('file_manager')->rename($this->file_key, $newFileKey)) {
            $db->transRollback();
            return false;
        }

        $db->transComplete();

        return true;
    }
}
