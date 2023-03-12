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
            'credentials' => new Credentials((string) $config->s3['key'], (string) $config->s3['secret']),
            'debug' => $config->s3['debug'],
            'use_path_style_endpoint' => $config->s3['path_style_endpoint'],
        ]);

        // create bucket if it does not already exist
        if (! $this->s3->doesBucketExist((string) $this->config->s3['bucket'])) {
            $this->s3->createBucket([
                'Bucket' => $this->config->s3['bucket'],
            ]);
        }
    }

    public function save(File $file, string $key): string|false
    {
        try {
            $this->s3->putObject([
                'Bucket' => $this->config->s3['bucket'],
                'Key' => $key,
                'SourceFile' => $file,
            ]);
        } catch (Exception) {
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
        } catch (Exception) {
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
                'CopySource' => $this->config->s3['bucket'] . '/' . $oldKey,
                'Key' => $newKey,
            ]);
        } catch (Exception) {
            return false;
        }

        // delete old object
        return $this->delete($oldKey);
    }

    public function deletePodcastImageSizes(string $podcastHandle): bool
    {
        $results = $this->s3->getPaginator('ListObjectsV2', [
            'Bucket' => $this->config->s3['bucket'],
            'Prefix' => 'podcasts/' . $podcastHandle . '/',
        ]);

        $keys = [];
        foreach ($results as $result) {
            $key = array_map(static function ($object) {
                return $object['Key'];
            }, $result['Contents']);

            array_push($keys, ...preg_grep("~^podcasts\/{$podcastHandle}\/.*_.*.\.(jpg|png|webp)$~", $key));
        }

        $objectsToDelete = array_map(static function ($key): array {
            return [
                'Key' => $key,
            ];
        }, $keys);

        if ($objectsToDelete === []) {
            return true;
        }

        try {
            $this->s3->deleteObjects([
                'Bucket' => $this->config->s3['bucket'],
                'Delete' => [
                    'Objects' => $objectsToDelete,
                ],
            ]);
        } catch (Exception) {
            return false;
        }

        return true;
    }

    public function deletePersonImagesSizes(): bool
    {
        $objects = $this->s3->getIterator('ListObjectsV2', [
            'Bucket' => $this->config->s3['bucket'],
            'prefix' => 'persons/',
        ]);

        $objectsKeys = array_map(static function ($object) {
            return $object['Key'];
        }, iterator_to_array($objects));

        $podcastImageKeys = preg_grep("~^persons\/.*_.*.\.(jpg|png|webp)$~", $objectsKeys);
        return (bool) $podcastImageKeys;
    }
}
