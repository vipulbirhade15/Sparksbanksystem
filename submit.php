<?php
 $conn = mysqli_connect('localhost','root','');
  if($conn){
      echo "";
      }else{
          echo "no connection";
      }
      


mysqli_select_db($conn,'customers');


$Name=$_POST['Name'];
$Account=$_POST['Account no.'];
$Email=$_POST['Email'];
$Balance=$_POST['Balance'];

$query ="INSERT INTO `customersdata` (`Name`, `Account no.`, `Email`, `Balance`) 
VALUES ('$Name', '$Account', '$Email', '$Balance')";


mysqli_query($conn, $query);

header('location:customerinfo.php');



?>