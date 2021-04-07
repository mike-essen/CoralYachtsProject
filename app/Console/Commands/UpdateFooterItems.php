<?php

namespace loginportal\Console\Commands;

use Illuminate\Console\Command;
use loginportal\Http\Controllers\HomeController;

class UpdateFooterItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'footeritems:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the footer items each hour';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        HomeController::storeImportantDateItems();
        HomeController::storeNewsItem();
    }
}
