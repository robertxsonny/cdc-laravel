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
                'password' => '$2y$10$GgI919gZ./xHe2u8XzjR5uvsc6.4/0P5fOqp6QmdSZXungUxiuzyS',
                'remember_token' => NULL,
                'created_at' => '2016-11-30 08:02:00',
                'updated_at' => '2016-11-30 08:02:00',
                'role' => 'user',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'user1',
                'email' => 'user1@test.com',
                'password' => '$2y$10$lJDniRNd6kCNC44bw1.7Tu6KBWopAk1yEU/1K/cdyu3VT.qRjSm4a',
                'remember_token' => NULL,
                'created_at' => '2016-11-21 03:13:21',
                'updated_at' => '2016-11-21 03:13:21',
                'role' => 'admin',
            ),
            2 => 
            array (
                'id' => 2,
                'name' => 'user1',
                'email' => 'user2@test.com',
                'password' => '$2y$10$tAaTs58EPcF/yT8zga0NyOQeSqv/Mu/kfhzajNmTSqIqmE/V9twoW',
                'remember_token' => NULL,
                'created_at' => '2016-11-21 03:25:29',
                'updated_at' => '2016-11-21 03:25:29',
                'role' => 'user',
            ),
            3 => 
            array (
                'id' => 3,
                'name' => 'user3',
                'email' => 'user3@test.com',
                'password' => '$2y$10$jPjuqXA/oiPhnTRW.q9xoe1em5FBSmacMnkxql8tCtvdvnoU2Haeu',
                'remember_token' => 'NEwTo3Fc4t4iZir7Vgxy3MzBvjrY4vQWIonu7VhIb28WzvdJVSm0GjIfcoHF',
                'created_at' => '2016-11-23 08:31:24',
                'updated_at' => '2016-11-24 06:00:53',
                'role' => 'user',
            ),
        ));
        
        
    }
}