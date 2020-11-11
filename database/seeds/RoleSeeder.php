<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class, 10)->create();
    }
}
