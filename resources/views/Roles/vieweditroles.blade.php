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
                <h4>Edit Roles</h4>
            </div>
            <div class="card-body">
                <form action = "/roles/{{$role->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="user_type" value="{{$role->user_type}}">Select User Type</label>
                        <select class="form-control" id="permissionGroup" name="user_type" value="{{$role->user_type}}">
                        <option>--Select User Type--</option>
                            <option>Administrator</option>
                            <option>Operation Manager</option>
                            <option>Operation Executive</option>
                            <option>Telecaller</option>
                            <option>Tester</option>
                            <option>SEO Manager</option>
                            <option>Department head</option>
                            <option>Assisted Buying</option>
                            <option>Operation Executive Enterprise</option>
                            <option>Home Buying Manager</option>
                            <option>Call Centre Manager</option>
                            <option>Developer</option>
                            <option>Analytics Manager</option>
                            <option>Call Centre Executive</option>
                            <option>Sales</option>
                            <option>TeleSales</option>
                            <option>Finance</option>
                            <option>HOL Interns</option>
                            <!-- Add other options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="role_name">Role Name</label>
                        <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Enter permission name"  value="{{$role->user_type}}">
                    </div>
                  
    <div class="form-group">
    <input type="radio" class="btn-check" name="status" id="active" value="active" autocomplete="off" checked>
              <label  for="active">ACTIVE</label>
              <input type="radio" class="btn-check" name="status" value="inactive" id="inactive"  autocomplete="off">
              <label  for="inactive">INACTIVE</label>
  
  </div> 
                    <button type="submit" class="btn btn-primary">SAVE</button>
                <a href="/roles">    <button type="button" class="btn btn-secondary">BACK</button></a>
                </form>
            </div>
        </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

  
    
</body>
</html>