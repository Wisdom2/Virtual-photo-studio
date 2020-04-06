
    <?php

        require "navbar.php";
       
        require "dashboard_global_header.php";

         if(!(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"]))) {
            header("Location:./index.php?q=login_error" );    
        }
    ?>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Dashboard</a></li>
          <li class="active">Bookings</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">


             <?php
                 require "sidebar.php"; 
                 require "bookings_content.php"; 
            ?>

            

          
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright  &copy; <?php echo date("Y") ?></p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script>
        /*$(document).ready(function(){
          $('.pack-more-info').on('click', function(){
           // alert($(this).data("value"));
           $('#booking-id').html($(this).data("booking-id"));
           $('#custFname').html($(this).data("customer-fname") + ' ' + $(this).data("customer-lastname"));
           $('#custGender').html($(this).data("customer-gender"));
           $('#custEmail').html($(this).data("customer-email"));
           $('#phoneNumber').html($(this).data("customer-phonenumber"));
           $('#showCustomer').modal('toggle');
           $('#showCustomer').modal('show');
          });

          $('.booking_ids').on('click', function(){
           // alert($(this).data("value"));
           $('#get_booking_id').html($(this).data("bookings-id"));
           
           $('#UploadBookingFile').modal('toggle');
           $('#UploadBookingFile').modal('show');
          });
        });*/
  </script>
  <?php
  require "dashboard_global_footer.php";
 ?>