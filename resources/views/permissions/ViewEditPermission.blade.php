<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Permission Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Edit Permissions</h4>
            </div>
            <div class="card-body">
                <form action = "/permissions/{{$permission->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="permissionGroup" value="{{$permission->permission_group}}">Select Permission Group</label>
                        <select class="form-control" id="permissionGroup" name="permissionGroup" value="{{$permission->permission_group}}">
                            <option>--Select--</option>
                            <option>User</option>
                            <option>User Management</option>
                            <option>User List</option>
                            <option>Add User</option>
                            <option>User Snapshot</option>
                            <option>User Log</option>
                            <option>User Plan Management</option>
                            <option>Add Plan Type</option>
                            <option>Manage User Plan</option>
                            <option>Plan Consumption Log</option>
                            <option>New Plan Consumption Log</option>
                            <option>App User Management</option>
                            <option>App User</option>
                            <option>Add App User</option>
                            <option>Assisted Buying Listing</option>
                            <option>Campaign</option>
                            <option>Inventory Management</option>
                            <option>Inventory Listing</option>
                            <!-- Add other options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="permissionName">Permission Name</label>
                        <input type="text" class="form-control" id="permission_name" name="permission_name" placeholder="Enter permission name"  value="{{$permission->permission_name}}">
                    </div>
                  
    <div class="form-group">
    <input type="radio" class="btn-check" name="status" id="active" value="active" autocomplete="off" checked>
              <label  for="active">ACTIVE</label>
              <input type="radio" class="btn-check" name="status" value="inactive" id="inactive"  autocomplete="off">
              <label  for="inactive">INACTIVE</label>
  
  </div> 
                    <button type="submit" class="btn btn-primary">SAVE</button>
                <a href="/permissions">    <button type="button" class="btn btn-secondary">BACK</button></a>
                </form>
            </div>
        </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

  
    
</body>
</html>