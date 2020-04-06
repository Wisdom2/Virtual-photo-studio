<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Bookings</h3>
              </div>
              <div class="panel-body">
                
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Package</th>
                        <th>Service Type</th>
                        <th>Location</th>
                        <th>Reservation Date</th>
                        <th>Reservation Time</th>
                        <th>Reservation Status</th>
                        <th>Booked Date</th>
                        <th>Action</th>
                      </tr>


                      <?php
                        
                       foreach ($booking->getAllBookings() as $customerBooking) { ?>
                       
                      <tr>
                         
                         <td> <a href='#' class="pack-more-info" data-customer-fname='<?php echo $customerBooking["firstname"];?>'
                          data-customer-lastname='<?php echo $customerBooking["lastname"];?>'
                          data-customer-email='<?php echo $customerBooking["email"];?>'
                          data-customer-phonenumber='<?php echo $customerBooking["phonenumber"];?>'
                          data-customer-gender='<?php echo $customerBooking["gender"];?>'
                          data-booking-id='<?php echo $customerBooking["id"];?>'
                          ><?php echo $customerBooking["productname"];?></a> </td>
                         <td>

                          <?php
                               echo $serviceType =  $customerBooking["servicetype"] == "indoor" ? "On Premise" : "Out Studio";
                            ?>

                          </td>
                         <td> <?php echo $customerBooking["location"];?> </td>
                         <td> <?php echo $customerBooking["dates"];?> </td>
                         <td> <?php echo $customerBooking["times"];?> </td>
                         <td> <?php echo $customerBooking["bookingstatus"];?> </td>
                         <td> <?php echo $customerBooking["created_at"];?> </td>

                        <td>
                          <div class="dropdown create">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              Select
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              
                              <li><a href='bookings.php?bookingstatus=confirmed&booking_id=<?php echo $customerBooking["id"];?>'>Confirmed</a></li>
                              <li><a href='bookings.php?bookingstatus=checkedout&booking_id=<?php echo $customerBooking["id"];?>'>Checked Out</a></li>
                              <li><a href='#' class="booking_ids"
                                data-bookings-id='<?php echo $customerBooking["id"];?>'
                                data-customer-id='<?php echo $customerBooking["customers_id"];?>'
                              >Upload File</a>
                            </li>
                            <!-- <li>
                              <a href='#' class="booking_videos"
                                data-booking-ids='<?php //echo $customerBooking["id"];?>'
                                data-customers-ids='<?php //echo $customerBooking["customers_id"];?>'
                              >Upload Video</a>
                            </li> -->
                              
                            </ul>
                          </div>
                        </td>
                      </tr>


                      <?php }?>

                    </table>
              </div>
              </div>

             <div class="row">
               <div class="col-md-9">
                  <!-- Website Overview -->
                  <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                      <h3 class="panel-title">Images Will be shown here</h3>
                      
                    </div>
                    <div class="panel-body">

                      <?php foreach($customer_file->getCustomerImages() as $CustomerImage){?>
                      <div class="col-md-6">
                        <a href='<?php echo $CustomerImage["file_path"]?>' download>
                          
                          <div class="thumbnail">
                            <img src='<?php echo $CustomerImage["file_path"]?>' class="img-responsive"><br>
                            <a class="btn btn-danger btn-sm" role="button" href='bookings.php?rm=<?php echo $CustomerImage["id"]?>&file_name=<?php echo $CustomerImage["file_path"]?>'>Remove</a>
                          </div>

                        </a>
                      </div>
                    <?php }?>


                    </div>
                </div>

             </div>

          </div>

    </div>



   
    <!-- Modal -->
  <div class="modal fade" id="showCustomer" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header main-color-bg">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Photo Studio - Customer </h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-9">
 
               <label>Booking Id: </label>
                <span id="booking-id"></span> <br>
                <label>Name: </label>
                 <span id="custFname"></span>

                 <br>
                <label>Gender: </label> 
                 <span id="custGender"></span>
                 <br>
                <label>Email: </label>
                  <span id="custEmail"></span>

                <br>
                <label>Phone: </label>
                  <span id="phoneNumber"></span>

                 <br>
                
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal -->
  <div class="modal fade" id="UploadBookingFile" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header main-color-bg">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">dbp Photography - Customer Image Upload </h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-9">
                <form action="bookings.php" method="post" enctype="multipart/form-data">
                  
                    <label>Files: </label>
                    <input type="file" name="customerFiles" class="form-control" required="required">
                    <input type="hidden" name="get_booking_id" id="get_booking_id">
                    <input type="hidden" name="get_customers_id" id="get_customers_id">
                    <input type="hidden" name="get_users_id" id="get_users_id" value='<?php echo $_SESSION["user_id"]; ?>'>
                  
                  <button type="submit" name="upload_files" class="btn btn-success btn-block">Upload</button>
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

   
  <!-- Modal -->
  <div class="modal fade" id="UploadBookingVideoFile" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header main-color-bg">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">dbp Photography - Customer Video Upload </h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-9">
                <form action="bookings.php" method="post" enctype="multipart/form-data">
                  
                    <label>Files: </label>
                    <input type="file" name="customerFiles" multiple class="form-control">
                    <input type="hidden" name="get_booking_id" id="get_booking_ids">
                    <input type="hidden" name="get_customers_id" id="get_customer_ids">
                    <input type="hidden" name="get_users_id" id="get_user_ids" value='<?php echo $_SESSION["user_id"]; ?>'>
                  
                  <button type="submit" name="upload_video_files" class="btn btn-success btn-block">Upload</button>
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

  
                          
                        