<?php
$uid=$_REQUEST['uid'];
$ups=$_REQUEST['upass'];

    
		$link=new mysqli("localhost","root","","eventmall");
		$res=$link->query("select * from user where uid='$uid' and upwd='$ups'");
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
            
                  header("location:login.php");    
        }
?>
