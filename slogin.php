<?php
  include_once 'header.php';
 ?>

 <section class="main-container" >
        <div class="main-wrapper">
          <br><br><br>
          <h2 style="text-align:center">Stakeholder Login</h2>
          <div class="ui raised very padded text container segment" style="width:30%;">
              <form class="ui form" action="svalidate.php" method="post">
                <div class="ui fluid input">
                  <input type="text" name="sid" placeholder="Stakeholder ID" value="" required >
                </div><br>
                <div class="ui fluid input">
                  <input type="password" name="spwd" placeholder="Password" value="test123" required>
                </div><br>
                <button class="ui button primary" type="submit" name="submit">Login</button>
            </div>
        </div>
   </section>
