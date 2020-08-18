<?php
      
     $fna=$_REQUEST['first'];
     $lna=$_REQUEST['last'];
     $frna=$_REQUEST['firmname'];    
     $sid=$_REQUEST['sid']; 
     $category=$_REQUEST['category'];
     $email=$_REQUEST['email'];
     $spwd=$_REQUEST['spwd'];

           
	    $link=new mysqli("localhost","root","","eventmall");
		$link->query("insert into stakeholder values('$fna','$lna','$sid','$frna','$category','$email','$spwd')");
		$link->close();
		header("location:slogin.php");
      ?>