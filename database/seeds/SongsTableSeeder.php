<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('songs')->delete();
        
        \DB::table('songs')->insert(array (
            0 => 
            array (
                'id' => 6,
                'name' => 'Kali Kedua',
                'url' => '/storage/songs/2ea686cf114756534f231e0b0512a07f.mpga',
                'album_id' => 3,
                'created_at' => '2016-12-21 09:19:13',
                'updated_at' => '2016-12-21 09:19:13',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Percayalah',
                'url' => '/storage/songs/b98e7e109d7e1e40598473e71eedfb32.mpga',
                'album_id' => 3,
                'created_at' => '2016-12-21 09:24:30',
                'updated_at' => '2016-12-21 09:24:30',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'Tetap Dalam Jiwa',
                'url' => '/storage/songs/0c6767e3575aeb5a117f983bb48de537.mpga',
                'album_id' => 9,
                'created_at' => '2016-12-21 09:27:05',
                'updated_at' => '2016-12-21 09:27:05',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Keep Being You',
                'url' => '/storage/songs/507fcbe38cc1e559f81ceb9c39117b3d.mpga',
                'album_id' => 9,
                'created_at' => '2016-12-21 09:40:31',
                'updated_at' => '2016-12-21 09:40:31',
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'Kau Adalah',
                'url' => '/storage/songs/708dea072c02d89b80ec127c1085096b.mpga',
                'album_id' => 9,
                'created_at' => '2016-12-21 09:45:18',
                'updated_at' => '2016-12-21 09:45:18',
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'Mimpi',
                'url' => '/storage/songs/40929eb1d508f72d32273242d902c3ef.mpga',
                'album_id' => 9,
                'created_at' => '2016-12-21 09:45:56',
                'updated_at' => '2016-12-21 09:45:56',
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'Setting Fires',
                'url' => '/storage/songs/1ea7479b128ccb625d798b750a4f093f.mp4a',
                'album_id' => 4,
                'created_at' => '2016-12-22 05:37:24',
                'updated_at' => '2016-12-22 05:37:24',
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'All We Know',
                'url' => '/storage/songs/990717eb07e8c07b5f3ff6b09e9d6ef6.mp4a',
                'album_id' => 4,
                'created_at' => '2016-12-22 05:38:53',
                'updated_at' => '2016-12-22 05:38:53',
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'Closer',
                'url' => '/storage/songs/2ccc5ee466c6c5b539400f5c77b7a344.mp4a',
                'album_id' => 4,
                'created_at' => '2016-12-22 05:39:01',
                'updated_at' => '2016-12-22 05:39:01',
            ),
            9 => 
            array (
                'id' => 15,
                'name' => 'Inside Out',
                'url' => '/storage/songs/879aa50de321b36d521562a2057fcd49.mp4a',
                'album_id' => 4,
                'created_at' => '2016-12-22 05:39:15',
                'updated_at' => '2016-12-22 05:39:15',
            ),
            10 => 
            array (
                'id' => 16,
                'name' => 'Don\'t Let Me Down',
                'url' => '/storage/songs/1e501c2f3a5945f5c9f84b531db98c25.mp4a',
                'album_id' => 4,
                'created_at' => '2016-12-22 05:39:33',
                'updated_at' => '2016-12-22 05:39:33',
            ),
            11 => 
            array (
                'id' => 17,
                'name' => 'Hello',
                'url' => '/storage/songs/822d6e7714bc44630a6fb04d6aa0dcf5.mpga',
                'album_id' => 11,
                'created_at' => '2016-12-22 06:11:52',
                'updated_at' => '2016-12-22 06:11:52',
            ),
            12 => 
            array (
                'id' => 18,
                'name' => 'Send My Love',
                'url' => '/storage/songs/bbb3a716f5a43a9c568eb9b293522cd3.mpga',
                'album_id' => 11,
                'created_at' => '2016-12-22 06:12:24',
                'updated_at' => '2016-12-22 06:12:24',
            ),
            13 => 
            array (
                'id' => 19,
                'name' => 'Water Under The Bridge',
                'url' => '/storage/songs/25a0272e46af9e622a66aca6d6f0ebaf.mp4a',
                'album_id' => 11,
                'created_at' => '2016-12-22 06:12:39',
                'updated_at' => '2016-12-22 06:12:39',
            ),
            14 => 
            array (
                'id' => 20,
                'name' => 'Semesta',
                'url' => '/storage/songs/d20d9052c8f5c07f10bc0e90863d5eb4.mpga',
                'album_id' => 10,
                'created_at' => '2017-01-03 07:41:56',
                'updated_at' => '2017-01-03 07:41:56',
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'Ananda',
                'url' => '/storage/songs/6e01b9daf1c4d404db4ca4ceb840c072.mpga',
                'album_id' => 10,
                'created_at' => '2017-01-03 07:42:20',
                'updated_at' => '2017-01-03 07:42:20',
            ),
            16 => 
            array (
                'id' => 22,
                'name' => 'Aurora',
                'url' => '/storage/songs/1e54062691f0323e82ccea94292c0993.mpga',
                'album_id' => 10,
                'created_at' => '2017-01-03 07:42:36',
                'updated_at' => '2017-01-03 07:42:36',
            ),
        ));
        
        
    }
}