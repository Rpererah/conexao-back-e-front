<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();

        $authorIds=DB::table('authors')->pluck('id');
        foreach (range(1,20) as $index){
            DB::table('posts')->insert([
                'title'=> $faker->sentence,
                'content'=> $faker->paragraph,
                'author_id'=>$faker->randomElement($authorIds),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
