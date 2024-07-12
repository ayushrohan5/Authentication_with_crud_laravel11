<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageRole;

class RolesController extends Controller
{
    //
    public function ViewRoles(){
        $role = ManageRole::all();
        return view('Roles.roles',compact('role'));
   
}

function activeRoles($id){
    $roles = ManageRole::find($id);
    if($roles){
        if($roles->status == 'active'){
            $roles->status ='inactive';
            if($roles->save()){
                return redirect('roles');
            }
            else{
                return "Operation Failed!.";
            }
        }
        else{
            $roles->status = 'active';
            if($roles->save()){
                return redirect('roles');
            }
            else{
                return "Operation failed";
            }
        }

    }
    else{
        return "Opertaion Failed!.";
    }
}
public function viewAddRoles(){
        
    return view('Roles.addroles');
}
function storeroles(Request $req){
    // echo "user permission group  ".$req->input('permissionGroup');
    // echo "user permission name  ".$req->permission_name; 
    // echo "user permission status  ".$req->status;

    
    $role = new ManageRole();
    // *********************************************
    // **********Generate Permission key**********
    // *********************************************
   
    
    $role->user_type = $req->input('user_type');
    $role->role_name = $req->input('role_name');
    $role->division = "drdo";
    $role->user_type_id = 22;
    $role->status = $req->input('status');
   

    if($role->save()){
        return redirect('/roles');
    }
    else{
        return "Operation Failed!";
    }

}
public function deleteroles($id){
    try {
        ManageRole::where('id',$id)->delete();
        return redirect('/roles')->with('success','Role Deleted successfully!');
    } catch (\Exception $e) {
        return redirect('/roles')->with('fail',$e->getMessage());
        
    }
}
public function ViewEditRoles($id){
   
    $role = ManageRole::find($id);
    return view('Roles.vieweditroles',compact('role'));
}

function EditRoles(Request $req, $id){
    
  
    $role = ManageRole::find($id);
     
   
    
    
    $role->user_type = $req->input('user_type');
    $role->role_name = $req->input('role_name');
    $role->division = "drdo";
    $role->user_type_id = 22;
    $role->status = $req->input('status');

 
  
  if($role->save()){
      return redirect('/roles');
  }
  else{
      return "Operation Failed";
  }

}
}
