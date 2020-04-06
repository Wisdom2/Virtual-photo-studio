<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Bookings</h3>
                <div style="float:right; margin-top: -20px;">
                  <a href="#" data-toggle="modal" data-target="#bookSession" class="btn btn-sm btn-success" role="button">Book Your sesssion</a>
                </div>
              </div>
              <div class="panel-body">
                
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Booking No</th>
                        <th>Package</th>
                        <th>Service Type</th>
                        <th>Location</th>
                        <th>Reservation Date</th>
                        <th>Reservation Time</th>
                        <th>Reservation Status</th>
                        <th>Booked Date</th>
                        
                      </tr>
                        
                      <?php
                        
                       foreach ($booking->getAllBookings() as $customerBooking) { ?>
                       
                      <tr>
                         <td> <?php echo $customerBooking["id"];?></td>
                         <td> 
                          <?php 
                              switch (strtolower($customerBooking["productname"])) {
                                case 'deluxe':
                                    echo "Deluxe";
                                    break;
                                case 'engagement_photography':
                                    echo "Engagement Photography";
                                    break;
                                case 'engagement_videography':
                                    echo "Engagement Videography";
                                    break;

                                case 'weddings_photography':
                                    echo "Weddings Photography";
                                    break;

                                case 'weddings_videography':
                                    echo "Wedding Videography";
                                    break;

                                case 'weddings_and_engagement':
                                    echo "Wedding + Engagement Photography";
                                    break;

                                case 'weddings_engagement_videography':
                                    echo "Wedding + Engagement Videography";
                                    break;

                                case 'premium':
                                    echo "Premium";
                                    break;

                                case 'corporate_shoot':
                                    echo "Corporate Shoot";
                                    break;


                                default:
                                  echo "unknown";
                                  break;
                              }

                            ?>
                           
                         </td>
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
  <div class="modal fade" id="bookSession" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header main-color-bg">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Photo Studio - Customer </h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-9">
                <form action="bookings.php" method="post">
                  <div class="form-group">
                    <label for="package">Package:</label>
                    <select name="package" class="form-control">
                      <option value="engagement_photography">Engagement Photography - GH 1,700</option>
                      <option value="engagement_videography">Engagement Videography - GH 1,500</option>

                      <option value="weddings_photography">Weddings Photography GH 1,700</option>
                      <option value="weddings_videography">Weddings Videography GH 2,000 </option>

                      <option value="weddings_and_engagement">Wedding & Engagement GH 2,500</option>
                      <option value="weddings_engagement_videography">Wedding & Engagement(Videography) GH 3,500</option>

                      <option value="deluxe">Deluxe GH 4,000</option>
                      <option value="premium">Premium - GH 2,500</option>
                      <option value="corporate_shoot">Corporate Shoot - GH 3000</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Date: </label>
                    <input type="date" name="booking_date" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                    <label>Time: </label>
                    <input type="time" name="booking_time" class="form-control" required="required">
                    <input type="hidden" name="customer_id" value="28">
                  </div>

                   <div class="form-group">
                    <label>Service Type: </label>
                    <select name="service_type" class="form-control">
                      <option value="indoor">On Premise</option>
                      <option value="outdoor">Outdoor Photo Studio</option>
                    </select>
                  </div>

                   <div class="form-group">
                    <label>Location: </label>
                    <textarea name="location" rows="10" cols="10" placeholder="please give us a vivid and concise of your location..." class="form-control" required="required" maxlength="198"></textarea>
                  </div>
                  <hr>
                  <h3>Payment Option</h3>
                  <div class="form-group">
                    <label>Payment Type:</label>
                    <select name="payment_option" class="form-control">
                      <option value="momo">MTN Mobile Money</option>
                      <option value="vodacash">Vodaphone Cash</option>
                      
                    </select>
                  </div>
                  <div class="form-group" id="mobile_money">
                    <label>Transaction Code:</label>
                    <input type="text" name="transaction_code" class="form-control" required="required" maxlength="98">
                  </div>

                  <div class="form-group">
                    <label>Amount:</label>
                    <input type="text" name="amount" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                    <button name="booking_session" class="btn btn-primary btn sm">Submit</button>
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

   
 

  
                          
                        