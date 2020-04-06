
    <?php

        require "navbar.php";
       
        require "dashboard_global_header.php";

        if(!(isset($_SESSION["user_email"]) && !empty($_SESSION["user_email"]))) {
            header("Location:login.php?q=login_error" );    
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

   
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

  <?php
  require "dashboard_global_footer.php";
 ?>