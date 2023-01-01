<?php

declare(strict_types=1);

namespace Modules\Media\FileManagers;

use CodeIgniter\Files\File;

interface FileManagerInterface
{
    public function save(File $file, ?string $key): string | false;

    public function delete(string $key): bool;

    public function getRealSize(string $key): int;

    public function getUrl(string $key): string;

    public function rename(string $oldKey, string $newKey): bool;
}
