<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('categories')->insert([
        //'category' => Str::random(10),
        //]);
        
        factory(Category::class,5)->create();
        
    }
}
