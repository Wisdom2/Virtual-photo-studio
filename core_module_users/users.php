
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
            <li class="active">Users</li>
          </ol>
        </div>
      </section>

        <section id="main">
        <div class="container">
          <div class="row">
            
            <?php require "sidebar.php"; ?>

            <div class="col-md-9">
              <!-- Main content  start-->
                
                <?php require "users_content.php";?>
              <!--Main content end  -->
            </div>
          </div>
        </div>
      </section>

      <?php
        require "dashboard_global_footer.php";
       ?>