 <?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `todolist` WHERE id = $id ";

mysqli_query($con, $q);

header("Location: https://projectofamansharma.000webhostapp.com"); 
?>