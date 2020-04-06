
<?php
        require "../backoffice/config.php";
        require "../backoffice/Model/user.php";
        require "../backoffice/Model/customer.php";
        require "../backoffice/Model/booking.php";
        require "../backoffice/Model/customer_file.php";
        require "../backoffice/Model/transaction.php";
        require "../backoffice/Model/role.php";
        require "../backoffice/Model/user_role.php";
        require "../backoffice/controllers/users/user.php";
        require "../backoffice/controllers/customer/customers.php";
        require "../backoffice/controllers/booking/bookings.php";
        require "../backoffice/controllers/customer_file/customer_files.php";
        require "../backoffice/controllers/transaction/transactions.php";
        require "../backoffice/controllers/role/roles.php";
        require "../backoffice/controllers/user_role/user_roles.php";

        if(!(isset($_SESSION["user_email"]) && !empty($_SESSION["user_email"]))) {
            header("Location:login.php?q=login_error" );    
        }

        foreach ($user->getUser($_SESSION["user_email"]) as $role) {
               
          if($role["roles_id"] == 1)
          {
          echo '<li><a href="users.php">Users</a></li>
               <li><a href="../reports/transaction_unfiltered.php">Report</a></li> ';
          }

        }

                
?>
 
                

                
                
              </ul>
              
            </div><!--/.nav-collapse -->
          </div>
        </nav>

      <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/logo.jpg" alt="logo" style="width:40px;">
              </a>
              <a href="../index.php" style="text-decoration: none;">
              Photo<span style="color:gold">Studio</span></a></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               
                <?php

                  foreach ($user->getUser($_SESSION["user_email"]) as $UserDetail) {
                     echo $UserDetail["firstname"];
                   } 

                ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="../backoffice/controllers/users/logout.php?q=logout&req=../../../core_module_users/login.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>