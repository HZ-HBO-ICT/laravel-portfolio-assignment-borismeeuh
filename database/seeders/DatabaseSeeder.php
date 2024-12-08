<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Psy\Util\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => Str::random(10),
            'excerpt' => Str::random(10),
            'body' => Str::random(100)
        ]);
    }
}
