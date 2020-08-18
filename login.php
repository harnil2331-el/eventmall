<?php
  include_once 'header.php';
 ?>

 <section class="main-container" >
        <div class="main-wrapper">
          <br><br><br>
          <h2 style="text-align:center">User Login</h2>
          <div class="ui raised very padded text container segment" style="width:30%;">
              <form class="ui form" action="uvalidate.php" method="post">
                <div class="ui fluid input">
                  <input type="text" name="uid" placeholder="User id" value="" required >
                </div><br>
                <div class="ui fluid input">
                  <input type="password" name="upass" placeholder="Password" required>
                </div><br>
                  <button class="ui button primary" type="submit" name="submit">Login</button></form>
            </div>
        </div>
   </section>
