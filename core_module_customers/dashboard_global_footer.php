 
	 <!-- Modal -->
  <div class="modal fade" id="Review" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header main-color-bg">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">dbp Photography - Customer </h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-9">
                <form action="bookings.php" method="post">
                  
                  <div class="form-group">
                    <label>Review:</label>
                    <textarea required="required" maxlength="500" name="review" class="form-control" row="12" cols="10" placeholder='<?php echo ucfirst($_SESSION["customer_name"]). ", "?>please tell us how your experience was like...'></textarea>
                    <input type="hidden" name="customer_id" value='<?php echo $_SESSION["customer_id"];?>'>
                  </div>

                  <div class="form-group">
                    <button name="customer_review" class="btn btn-primary btn-block">Submit</button>
                  </div>
                </form>
                
              </div>
          </div>
        </div>
        <div class="modal-footer">
           
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>








 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
