<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAPIKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:apikey {email} {identifier}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a api key for a user';

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
        $email = $this->argument("email");
        $identifier = $this->argument("identifier");

        $user = User::where("email", $email)->first();

        $token = $user->createToken($identifier)->plainTextToken;

        $this->line("your API key was created!");
        $this->line($token);

        return 0;
    }
}
