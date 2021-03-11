<?php

namespace Sdbruder\Crud\Commands;

use Illuminate\Console\Command;

class CrudCommand extends Command
{
    public $signature = 'crud';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
