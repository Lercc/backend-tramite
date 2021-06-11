<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
  
    public function login(Request $request){
       
      $this->validateLogin($request);
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'condicion'=>1])){
        
        $token = $request->user()->createToken($request->email);
        
        return response()->json([
            'email'=>$request->email,
            'token' => $token->plainTextToken,
            ]);
      }
  
      return back()->withErrors(['email' => trans('auth.failed')])
      ->withInput(request(['email']));
    }
  
    protected function validateLogin(Request $request){
          $this->validate($request,[
            'email' => 'required|string',
            'password'=> 'required|string'
        ]);
    }
  
    public function logout(Request $request){
      Auth::logout();
      $request->session()->invalidate();
      return redirect('/');
      
    }
}
