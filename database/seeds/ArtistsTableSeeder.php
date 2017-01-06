<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artists')->delete();
        
        \DB::table('artists')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'OneRepublic',
                'country' => 'United States',
                'genre' => 'Pop',
                'created_at' => '2016-11-21 03:51:49',
                'updated_at' => '2016-11-22 07:05:25',
                'picture' => '/storage/artists/3.jpeg',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'The Chainsmokers',
                'country' => 'United States',
                'genre' => 'EDM',
                'created_at' => NULL,
                'updated_at' => '2016-11-22 07:10:21',
                'picture' => '/storage/artists/2.jpeg',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Ariana Grande',
                'country' => 'United States',
                'genre' => 'Pop',
                'created_at' => '2016-11-23 03:45:26',
                'updated_at' => '2016-11-23 07:10:06',
                'picture' => '/storage/artists/5.jpeg',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Raisa',
                'country' => 'Indonesia',
                'genre' => 'Pop',
                'created_at' => '2016-11-24 06:05:31',
                'updated_at' => '2016-11-24 06:05:44',
                'picture' => '/storage/artists/7.jpeg',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Isyana Sarasvati',
                'country' => 'Indonesia',
                'genre' => 'Pop',
                'created_at' => '2016-12-01 05:41:41',
                'updated_at' => '2016-12-01 05:41:41',
                'picture' => '/storage/artists/8.jpeg',
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'Maroon 5',
                'country' => 'United States',
                'genre' => 'Pop',
                'created_at' => '2016-12-07 07:21:23',
                'updated_at' => '2016-12-07 07:21:23',
                'picture' => '/storage/artists/11.jpeg',
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'Monita Tahalea',
                'country' => 'Indonesia',
                'genre' => 'Jazz',
                'created_at' => '2016-12-08 07:59:32',
                'updated_at' => '2016-12-08 07:59:32',
                'picture' => '/storage/artists/12.jpeg',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Zedd',
                'country' => 'Russia',
                'genre' => 'EDM',
                'created_at' => '2016-12-07 02:14:59',
                'updated_at' => '2016-12-08 10:34:15',
                'picture' => '/storage/artists/10.jpeg',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Imagine Dragons',
                'country' => 'United States',
                'genre' => 'Rock',
                'created_at' => '2016-12-08 10:34:55',
                'updated_at' => '2016-12-08 10:36:54',
                'picture' => '/storage/artists/13.jpeg',
            ),
            9 => 
            array (
                'id' => 16,
                'name' => 'Maliq & d\'essentials',
                'country' => 'Indonesia',
                'genre' => 'Jazz',
                'created_at' => '2016-12-09 07:26:24',
                'updated_at' => '2016-12-09 07:26:25',
                'picture' => '/storage/artists/16.jpeg',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'Adele',
                'country' => 'United Kingdom',
                'genre' => 'Pop',
                'created_at' => '2016-12-08 10:40:11',
                'updated_at' => '2016-12-09 07:26:46',
                'picture' => '/storage/artists/15.jpeg',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'Taylor Swift',
                'country' => 'United States',
                'genre' => 'Pop',
                'created_at' => '2016-12-08 10:38:56',
                'updated_at' => '2016-12-09 07:27:03',
                'picture' => '/storage/artists/14.jpeg',
            ),
            12 => 
            array (
                'id' => 18,
                'name' => 'Coldplay',
                'country' => 'United Kingdom',
                'genre' => 'Rock',
                'created_at' => '2016-12-14 08:17:15',
                'updated_at' => '2016-12-14 08:18:21',
                'picture' => '/storage/artists/18.jpeg',
            ),
            13 => 
            array (
                'id' => 19,
                'name' => 'Calvin Harris',
                'country' => 'United Kingdom',
                'genre' => 'EDM',
                'created_at' => '2016-12-15 07:53:56',
                'updated_at' => '2016-12-15 07:57:18',
                'picture' => '/storage/artists/19.png',
            ),
            14 => 
            array (
                'id' => 9,
                'name' => 'Michael Buble',
                'country' => 'Canada',
                'genre' => 'Jazz',
                'created_at' => '2016-12-01 05:42:06',
                'updated_at' => '2016-12-15 08:26:53',
                'picture' => '/storage/artists/9.jpeg',
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'Dipha Barus',
                'country' => 'Indonesia',
                'genre' => 'EDM',
                'created_at' => '2016-12-20 09:10:35',
                'updated_at' => '2016-12-20 09:53:01',
                'picture' => '/storage/artists/20.jpeg',
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'DJ Snake',
                'country' => 'United States',
                'genre' => 'EDM',
                'created_at' => '2016-12-21 09:08:11',
                'updated_at' => '2016-12-21 09:08:12',
                'picture' => '/storage/artists/21.jpeg',
            ),
        ));
        
        
    }
}