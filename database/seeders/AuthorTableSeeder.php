<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();

        foreach (range(1,10) as $index){
            DB::table('authors')->insert([
                'name'=>$faker->name,
                'role'=>$faker->word,
                'avatar_url'=>$faker->imageUrl,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
