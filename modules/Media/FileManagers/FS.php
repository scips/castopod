<?php

declare(strict_types=1);

namespace Modules\Media\FileManagers;

use CodeIgniter\Files\File;
use Exception;
use Modules\Media\Config\Media as MediaConfig;

class FS implements FileManagerInterface
{
    public function __construct(
        protected MediaConfig $config
    ) {
        $this->config = $config;
    }

    /**
     * Saves a file to the corresponding podcast folder in `public/media`
     */
    public function save(File $file, ?string $path = null): string | false
    {
        if ((pathinfo($path, PATHINFO_EXTENSION) === '') && (($extension = $file->getExtension()) !== '')) {
            $path = $path . '.' . $extension;
        }

        $mediaRoot = $this->config->root;

        if (! file_exists(dirname($mediaRoot . '/' . $path))) {
            mkdir(dirname($mediaRoot . '/' . $path), 0777, true);
        }

        if (! file_exists(dirname($mediaRoot . '/' . $path) . '/index.html')) {
            touch(dirname($mediaRoot . '/' . $path) . '/index.html');
        }

        try {
            // move to media folder, overwrite file if already existing
            $file->move($mediaRoot . '/', $path, true);
        } catch (Exception) {
            return false;
        }

        return $path;
    }

    public function delete(string $key): bool
    {
        return unlink($key);
    }

    public function getUrl(string $key): string
    {
        $appConfig = config('App');
        $mediaBaseUrl = $this->config->baseURL === '' ? $appConfig->baseURL : $this->config->baseURL;

        return rtrim((string) $mediaBaseUrl, '/') .
            '/' .
            $this->config->root .
            '/' .
            $key;
    }

    public function rename(string $oldKey, string $newKey): bool
    {
        return rename($oldKey, $newKey);
    }
}
