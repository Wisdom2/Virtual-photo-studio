
<?php
   
    require "../backoffice/config.php";
    require "../backoffice/Model/customer.php";
    require "../backoffice/Model/booking.php";
    require "../backoffice/Model/customer_file.php";
    require "../backoffice/Model/transaction.php"; 
    require "../backoffice/controllers/customer/customers.php";
    require "../backoffice/controllers/booking/bookings.php";
    require "../backoffice/controllers/customer_file/customer_files.php";
    require "../backoffice/controllers/transaction/transactions.php";

  
?>

<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>
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

                  foreach ($customer->getCustomer($_SESSION["customer_email"]) as $customerDetail) {
                     echo $customerDetail["firstname"];
                   } 
                  
                ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="../backoffice/controllers/customer/logout.php?q=logout&req=../../../index.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>