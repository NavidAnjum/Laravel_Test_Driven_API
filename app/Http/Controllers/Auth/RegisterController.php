<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequist;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequist $request)
	{
		// TODO: Implement __invoke() method.
		User::create($request->validated());
		return response([],201);
	}
}
