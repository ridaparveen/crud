<?php

  $stu_name = $_POST['sname'];
  $stu_address = $_POST['saddress'];
  $stu_class = $_POST['class'];
  $stu_phone = $_POST['sphone'];


  $conn = mysqli_connect("localhost","root","","new crud") or die("connection failed");
  // now add sql query and join twotables
  $sql ="INSERT INTO students(sname,saddress,sclass,sphone) VALUES('{sname}','{saddress}','{sclass}','{sphone}')";

  $results = mysqli_query($conn,$sql) or die("query unsucesfull");

 header("Location:http://localhost/crud/index.php");
 //
 mysqli_close($conn);

 ?>
