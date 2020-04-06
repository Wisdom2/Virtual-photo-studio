<div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Profile</h3>
                </div>
                <?php

                 foreach ($user->getUser($_SESSION["user_email"]) as $userDetail) {?>

                <div class="panel-body">
                    
              <form action="dashboard.php" method="POST">
                
                   <div class="form-group">

                    <label for="sfname">First name:</label>
                    <input type="text" class="form-control" id="user_fname" name="user_fname" value='<?php echo $userDetail["firstname"];?>' required="required" maxlength="49">
                    <?php $_SESSION["user_name"] = $userDetail["firstname"] ?>
                    <?php $_SESSION["user_id"] = $userDetail["id"] ?>

                  </div>
                  <div class="form-group">
                    <label for="slname">Surname:</label>
                    <input type="text" class="form-control" id="user_lname" name="user_lname" value='<?php echo $userDetail["lastname"];?>' required="required">
                  </div>
                  
                  <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select class="form-control" name="user_gender" id="user_gender">
                      <option value='<?php echo $userDetail["gender"];?>'>
                      <?php

                        echo $gender = $userDetail["gender"] == "male" ? "Male" : "Female";

                      ?>

                    </option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="sphonenumber">Contact Number:</label>
                    <input type="tel" class="form-control" id="user_phonenumber" name="user_phonenumber" value='<?php echo $userDetail["phonenumber"];?>' required="required">
                    
                  </div>
                  <div class="form-group">
                    <label for="semail">Email:</label>
                    <input type="email" class="form-control" id="user_email" name="user_email" value='<?php echo $userDetail["email"];?>' readonly="readonly">
                    
                  </div>
                  
                  <button type="submit" name="update_user_btn" id="update_user" class="btn btn-info">Update Profile</button>
            
          </form>
          
        </div>
    <?php } ?>  

</div>

<div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Update Password</h3>
                </div>
              
                <div class="panel-body">
                    
              <form action="dashboard.php" method="POST">
                
                   
                  <div class="form-group">
                    <label for="update_password">New Password:</label>
                    <input type="password" class="form-control" id="update_password" name="update_password" required="required">
                  </div>
                  
                  <div class="form-group">
                    <label for="retype_password">Retype Password:</label>
                    <input type="password" class="form-control" id="retype_password" name="retype_password" required="required">
                    
                  </div>
                  
                  <button type="submit" name="update_user_btn" id="update_user_btn" class="btn btn-info">Update Password</button>
            
          </form>
          
        </div>
     

      </div>

