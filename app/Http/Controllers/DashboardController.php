<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //
    public function dashboard(Request $request){
        $users = User::all();
      

       
        return view('dashboard',compact('users'));
    }
    public function showuserprofile(){
        
        return view('userprofile');
    }
    public function Adduser(){
        
        return view('Adduser');
    }
    function viewUser($id){
        $user = User::find($id);
        return view('viewuser',compact('user'));
      }
    public function deleteUser($id){
        try {
            User::where('id',$id)->delete();
            return redirect('/account/dashboard')->with('success','User Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/account/dashboard')->with('fail',$e->getMessage());
            
        }
    }
     function EditUser(Request $request, $id){
        // perform form validation here
        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'profile_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048899'],
        // ]);
       
        // try {
        //     if ($request->hasFile('profile_image')) {
        //         $imagePath = $request->file('profile_image')->store('profile_image', 'public');
        //     } else {
        //         $imagePath = null;
        //     }
         
        //   $user = User::where('id',$request->id)->update([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'phone' => $request->phone,
        //         'profile_image' => $imagePath,
              
         //   ]);

        //    return redirect('/account/dashboard')->with('success','User Updated Successfully');
      //  } catch (\Exception $e) {
      //      return redirect('/updateuser/')->with('fail',$e->getMessage());
      //  }
      if ($request->hasFile('profile_image')) {
               $imagePath = $request->file('profile_image')->store('profile_image', 'public');
             } else {
                 $imagePath = null;
             }
         
      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->phone = $request->phone;
      $user->address = $request->address;
      $user->role = $request->role;
      $user->password = $request->password;
      $user->profile_image = $imagePath;

      $originalFileName = $request->file('profile_image')->getClientOriginalName();
      $path = $request->file('profile_image')->storeAs('public', $originalFileName);
      $fileNameArray = explode('/',$path);
      $fileName = $fileNameArray[1];
      $user->profile_image = $fileName;
      
      if($user->save()){
          return redirect('/account/dashboard');
      }
      else{
          return "Operation Failed";
      }

    }




    public function processadduser(Request $request){
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
    
        
            return redirect()->route('account.dashboard')->with('success', 'You have added user successfully');
        
    
    }}

    public function loadEditForm($id){
        $user = User::find($id);

        return view('updateuser',compact('user'));
    }
    

    public function index(Request $request)
    {
        $query = User::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%");
        }

        $results = $query->get();

        return view('dashboard', compact('results'));
       
    }

}


