<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AdminEntry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Admin entry to the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = [
            "name" => "Admin",
            "mobile_no" => 0000000000,
            "email" => "admin@arbeitlinkers.com",
            "password" => Hash::make(123)
        ];

        $user = User::query()->create($data);

        // create entry on user_details table
        UserDetail::query()->create([
            "user_id" => $user->id
        ]);

        return Command::SUCCESS;
    }
}
