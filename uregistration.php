<?php
      
     $fna=$_REQUEST['first'];
     $lna=$_REQUEST['last'];
     $uid=$_REQUEST['uid']; 
     $city=$_REQUEST['city'];
     $gen=$_REQUEST['gen'];
     $mob=$_REQUEST['mob'];
     $ema=$_REQUEST['email'];
     $pwd=$_REQUEST['pwd'];

           
	    $link=new mysqli("localhost","root","","eventmall");
		$link->query("insert into user values('$fna','$lna','$uid','$city','$gen','$mob','$ema','$pwd')");
		$link->close();
		header("location:login.php");
      ?>