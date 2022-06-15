<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Dotenv\Validator;
use App\Models\newmodel;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\menu;
use App\Models\menutitle;


use function PHPUnit\Framework\isEmpty;

class Login extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {

        return view('login2');
    }

    public function check(Request $request)
    {

        $validator = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
               if(Auth::attempt($validator)){
                return redirect('login/successlogin');
            }
            else
            {
                return back()->withErrors([
                    'name' => 'user not found',
                ])->onlyInput('name');
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->onlyInput('email');
                return back()->withErrors([
                    'password' => 'password.',
                ])->onlyInput('password');

            }
    }   
            function successlogin() {
                return view('control');
            }
            function logout(){
                Auth::logout();
                return Redirect('login');
            }
            function title() {
              
            }
           

        }
















        // $user=newmodel::where([['name',$request->name],['email',$request->email],['password',$request->password]])->get();
      
        // if ($user->isEmpty()){
        //     echo "user not found";
        // }else{
