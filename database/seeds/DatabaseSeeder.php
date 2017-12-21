<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{ 
	public function run()
	{
		$this->call(tao_user::class);
    }

}
class tao_user extends Seeder
{
	 public function run()
    {
        DB::table('users')->insert([
        	['name'=>'Cường','email'=>'cuonganh365@gmail.com','password'=>bcrypt('123456'),'loaiuser'=>'1'],
        ]);
    }
}