<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Registration extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_register()
    {
        $response = $this->postJson(route('user.register'),[
										'name'=>'navid',
										'email'=>'navids92@gmail.com',
										'password'=>'123456',
										'password_confirmation'=>'123456'
									])->assertCreated();

        $this->assertDatabaseHas('users',['name'=>'navid']);
    }
}
