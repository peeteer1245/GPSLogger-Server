<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "create:user {name} {email} {password}";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "create a new user";

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
     * @return int
     */
    public function handle()
    {
        $name = $this->argument("name");
        $email = $this->argument("email");
        $password = Hash::make($this->argument("password"));

        $user = new User;

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        $user->save();

        return 0;
    }
}
