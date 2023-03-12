<?php

declare(strict_types=1);

/**
 * @copyright  2021 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Modules\Media\Entities;

use CodeIgniter\Files\File;
use Media\TranscriptParser;

class Transcript extends BaseMedia
{
    public ?string $json_path = null;

    public ?string $json_url = null;

    protected string $type = 'transcript';

    public function initFileProperties(): void
    {
        parent::initFileProperties();

        if ($this->file_key && $this->file_metadata && array_key_exists('json_path', $this->file_metadata)) {
            helper('media');

            $this->json_path = media_path($this->file_metadata['json_path']);
            $this->json_url = service('media')
                ->getFileUrl($this->file_metadata['json_path']);
        }
    }

    public function setFile(File $file): self
    {
        parent::setFile($file);

        $content = file_get_contents(media_path($this->attributes['file_key']));

        if ($content === false) {
            return $this;
        }

        $metadata = [];
        if ($fileMetadata = lstat((string) $file)) {
            $metadata = $fileMetadata;
        }

        $transcriptParser = new TranscriptParser();
        $jsonfileKey = $this->attributes['file_directory'] . '/' . $this->attributes['file_name'] . '.json';
        if (($transcriptJson = $transcriptParser->loadString($content)->parseSrt()) && file_put_contents(
            media_path($jsonfileKey),
            $transcriptJson
        )) {
            // set metadata (generated json file path)
            $metadata['json_path'] = $jsonfileKey;
        }

        $this->attributes['file_metadata'] = json_encode($metadata, JSON_INVALID_UTF8_IGNORE);

        return $this;
    }

    public function deleteFile(): bool
    {
        if (! parent::deleteFile()) {
            return false;
        }

        if ($this->json_path) {
            return unlink($this->json_path);
        }

        return true;
    }
}
