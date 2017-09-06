<?php

use Illuminate\Database\Seeder;

class TypeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 35; $i++) {
        DB::table('type_products')->insert([
            'name' => str_random(10),
            'description' => str_random(30),
        ]);
      }
    }
}
