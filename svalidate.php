<?php
$sid=$_REQUEST['sid'];
$sps=$_REQUEST['spwd'];

    
		$link=new mysqli("localhost","root","","eventmall");
		$res=$link->query("select * from stakeholder where sid='$sid' and spwd='$sps'");
		$link->close();
		if($res->num_rows>0){
            header("location:index.php");
              echo "<script>";
              echo  "alert('login succesfully ');";
              echo  "</script>";
       }else{
            echo "<script>";
            echo "alert('UNAUTHORISED USER ');";
            echo "</script>";
            
                  header("location:slogin.php");    
        }
?>
