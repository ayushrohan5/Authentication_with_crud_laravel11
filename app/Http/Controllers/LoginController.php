<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');

    }

    public function authenticate(Request $request){

        $validator= Validator::make($request->all(),[
              'email' => 'required|email',
              'password' => 'required'
        ]);
   
          if ($validator->passes()) {
   
           if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                       
            
               return redirect()->route('account.dashboard');
           }else{
               return redirect()->route('account.login')->with('error','Either email or password is incorrect.');
           }
   
          }
                else{
                   return redirect()->route('account.login')
                   ->withInput()
                   ->withErrors($validator);
                }
   
       }

    public function register(){
        return view('register');
    }

    public function processRegister(Request $request){
        $validator= Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',
            'phone' => ['required', 'string', 'max:10'],
        'profile_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048899'],
            'name' => 'required',
            'password_confirmation' => 'required',
      ]);
 
      if ($request->hasFile('profile_image')) {
        $imagePath = $request->file('profile_image')->store('profile_image', 'public');
    } else {
        $imagePath = null;
    }

      if ($validator->passes()) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone =$request->phone;
        $user->profile_image = $imagePath;
        $user->address= $request->address; 
        $user->role= $request->role; 
        $user->password = Hash::make($request->password);
       
        $user->save();
    
        
            return redirect()->route('account.login')->with('success', 'You have registered successfully');
        
    
    }
    
 
    }
    public function logout() {
        Auth::logout(); 
        return redirect()->route('account.login');
    }
}
