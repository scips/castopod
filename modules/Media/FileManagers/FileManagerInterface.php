<?php

declare(strict_types=1);

namespace Modules\Media\FileManagers;

use CodeIgniter\Files\File;

interface FileManagerInterface
{
    public function save(File $file, string $key): string | false;

    public function delete(string $key): bool;

    public function getUrl(string $key): string;

    public function rename(string $oldKey, string $newKey): bool;

    public function deletePodcastImageSizes(string $podcastHandle): bool;

    public function deletePersonImagesSizes(): bool;
}
