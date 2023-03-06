<?php

declare(strict_types=1);

namespace Modules\Media\FileManagers;

use Aws\Credentials\Credentials;
use Aws\S3\S3Client;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\URI;
use Exception;
use Modules\Media\Config\Media as MediaConfig;

class S3 implements FileManagerInterface
{
    public S3Client $s3;

    public function __construct(
        protected MediaConfig $config
    ) {
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
            $this->s3->putObject([
                'Bucket' => $this->config->s3['bucket'],
                'Key' => $key,
                'SourceFile' => $file,
            ]);
        } catch (Exception $exception) {
            dd($file->getRealPath(), $exception, $exception->getMessage());
            return false;
        }

        return $key;
    }

    public function delete(string $key): bool
    {
        try {
            $this->s3->deleteObject([
                'Bucket' => $this->config->s3['bucket'],
                'Key' => $key,
            ]);
        } catch (Exception $exception) {
            dd($exception, $exception->getMessage());
            return false;
        }

        return true;
    }

    public function getUrl(string $key): string
    {
        $url = new URI((string) $this->config->s3['endpoint']);

        if ($this->config->s3['path_style_endpoint'] === true) {
            $url->setPath($this->config->s3['bucket'] . '/' . $key);
            return (string) $url;
        }

        $url->setHost($this->config->s3['bucket'] . '.' . $url->getHost());
        $url->setPath($key);
        return (string) $url;
    }

    public function rename(string $oldKey, string $newKey): bool
    {
        try {
            // copy old object with new key
            $this->s3->copyObject([
                'Bucket' => $this->config->s3['bucket'],
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
