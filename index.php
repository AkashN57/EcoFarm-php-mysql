

<html>
    <head>
        <title>
        Multi User Login System
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
         crossorigin="anonymous">
    </head>
    <body class="bg-dark">
       <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
       <form action="login.php" method="POST" class="border shadow p-3 rounded" style="width:450px">
    <h1 class="bg-primary text-white text-center py-3">LOGIN</h1>
    
        
  <div class="mb-3">
    <label for="username"
     class="form-label text-white">Username</label>
    <input type="text"
     name="username"
     class="form-control" 
     id="username" required>
  </div>

  <div class="mb-3">
    <label for="password" 
    class="form-label text-white">Password</label>
    <input type="password" 
    name="password"
    class="form-control"
    id="password" required>
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Select User Type:</label>
  </div>
  <select name="role" class="form-select mb-3" aria-label="Default select example" required>
  <option selected>Select</option>
  <option value="1">User</option>
  <option value="2">Admin</option>
  <option value="3">Field Officer</option>
  </select>
 
  <button type="submit" class="btn btn-success">Login</button>
  <button class="btn btn-primary"><a href="home1.php" style="text-decoration:none; color:white;">Home</a></button>

</form>
       <div>
    </body>
</html>