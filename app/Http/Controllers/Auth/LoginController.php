<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

	public function __invoke(LoginRequest $request)
	{
		// TODO: Implement __invoke() method.
		$user= User::where(['email'=>$request->email])->first();
		if(!$user || ! Hash::check($request->password,$user->password)){
			return response('Credentials not match!',Response::HTTP_UNAUTHORIZED);
		}
		$token = $request->user()->createToken('font_api');
		dd($token);
		return response([
			'token'=>$token->plainTextToken
						]);
	}
}
