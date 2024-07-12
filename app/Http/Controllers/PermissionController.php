<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManagePermission;

class PermissionController extends Controller
{
    //
     public function ViewPermission(){
        $permission = ManagePermission::all();
        return view('permissions.permissions',compact('permission'));
   
}
public function viewAddPermission(){
        
    return view('permissions.addpermisssions');
}
function activePermissions($id){
    $permissions = ManagePermission::find($id);
    if($permissions){
        if($permissions->status == 'active'){
            $permissions->status ='inactive';
            if($permissions->save()){
                return redirect('/permissions');
            }
            else{
                return "Operation Failed!.";
            }
        }
        else{
            $permissions->status = 'active';
            if($permissions->save()){
                return redirect('/permissions');
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
function storePermission(Request $req){
    // echo "user permission group  ".$req->input('permissionGroup');
    // echo "user permission name  ".$req->permission_name; 
    // echo "user permission status  ".$req->status;

    
    $permission = new ManagePermission();
    // *********************************************
    // **********Generate Permission key**********
    // *********************************************
    $permissionKey =$req->permission_name;
    $permissionKeyArray = explode(' ',$permissionKey);
    $permission_lower = array_map('strtolower',$permissionKeyArray);
    $concatPermissionKey =implode('-',$permission_lower); 
    $generated_permission_key = 'dbho-'.$concatPermissionKey;
    
    
    $permission->permission_group = $req->input('permissionGroup');
    $permission->permission_name = $req->permission_name;
    $permission->permission_key = $generated_permission_key;
    $permission->permission_group_id = 22;
    $permission->status = $req->input('status');
    $permission->permission_group = $req->input('permissionGroup');

    if($permission->save()){
        return redirect('/permissions');
    }
    else{
        return "Operation Failed!";
    }

}
public function deletePermission($id){
    try {
        ManagePermission::where('id',$id)->delete();
        return redirect('/permissions')->with('success','User Deleted successfully!');
    } catch (\Exception $e) {
        return redirect('/permissions')->with('fail',$e->getMessage());
        
    }
}
public function ViewEditPermission($id){
   
    $permission = ManagePermission::find($id);
    return view('permissions.ViewEditPermission',compact('permission'));
}

function EditPermission(Request $req, $id){
    
  
    $permission = ManagePermission::find($id);
     
    $permissionKey =$req->permission_name;
    $permissionKeyArray = explode(' ',$permissionKey);
    $permission_lower = array_map('strtolower',$permissionKeyArray);
    $concatPermissionKey =implode('-',$permission_lower); 
    $generated_permission_key = 'dbho-'.$concatPermissionKey;
    
    
    $permission->permission_group = $req->input('permissionGroup');
    $permission->permission_name = $req->permission_name;
    $permission->permission_key = $generated_permission_key;
    $permission->permission_group_id = 24;
    $permission->status = $req->input('status');
    $permission->permission_group = $req->input('permissionGroup');

 
  
  if($permission->save()){
      return redirect('/permissions');
  }
  else{
      return "Operation Failed";
  }

}


}
