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
     * Saves a file to the corresponding folder in `public/media`
     */
    public function save(File $file, string $path): string | false
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

    public function deletePodcastImageSizes(string $podcastHandle): bool
    {
        $allPodcastImagesPaths = [];
        foreach (['jpg', 'png', 'webp'] as $ext) {
            $images = glob(media_path("/podcasts/{$podcastHandle}/*_*{$ext}"));
            $allPodcastImagesPaths[] = $images;
        }

        foreach ($allPodcastImagesPaths as $podcastImagePath) {
            if (is_file($podcastImagePath)) {
                unlink($podcastImagePath);
            }
        }

        return true;
    }

    public function deletePersonImagesSizes(): bool
    {
        $allPersonsImagesPaths = [];
        foreach (['jpg', 'png', 'webp'] as $ext) {
            $images = glob(media_path("/persons/*_*{$ext}"));
            $allPersonsImagesPaths[] = $images;
        }

        foreach ($allPersonsImagesPaths as $personImagePath) {
            if (is_file($personImagePath)) {
                unlink($personImagePath);
            }
        }

        return true;
    }
}
