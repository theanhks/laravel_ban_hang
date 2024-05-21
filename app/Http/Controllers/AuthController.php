<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\UpdateRequest;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Services\UserSerivce;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
			return view('frontend.user.validate');
        }
        return redirect()->route('index');
	}

    public function register()
    {
    	return view('frontend.user.register');
    }

    public function store(RegisterRequest $request)
    {
    	$validator = Validator::make($request->all(), [
            'name'     => ['required', 'max:255'],
            'username'  => ['required', 'max:255'],
            'phone'  => ['required', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'gender'  => ['required'],
            'password' => ['required', 'confirmed:password_confirmation'],
            'password_confirmation' => ['required'],
        ]);
        if ($validator->fails()) {
		    // Access validation errors using $request->errors()
		    return view('frontend.user.validate');
		}
    	$data = $request->except('_token');
    	$data['password'] = Hash::make($data['password']);
    	$data['email_verified_at'] = now();
        $data = $this->userService->insert($data);
        if ($data) {
            return redirect()->route('index');
        } else {
            return view('frontend.user.validate');
        }
    }

    public function mypage()
    {
    	$user = auth()->user();
    	return view('frontend.user.mypage', ['user' => $user]);
    }

    public function editStore(Request $request)
    {
    	$validator = Validator::make($request->all(), [
    		'name'     => ['required', 'max:255'],
            'username' => ['required', 'string'],
            'phone' => ['required', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'gender' => ['required'],
        ]);
    	if ($validator->fails()) {
		    // Access validation errors using $request->errors()
		    return view('frontend.user.validate');
		}
    	$data = $request->except(['_token', 'info-user']);
    	$id = auth()->id();
        $data = $this->userService->update($id, $data);
        if ($data) {
            return redirect()->route('index');
        } else {
            return view('frontend.user.validate');
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
