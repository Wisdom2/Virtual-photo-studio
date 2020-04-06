
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Users</h3>

              </div>
              <div class="panel-body">
                
                <?php
                foreach ($user->getUser($_SESSION["user_email"]) as $role) {
               
                    if($role["roles_id"] == 1)
                    {
                    echo '<div style="float:right; margin-bottom:10px;">
                    <a href="#" data-toggle="modal" data-target="#userModal" class="btn btn-lg btn-info" role="button">Add Users</a>
                    </div>';
                    }

                  }

                ?>

                <table class="table table-striped table-hover">
                  
                  
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <?php foreach($user->getUsers()  as $user) {?>
                         <tr>
                            <td><?php echo $user["firstname"] . ' ' . $user["lastname"]; ?></td>
                            
                            <td><?php echo $user["gender"]; ?></td>
                            <td><?php echo $user["email"]; ?></td>
                            <td><?php echo $user["phonenumber"]; ?></td>

                            <td>  <?php echo $role = $user["roles_id"] == 1 ? "Administrator" : "User"; ?> </td>
            
                        </tr>

                      <?php }?>  

                    </tbody>
                    </table>
              </div>
            </div>


               <!-- The SIGNUP Modal -->
      <div class="modal fade" id="userModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header main-color-bg">
              <h4 class="modal-title">dbp Photography - User signup</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
              <div class="modal-body">
                 <form action="users.php" method="POST">
                    <div class="form-group">
                      <label for="user_fname">First name:</label>
                      <input type="text" class="form-control" id="user_fname" name="user_fname" required="required" maxlength="49">
                    </div>
                    <div class="form-group">
                      <label for="user_lname">Surname:</label>
                      <input type="text" class="form-control" id="user_lname" name="user_lname" required="required" maxlength="49">
                    </div>
                
                    <div class="form-group">
                      <label for="user_gender">Gender:</label>
                      <select class="form-control" name="user_gender" id="user_gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>

                     <div class="form-group">
                      <label for="user_phonenumber">Contact Number:</label>
                      <input type="text" class="form-control" id="user_phonenumber" name="user_phonenumber" required="required" maxlength="20">
                      <!-- <span id="contact-exist" style="color:red">contact exist</span> -->
                    </div>
                    <div class="form-group">
                      <label for="user_email">Email:</label>
                      <input type="email" class="form-control" id="user_email" name="user_email" required="required" maxlength="98">
                      <!-- <span id="email-exist" style="color:red">email exist</span> -->
                    </div>
                    <div class="form-group">
                      <label for="user_role">Role:</label>
                      <select class="form-control" name="user_role" id="user_role">
                        <?php

                             $role = new Role($db->connect());
                            foreach ($role->getRoles() as $roles):
                          ?>
                          <option value='<?php echo $roles["id"];?>'><?php echo $roles["name"];?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                     <div class="form-group">
                      <label for="user_password">Password:</label>
                      <input type="password" class="form-control" id="user_password" name="user_password" required="required" maxlength="58">
                    </div>
                    <div class="form-group">
                      <label for="user_confirm_password">Confirm Password:</label>
                      <input type="password" class="form-control" id="user_confirm_password" name="user_confirm_password" required="required" maxlength="58">
                    </div>
                    <button type="submit" name="signup" id="signup" class="btn btn-info">Send</button>
                    
                </form>
              </div><!-- ./modal end-->
      </div>
    </div>
  </div>
            

