<?php

declare(strict_types=1);

/**
 * @copyright  2021 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Modules\Media\Entities;

use CodeIgniter\Files\File;
use Config\Services;

/**
 * @property array $sizes
 */
class Image extends BaseMedia
{
    protected string $type = 'image';

    public function initFileProperties(): void
    {
        parent::initFileProperties();

        if ($this->file_key && $this->sizes) {
            $this->initSizeProperties();
        }
    }

    public function initSizeProperties(): bool
    {
        helper('media');

        foreach ($this->sizes as $name => $size) {
            $extension = array_key_exists('extension', $size) ? $size['extension'] : $this->file_extension;
            $mimetype = array_key_exists('mimetype', $size) ? $size['mimetype'] : $this->file_mimetype;
            $this->{$name . '_key'} = $this->file_directory . '/' . $this->file_name . '_' . $name . '.' . $extension;
            $this->{$name . '_url'} = service('file_manager')->getUrl($this->{$name . '_key'});
            $this->{$name . '_mimetype'} = $mimetype;
        }

        return true;
    }

    public function setFile(File $file, ?string $key = null): self
    {
        $this->saveSizes($file);

        parent::setFile($file, $key);

        if ($this->file_mimetype === 'image/jpeg' && $metadata = @exif_read_data(
            media_path($this->file_key),
            null,
            true
        )) {
            $metadata['sizes'] = $this->sizes;
            $this->attributes['file_size'] = $metadata['FILE']['FileSize'];
        } else {
            $metadata = [
                'sizes' => $this->sizes,
            ];
        }

        $this->attributes['file_metadata'] = json_encode($metadata, JSON_INVALID_UTF8_IGNORE);

        $this->initFileProperties();

        return $this;
    }

    public function deleteFile(): bool
    {
        if (parent::deleteFile()) {
            return $this->deleteSizes();
        }

        return false;
    }

    public function saveSizes(File $file): void
    {
        // save derived sizes
        $imageService = Services::image();
        foreach ($this->sizes as $name => $size) {
            $fileName = $file->getRandomName();
            // dd($fileName, $file->getRealPath());
            $pathProperty = $name . '_key';
            $imageService
                ->withFile($file->getRealPath())
                ->resize($size['width'], $size['height'])
                ->save(WRITEPATH . 'uploads/' . $fileName);

            $newImage = new File(WRITEPATH . 'uploads/' . $fileName, true);

            service('file_manager')
                ->save($newImage, $this->{$pathProperty});
        }
    }

    private function deleteSizes(): bool
    {
        // delete all derived sizes
        foreach (array_keys($this->sizes) as $name) {
            $pathProperty = $name . '_path';

            if (! service('file_manager')->delete($this->{$pathProperty})) {
                return false;
            }
        }

        return true;
    }
}
