<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

use App\User;

class LoginController extends Controller
{
    public function index(User $user)
    {

    	if (Auth::check() && Auth::user()->isAdmin()) {
    		return redirect()->route('admin.admin');
    	}

    	return view('admin.login');
    }

    public function login(Request $request,User $user)
    {
    	$array = $request->all();

		if (Auth::attempt([
			'email' => $array['email'],
			 'password' => $array['password']
			]) && Auth::user()->isAdmin())
			{

	      		// Аутентификация успешна
	      		return redirect()->route('admin.admin');
	    	}

	    	//dd();
	    return redirect()->back()->with('message-anketa','Логоин или пароль введены неверно!');
    }
}
