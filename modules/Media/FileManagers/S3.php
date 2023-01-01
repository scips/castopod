<?php

declare(strict_types=1);

namespace Modules\Media\FileManagers;

use Aws\Credentials\Credentials;
use Aws\S3\S3Client;
use CodeIgniter\Files\File;
use Exception;
use Modules\Media\Config\Media as MediaConfig;

class S3 implements FileManagerInterface
{
    public S3Client $s3;

    public function __construct(protected MediaConfig $config)
    {
        $this->s3 = new S3Client([
            'version' => 'latest',
            'region' => $config->s3['region'],
            'endpoint' => $config->s3['endpoint'],
            'credentials' => new Credentials($config->s3['key'], $config->s3['secret']),
            'debug' => $config->s3['debug'],
            'use_path_style_endpoint' => $config->s3['path_style_endpoint'],
        ]);
    }

    public function save(File $file, ?string $key): string|false
    {
        try {
            $this->s3->createBucket([
                'Bucket' => 'default',
            ]);
            $this->s3->putObject([
                'Bucket' => 'default',
                'Key' => $key,
                'SourceFile' => $file,
            ]);
        } catch (Exception $e) {
            dd($e, $e->getMessage());
        }

        return $key;
    }

    public function delete(string $key): bool
    {
        $this->s3->deleteObject([
            'Bucket' => 'default',
            'Key' => $key,
        ]);

        return true;
    }

    public function getUrl(string $key): string
    {
        // TODO:
        return '';
    }

    public function getRealSize(string $key): int
    {
        return 0;
    }

    public function rename(string $oldKey, string $newKey): bool
    {
        try {
            // copy old object with new key
            $this->s3->copyObject([
                'Bucket' => 'default',
                'CopySource' => $oldKey,
                'Key' => $newKey,
            ]);
        } catch (Exception) {
            return false;
        }

        // delete old object
        return $this->delete($oldKey);
    }
}
