<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt("admin123"),
        	'created_at'=> date("y-m-j h:i:s"),
        	'updated_at' => date("y-m-j h:i:s")
        ]);
    }
}
