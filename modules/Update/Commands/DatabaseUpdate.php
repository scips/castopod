<?php

declare(strict_types=1);

namespace Modules\Update\Commands;

use CodeIgniter\CLI\BaseCommand;

class DatabaseUpdate extends BaseCommand
{
    /**
     * @var string
     */
    protected $group = 'maintenance';

    /**
     * @var string
     */
    protected $name = 'castopod:database-update';

    /**
     * @var string
     */
    protected $description = 'Runs all new database migrations for Castopod.';

    public function run(array $params): void
    {
        $this->call('migrate', [
            'all' => true,
        ]);
    }
}
