<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_login()
    {
		$user=User::factory()->create();
        $response = $this->postJson(route('user.login'),[
        	'email'=>$user->email,
			'password'=>'123456',
		])->assertOk();
		$this->assertArrayHasKey('token',$response->json());
    }
    public function test_error_if_email_missing(){
		$response = $this->postJson(route('user.login'),[
			'email'=>'navids92@gmail.com',
			'password'=>'123456',
		])->assertUnauthorized();
	}
//	public function test_error_if_pass_mismatch(){
//		$user=User::factory()->create();
//
//		$response = $this->postJson(route('user.login'),[
//			'email'=>$user->email,
//			'password'=>'random',
//		])->assertUnauthorized();
//	}
}
