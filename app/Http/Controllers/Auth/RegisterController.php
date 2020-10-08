<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name'        => $data['name'],
            'email'       => $data['email'],
            'password'    => bcrypt($data['password']),
           // 'verifyToken' => Str::random(40),
            'api_token' => Str::random(60),
        ]);

        return $user;
    }

    public function showRegister()
    {
        return view('auth.register',[
                                    'title'       => 'Регистрация',
                                    'classpage'   => 'register'
                                    ]);
    }

   /* public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        Mail::to($user)->send(new UserRegistered($user));
        $request->session()->flash('message', 'На ваш адрес было выслано письмо с подтверждением регистрации.');
        return redirect('login');
    }*/

    /*public function confirmEmail(Request $request,$email,$verifyToken)
    {   
        $user = User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
        if ($user) {
            User::where(['email'=>$email,'verifyToken'=> $verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
            $request->session()->flash('message', 'Вы успешно подтвердили вашу почту.');
            return redirect('login');
        }else{
            $request->session()->flash('message', 'Пользователь не найден.');
            return redirect('register');
        }
    }*/

     public function confirmEmail(Request $request,$email,$verifyToken)
    {   
        //dd($email);
        $user = User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
       

        if ($user === null) {
           abort(404);
        }

        $user->emailConfirm();


        Auth::login($user,true);
         //dd($user);

        $request->session()->flash('message', 'Емаил подтвержден.');
        return redirect('login');
    }

    public function register(Request $request)
    {
        //dd($request);

        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

       // Mail::to($user)->send(new UserRegistered($user));
       // $request->session()->flash('message', 'На ваш адрес было выслано письмо с подтверждением регистрации.');
        return redirect('login');
    }
}
