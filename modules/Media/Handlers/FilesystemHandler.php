<?php

declare(strict_types=1);

namespace Modules\Media\Handlers;

use CodeIgniter\Files\File;

class FilesystemHandler implements MediaHandlerInterface
{
    /**
     * Saves a file to the corresponding podcast folder in `public/media`
     */
    public function save(File $file, string $folder = '', string $filename = null)
    {
        if (($extension = $file->getExtension()) !== '') {
            $filename = $filename . '.' . $extension;
        }

        $mediaRoot = config('App')
            ->mediaRoot . '/' . $folder;

        if (! file_exists($mediaRoot)) {
            mkdir($mediaRoot, 0777, true);
        }

        if (! file_exists($mediaRoot . '/index.html')) {
            touch($mediaRoot . '/index.html');
        }

        // move to media folder, overwrite file if already existing
        $file->move($mediaRoot . '/', $filename, true);

        return $folder . '/' . $filename;
    }

    public function delete(string $key)
    {
        return unlink($key);
    }
}
