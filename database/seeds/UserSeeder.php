<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(['email' => config('superuser.email')], [
            'name' => config('superuser.name'),
            'email' => config('superuser.email'),
            'password' => Hash::make(config('superuser.password')),
        ]);
    }
}
