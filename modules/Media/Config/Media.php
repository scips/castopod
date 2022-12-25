<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Modules\Media\Handlers\FilesystemHandler;
use Modules\Media\Handlers\S3Handler;

class Media extends BaseConfig
{
    public string $handler = 'filesystem';

    /**
     * @var array<string, string>
     */
    public array $handlers = [
        'filesystem' => FilesystemHandler::class,
        's3' => S3Handler::class,
    ];

    public array $s3 = [
        'bucket' => '',
        'key' => '',
        'secret' => '',
        'region' => '',
        'protocol' => '',
        'hostname' => '',
        'endpoint' => '',
        'signature_version' => '',
        'override_path_style' => '',
        'open_timeout' => '',
        'read_timeout' => '',
        'force_single_request' => false,
    ];
}
