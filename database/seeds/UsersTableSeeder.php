<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'user9',
                'email' => 'user9@test.com',
                'password' => bcrypt('user9'),
                'remember_token' => null,
                'created_at' => '2016-11-30 08:02:00',
                'updated_at' => '2016-11-30 08:02:00',
                'role' => 'user',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'user1',
                'email' => 'user1@test.com',
                'password' => bcrypt('user1'),
                'remember_token' => null,
                'created_at' => '2016-11-21 03:13:21',
                'updated_at' => '2016-11-21 03:13:21',
                'role' => 'admin',
            ),
            2 => 
            array (
                'id' => 2,
                'name' => 'user1',
                'email' => 'user2@test.com',
                'password' => bcrypt('user1'),
                'remember_token' => null,
                'created_at' => '2016-11-21 03:25:29',
                'updated_at' => '2016-11-21 03:25:29',
                'role' => 'user',
            ),
            3 => 
            array (
                'id' => 3,
                'name' => 'user3',
                'email' => 'user3@test.com',
                'password' => bcrypt('user3'),
                'remember_token' => null,
                'created_at' => '2016-11-23 08:31:24',
                'updated_at' => '2016-11-24 06:00:53',
                'role' => 'user',
            ),
        ));
        
        
    }
}