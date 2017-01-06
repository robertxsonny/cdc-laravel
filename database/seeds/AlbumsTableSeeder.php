<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('albums')->delete();
        
        \DB::table('albums')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Handmade',
                'year' => 2016,
                'artist_id' => 7,
                'created_at' => '2016-12-14 08:27:44',
                'updated_at' => '2016-12-14 08:29:42',
                'picture' => '/storage/album/3.jpeg',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Collage EP',
                'year' => 2016,
                'artist_id' => 2,
                'created_at' => '2016-12-15 03:20:09',
                'updated_at' => '2016-12-15 03:20:09',
                'picture' => '/storage/album/4.jpeg',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'A Head Full Of Dreams',
                'year' => 2015,
                'artist_id' => 18,
                'created_at' => '2016-12-15 03:37:04',
                'updated_at' => '2016-12-15 03:37:04',
                'picture' => '/storage/album/6.png',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Oh My My',
                'year' => 2016,
                'artist_id' => 3,
                'created_at' => '2016-12-15 03:38:32',
                'updated_at' => '2016-12-15 03:38:32',
                'picture' => '/storage/album/7.jpeg',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'To Be Loved',
                'year' => 2013,
                'artist_id' => 9,
                'created_at' => '2016-12-15 08:39:10',
                'updated_at' => '2016-12-15 08:40:09',
                'picture' => '/storage/album/8.jpeg',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Explore',
                'year' => 2015,
                'artist_id' => 8,
                'created_at' => '2016-12-21 06:26:30',
                'updated_at' => '2016-12-21 08:59:30',
                'picture' => '/storage/album/9.jpeg',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Musik Pop',
                'year' => 2014,
                'artist_id' => 16,
                'created_at' => '2016-12-21 09:10:55',
                'updated_at' => '2016-12-21 09:11:33',
                'picture' => '/storage/album/10.jpeg',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => '25',
                'year' => 2015,
                'artist_id' => 15,
                'created_at' => '2016-12-22 06:11:11',
                'updated_at' => '2016-12-22 06:11:12',
                'picture' => '/storage/album/11.jpeg',
            ),
        ));
        
        
    }
}