<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create();
    }
}
