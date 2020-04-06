<div class="col-md-3">
            <div class="list-group">
              <a href="Dashboard.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="Transactions.php" class="list-group-item">
              	<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Transactions 
              </a>
              <a href="enquiries.php" class="list-group-item">
              	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Enquiries <span class="badge">
               
                <?php echo $customer->TotalCustomerEnquiry();?>

              </span></a>
              <a href="bookings.php" class="list-group-item">
              	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              	 Bookings 
              </a>
            </div>

        
     </div>
