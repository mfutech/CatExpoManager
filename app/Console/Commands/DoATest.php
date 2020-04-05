<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmation;

class DoATest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'other:test_mailgun';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send a mailgun test mail';

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
        Mail::to(
            'marc@catclubdegeneve.ch'
        )->send(
            new RegistrationConfirmation()
        );
    }
}
