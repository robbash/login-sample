<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call( 'UserTableSeeder' );
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create( array( 'name' => 'Rob', 'email' => 'rob@anybody.com', 'password' => Hash::make( 'secret' ) ) );
        User::create( array( 'name' => 'John', 'email' => 'john@doe.com', 'password' => Hash::make( 'secret*2' ) ) );
    }

}