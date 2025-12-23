<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql="select*from crud where id=$id";
$results=mysql_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email = $row['email'];
$password = $row['password'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE crud 
            SET name='$name', email='$email', password='$password' 
            WHERE id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location: display.php'); // or index.php
        exit();
    } else {
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
        <input type="text" class="form-control"   placeholder="" name="name" autocomplete="off"value=<?php echo $name;?>>
    
  </div>
  <div class="form-group">
    <label >email</label>
    <input type="email" class="form-control" placeholder="" name="email" autocomplete="off"value=<?php echo $email;?> >
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="password" class="form-control" placeholder="" name="password" autocomplete="off"value=<?php echo $password;?> >
  </div>

  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
    </div>
</body>
</html>

