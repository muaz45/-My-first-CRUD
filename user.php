<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

$sql="insert into crud (name,email,password) values('$name','$email','$password')";
$result=mysqli_query($con,$sql);
if($result){
header('location:dispaly.php');
// echo"data insert successfully";
}else{
die(mysqli_error($con));
}
}
?>
<!doctype html>

<html lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>
    crud operation
</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
       <div class="form-group">
       <label >name</label>
        <input type="text" class="form-control"   placeholder="" name="name" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >email</label>
    <input type="email" class="form-control" placeholder="" name="email" autocomplete="off" >
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="password" class="form-control" placeholder="" name="password" autocomplete="off" >
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</body>
</html>

