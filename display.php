<?php
include 'connect.php';
?>

<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>
    crud operation
</title>
</head>
<body>
   <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">
         add user</a>
         
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">opration</th>
    </tr>
  </thead>


  <?php
$sql="select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
   while( $row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
       <td>
   <button class="btn btn-primary"><a href="update.php"
   updateid='.$id.'"class="text-light">update</a></button>
   <button class="btn btn-danger"><a href="delete.php"
   deleteid='.$id.'" class="text-light">Delete</a></button>
</td>
    </tr>';
   }
    
}


?>
   </tbody>
</table>
</div> 

</body>
</html>