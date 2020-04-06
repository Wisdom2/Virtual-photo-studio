
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
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">Customers</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">


             <?php
                 require "sidebar.php"; 
                 require "Customers_content.php"; 
            ?>

            

          
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
 <?php
  require "dashboard_global_footer.php";
 ?>