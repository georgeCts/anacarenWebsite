<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user               = new User();
        $user->name         = "Anacaren";
        $user->last_name    = "Gutierrez";
        $user->email        = "anacaren-@hotmail.com";
        $user->password     = bcrypt("12345678a*");
        $user->photo        = "users_photos/anacaren.jpeg";
        $user->save();
    }
}
