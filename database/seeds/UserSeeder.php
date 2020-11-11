<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
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
        User::create([
            'user_id' => 1,
            'sex' => 1,
            'type' => 0,
            'first_name' => 'احمد',
            'last_name' => 'منتظری',
            'username' => 'احمد',
            'email' => 'amontazeri53@yahoo.com',
            'home_phone' => '05132735614',
            'mobile' => '09392141724',
            'password' => Hash::make('12345678'),
            'api_token' => Str::random(80),
        ]);
        factory(User::class, 10)->create();
    }
}
