<?php

namespace App\Console\Commands;

use App\Mail\EmailNotify;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notification every 12 hours';

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
      $emails =  User::select('email')->get();
       $data = ['title' => 'home work' , 'details' => 'chapter one excercises'];
       foreach($emails as $email)
       {

           MAIL::TO('$email')->send(new EmailNotify($data));
       }

    }
}
