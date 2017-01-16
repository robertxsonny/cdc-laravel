<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

// Faker
use Faker\factory;

class UserTest extends TestCase
{
	use DatabaseTransactions;

    public function testLogin()
    {
    	$user = factory(App\User::class)->create();

    	$this->json('POST', '/api/login', [
    		'email'   => $user->email,
    		'password' => 'secret',
    	])

    	// Response OK?
    	->assertResponseOk()

    	// Structure OK?
    	->seeJsonStructure([
    		'success',
    		'user' => [
    			'id', 'name', 'email', 'role'
    		],
    		'token',
    	])

    	// Value OK?
    	->seeJson([
    		'name'  => $user->name,
    		'email' => $user->email,
    		'role'  => $user->role,
    	]);

        // Is token created?
        $this->seeInDatabase('oauth_access_tokens', [
        	'user_id' => $user->id,
        	'name'    => 'User Login',
        ]);
    }

    /**
     * Testing register, check whether the json and database output is right
     *
     * @return void
     */
    public function testRegister()
    {
    	// Generating data
    	$faker = Faker\Factory::create();
    	$data = [
	    	'name'     => $faker->name,
	    	'email'    => $faker->unique()->safeEmail,
	    	'password' => $faker->password
	    ];

    	// Trying to register a user
        $this->json('POST', '/api/register', $data)
        		// Response OK?
        		->assertResponseOk(200)

        		// Structure OK?
				->seeJsonStructure([
					'success',
					'user' => [
						'name', 'email', 'role'
		    		],
					'token'
				])

				// Value OK?
				->seeJson([
					'name'  => $data['name'],
					'email' => $data['email'],
					'role'  => 'user', // Of course, registered user must be in user, not admin :D
				]);

        // Is this exists at database?
        $this->seeInDatabase('users', [
        	'email' => $data['email']
        ]);
    }
}
