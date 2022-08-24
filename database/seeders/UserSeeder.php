<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Jeremias Springfield';
        $user->email = 'jeremias@gmail.com';
        $user->password = bcrypt('12345');
        $user->save();

        $user = new User;
        $user->name = 'Horemo Simpson';
        $user->email = 'homero@gmail.com';
        $user->password = bcrypt('12345');
        $user->save();
    }
}
