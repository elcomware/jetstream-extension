<?php

namespace Thereline\JetstreamExtension\Commands;

use Illuminate\Console\Command;

class JetstreamExtensionCommand extends Command
{
    public $signature = 'jetstream-extension:install';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
