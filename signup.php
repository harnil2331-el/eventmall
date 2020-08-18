<?php
  include_once 'header.php';
 ?>

 <section class="main-container">
        <div class="main-wrapper">
          <br><br><br>
          <h2 style="text-align:center">User Sign Up</h2>
          <div class="ui raised very padded text container segment">
              <form class="ui form" action="uregistration.php" method="post">
                <label>Name</label><br>
                <div class="two fields">
                  <div class="field">
                    <input type="text" name="first" placeholder="First Name">
                  </div>
                  <div class="field">
                    <input type="text" name="last" placeholder="Last Name">
                  </div>
                </div>
                User ID<br>
                <div class="ui small input fluid">
                  <input type="text" name="uid"  placeholder="user id" value="" required>
                </div><br>
                 
                City <br>
                <div class="ui small input fluid">
                  <select name="City" required>
                    <option value="Vadodara">Vadodara</option>
                    <option value="Surat">Surat</option>
                    <option value="Dahod">Dahod</option>
                    <option value="Bharuch">Bharuch</option>
                    <option value="Navsari">Navsari</option>
                    <option value="Ahemdabad">Ahemdabad</option>
                    <option value="Vapi">Vapi</option>
                    <option value="Ankleshwar">Ankleshwar</option>
                  </select>
                </div><br>
                  Gender
                  <div class="ui small input fluid">
                   <input type="radio" name="gen"  value="Male" checked>Male
                      <input type="radio" name="gen"  value="Female">Female
                      </div><br>
                  
                  Mobile Number
                  <div class="ui small input fluid">
                      <input type="phone" name="mob">
                      </div><br>
               
                  Email <br>
                <div class="ui small input fluid">
                  <input type="email" name="email" placeholder="email" value="user@gmail.com" required>
                </div><br>
                   Password <br>
                <div class="ui small input fluid">
                  <input type="password" name="pwd" placeholder="Password" value="" required>
                </div><br>
                
                <button class="ui button primary" type="submit" name="submit">Sign Up</button>
              </form>
          </div>
       </div>
  </section>

