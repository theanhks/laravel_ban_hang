<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Services\UserSerivce;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public $userService;

	public function __construct(UserSerivce $userService)
    {
        $this->userService = $userService;
    }

	public function login()
	{
		return view('frontend.user.login');
	}

	public function postLogin(LoginUserRequest $request)
	{
		$data = $request->except('_token');
		if (! Auth::attempt($request->only('username', 'password'))) {
			return redirect()->route('index');
        }
        return redirect()->route('index');
	}

    public function register()
    {
    	return view('frontend.user.register');
    }

    public function store(RegisterRequest $request)
    {
    	$data = $request->except('_token');
    	$data['password'] = Hash::make($data['password']);
    	$data['email_verified_at'] = now();
        $data = $this->userService->insert($data);
        if ($data) {
            return redirect()->route('index');
        } else {
            return redirect()->route('index');
        }
    }

    /**
     * Get the authenticated User.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
    	dd(auth()->user());
        // if (! $user = auth()->user()) {
        //     throw new TokenInvalidException();
        // }
        // return response()->jsonShow(transform_item($user, new \App\Transformers\User\AuthTransformer()));
    }

    /**
     * Destroy an authenticated session.
     */
    public function logout()
    {
        Auth::logout();

        // $request->session()->regenerateToken();
        //Save cache language when logout

        return redirect()->route('index');
    }
}
