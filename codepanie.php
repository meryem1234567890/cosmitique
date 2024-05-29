<?php 
 	session_start();
     include('connection.php');
 
     $photo=$_GET['photo'];
     $prix=$_GET['prix'];
     $nomp=$_GET['nomp'];
     $datep=date('Y-m-d');
  


     $_SESSION['email']=$data['emailc'] ;


     $ins=mysqli_query($conn,"insert into  codepanie(emailc,daten,nomp,photo,prix) values('$email','$daten','$nomp','$photo',$prix)");
   

?>