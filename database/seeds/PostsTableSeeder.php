<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'category_id' => 'water',
            'user_id' => 'yuki',
            ]);
            
            //factory(Post::class,10)->create();
            
    }
}
