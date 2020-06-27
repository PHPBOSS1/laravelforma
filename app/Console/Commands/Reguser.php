<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
class Reguser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reg:created';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register';

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
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('12345');
        $user->save();
        $this->info('Привет Пхп Программист');
    }
}
