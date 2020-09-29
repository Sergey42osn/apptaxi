<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\User;

class MyAuthController extends Controller
{

    public function showLogin()
	{
		//dd($user);
	    return view('auth.login',[  'title'       => 'Авторизация',
        							'classpage'   => 'login'
	    						]);
	}

	public function postLogin(Request $request,User $user)
	{
		$array = $request->all();
		$remember = $request->has('remember');

		//dd($user);

		if (Auth::attempt([
			'email' => $array['email'],
			 'password' => $array['password']
			 //'status'   => 1
			],$remember))
			{

	      		// Аутентификация успешна
	      		return redirect()->intended('/');
	    	}

	    	//dd();
	    	$request->session()->flash('message', 'Неудачная авторизация');
	    return redirect()->route('login')
	                      ->withInput($request->only('login','remember'))
	                      ->withErrors([
	                      				'login'=>'Данные не верны'
	                                   ]);
	}

	  public function confirmEmail(Request $request,$email,$verifyToken)
    {   
        //dd($email);
        $user = User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
       

        if ($user === null) {
           return redirect()->route('login')
	                      ->withInput($request->only('login','remember'))
	                      ->withErrors([
	                      				'login'=>'Данные не верны'
	                                   ]);
        }

        $user->emailConfirm();


        Auth::login($user,true);
         //dd($user);

        $request->session()->flash('message', 'Емаил подтвержден.');
        return redirect()->intended('/');
    }

}
