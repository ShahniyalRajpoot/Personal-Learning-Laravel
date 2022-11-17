<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class GetDbName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:getdbname';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To get Current DataBase Name';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $db_name=DB::connection()->getDatabaseName();
        $this->info("The Current DataBase Name is $db_name");
    }
}
