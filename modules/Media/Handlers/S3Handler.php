<?php

declare(strict_types=1);

namespace Modules\Media\Handlers;

use Aws\Credentials\Credentials;
use Aws\S3\S3Client;
use CodeIgniter\Files\File;
use Config\Media as MediaConfig;

class S3Handler implements MediaHandlerInterface
{
    public S3Client $s3;

    public function __construct(protected MediaConfig $config)
    {
        $this->s3 = new S3Client([
            'version' => 'latest',
            'region' => $config->s3['region'],
            'credentials' => new Credentials($config->s3['key'], $config->s3['secret']),
        ]);
    }

    public function save(File $file, string $folder = '', string $filename = null)
    {
        $this->s3->putObject([
            'Bucket' => $this->config->s3['bucket'],
            'Key' => $folder . $filename,
            'SourceFile' => $file,
        ]);

        return '';
    }

    public function delete(string $key)
    {
        $this->s3->deleteObject([
            'Bucket' => $this->config->s3['bucket'],
            'Key' => $key,
        ]);

        return true;
    }
}
