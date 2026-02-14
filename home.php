<?php 
include 'connection.php';
if(isset($_POST['btn'])){
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $course=$_POST['pos'];
      $sql = "insert into student_table(firstname,lastname,email,pos) 
      values('$fname','$lname','$email','$course')";

      $result = mysqli_query($conn, $sql);

      if($result){
        //echo "Data Entered Successfully";
        header('location:display.php');
      }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-body-secondary">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Management</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display.php">Display Students</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container my-5 bg-dark-subtle">
<form method="post" >
    <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" placeholder="Enter the Student First Name" autocomplete="off" required>
    </div>

    <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control" placeholder="Enter the Student Last Name" autocomplete="off" required>
    </div>

    <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter the Student email" autocomplete="off" required>
    </div>

    <div class="mb-3">
    <label class="form-label">Program of Study</label>
    <input type="text" name="pos" class="form-control" placeholder="Enter the Student Program" autocomplete="off" required>
    </div>
  
    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
    
</form>
</div>
        

</body>
</html>