<?php

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'tflatt74@gmail.com';
		$user->password = 'password';
		$user->is_admin = true;
		$user->save();

		$user2 = new User();
		$user2->email = 'guest@guest.com';
		$user2->password = 'guest';
		$user2->is_admin = false;
		$user2->save();
	}
}