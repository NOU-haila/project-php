<?php
include'connect.php';?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

</head>
<body>
    <div class="continer">
        <button class="btn btn-primary my-5"><a href="user.php"
        class="text-light">add user</a>
             </button>
             <table class="table">
  <thead>
    <tr>
      <th scope="col">S1 no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>


    </tr>
  </thead>
  <tbody>
    <?php
$sql="select * from 'crud'";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?
        updateid='.$id.'"
        class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?
        deleteid='.$id.'"
        class="text-light">Delete</a></button>
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