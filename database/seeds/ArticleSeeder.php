<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Article;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class,10)->create();
    }
}
