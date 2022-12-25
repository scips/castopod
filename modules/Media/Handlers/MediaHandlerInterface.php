<?php

declare(strict_types=1);

namespace Modules\Media\Handlers;

use CodeIgniter\Files\File;

interface MediaHandlerInterface
{
    public function save(File $file, string $folder, string $filename): string;

    public function delete(string $key): bool;
}
