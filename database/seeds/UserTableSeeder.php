<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'phamthanhnghia',
          'email' => 'phamthanhnghia731997@gmail.com',
          'password' => bcrypt('phamthanhnghia'),
      ]);
      DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('phamthanhnghia'),
      ]);
      DB::table('users')->insert([
          'name' => 'trananhduc',
          'email' => 'trananhduc@gmail.com',
          'password' => bcrypt('trananhduc'),
      ]);
    }
}
