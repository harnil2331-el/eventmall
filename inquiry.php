<?php
      
     $email=$_REQUEST['email'];
     $comment=$_REQUEST['com'];
    

           
	    $link=new mysqli("localhost","root","","eventmall");
		$link->query("insert into inquiry values('$email','$comment')");
		$link->close();
		header("location:contact.php");
            echo "<script type='text/javascript'>";
            echo "alert('our customer executive contact you within 24 hours')";
            echo "</script>"; 
      ?>