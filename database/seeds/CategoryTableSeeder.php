<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends DatabaseSeeder {

    public function run() {
        
        $faker = $this->getFaker();
        
           $cats =  [
              [ "name" => 'Cell Phones Accessories' ,'created_at'=> new DateTime,'updated_at'=> new DateTime ],
              [ "name" =>  'Tablet Accessories' ,'created_at'=> new DateTime,'updated_at'=> new DateTime ],
              [ "name" =>  'Gifts' ,'created_at'=> new DateTime,'updated_at'=> new DateTime],
              [ "name" =>  'Flowers' ,'created_at'=> new DateTime,'updated_at'=> new DateTime]     
                      ];
           DB::table('categories')->insert($cats);
        
//                for ($i = 0; $i < 10; $i++) {
//            $name = ucwords($faker->word);
//
//            Category::create([
//                "name" => $name
//            ]);
//        }
    }

}
