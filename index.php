 <?php

include 'conn.php';

if(isset($_POST['done'])){

 $todotitle = $_POST['todotitle'];
 $tododead = $_POST['tododead'];
 $q = " INSERT INTO `todolist`(`todotitle`, `tododead`) VALUES ( '$todotitle', '$tododead' )";

 $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Todo List By Aman Sharma </title>
  <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">

 
</head>
<body>

    
<div class="logo"></div>    
  
    
 
 <form method="post" >

<div class="todolist"><p>Todo List By Aman Sharma </p>

<div class="todotitle">
<input type="text" name="todotitle" placeholder="Todo Title">
</div>

<div class="todotime">
<input type="date" name="tododead" >
</div>

<div class="todoreset">
<button type="reset">Reset</button>
</div>

<div class="todosubmit">

<button type="submit" name="done" placeholder="Log In">Add Todo </button></div>
     </div>
 </form>

<a href="display.php">Your Todo List</a>
 
</body>
</html>