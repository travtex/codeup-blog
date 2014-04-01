<?php

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'tflatt74@gmail.com';
		$user->password = 'password';
		$user->save();
	}
}