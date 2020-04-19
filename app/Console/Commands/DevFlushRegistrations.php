<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Registration;
use App\CatRegistration;

class DevFlushRegistrations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:flush_registration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'flush all registrations';

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
        foreach (Registration::all() as $reg) {
            $reg->delete();
        };

        foreach (CatRegistration::all() as $cat_reg) {
            $cat_reg->delete();
        };
    }
}
