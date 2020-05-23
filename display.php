

<!DOCTYPE html>
<html>
<head>
    <title>Todo List By Aman Sharma </title>
  <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">

 
</head>
<body>
 <div class="yourtodo"><p>Todo List </p></div>


 <?php

 include 'conn.php'; 
 $q = "select * from todolist ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr>
 <p>
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['todotitle'];  ?> </td>
 deadline
 <td> <?php echo $res['tododead'];  ?> </td>
 <td> <button > <a href="delete.php?id=<?php echo $res['id']; ?>" > Delete </a>  </button> </td>
</p>

 </tr>

 <?php 
 }
 ?>
 
    

    <a href="index.php">back to home page</a>