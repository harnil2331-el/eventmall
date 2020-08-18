<?php
  include_once 'header.php';
 ?>

 <section class="main-container">
        <div class="main-wrapper">
          <br><br><br>
          <h2 style="text-align:center">Stakeholder Sign Up</h2>
          <div class="ui raised very padded text container segment">
              <form class="ui form" action="sregistration.php" method="post">
                <label>Name</label><br>
                <div class="two fields">
                  <div class="field">
                    <input type="text" name="first" placeholder="First Name">
                  </div><br>
                  <div class="field">
                    <input type="text" name="last" placeholder="Last Name">
                  </div>
                </div><br>
                  Firm Name
                
                  <div class="field">
                    <input type="text" name="firmname" placeholder="First Name">
                  </div><br>
                     
                Stakeholder Id<br>
                <div class="ui small input fluid">
                  <input type="text" name="sid"  placeholder="ID" value="" required>
                </div><br>
                
                
                 <br>
                  Categories
                <div class="ui small input fluid">
                  <select name="category"  required>
                    <option value="caterors">Caterors</option>
                    <option value="decorators">Decorators</option>
                    <option value="fashion designers">Fashion designers</option>
                    <option value="photographers">Photographers</option>
                    <option value="hotels">Hotels</option>
                    <option value="transportation">transportation</option>
                  </select>
                </div><br>
                  Email <br>
                <div class="ui small input fluid">
                  <input type="email" name="email" placeholder="email" value="stakeholder@gmail.com" required>
                </div><br>
                  Password <br>
                <div class="ui small input fluid">
                  <input type="password" name="spwd" placeholder="Password" value="test123" required>
                </div><br>
                <button class="ui button primary" type="submit" name="submit">Sign Up</button>
              </form>
          </div>
       </div>
  </section>

<?php
  
?>
