<?php

declare(strict_types=1);

namespace Modules\Media;

use CodeIgniter\Files\File;
use Config\Media as MediaConfig;
use Modules\Media\Handlers\MediaHandlerInterface;

class Media
{
    protected MediaHandlerInterface $handler;

    protected MediaConfig $config;

    public function __construct()
    {
        $handlerClass = $this->config->handlers[$this->config->handler];

        $this->handler = new $handlerClass();
    }

    public function save(File $file)
    {
        return $this->handler->save($file, '', '');
    }
}
