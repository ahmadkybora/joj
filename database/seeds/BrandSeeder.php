<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Brand;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Brand::class,10)->create();
    }
}
