  
   <footer id="footer">
      <p>Copyright dbpPhotography, &copy; <?php echo date('Y');?></p>
    </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


     <script>
        $(document).ready(function(){
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
           $('#get_booking_id').val($(this).data("bookings-id"));
           $('#get_customers_id').val($(this).data("customer-id"));
           $('#UploadBookingFile').modal('toggle');
           $('#UploadBookingFile').modal('show');
          });

          $('.booking_videos').on('click', function(){
           // alert($(this).data("value"));
           $('#get_booking_ids').val($(this).data("booking-ids"));
           $('#get_customer_ids').val($(this).data("customers-ids"));
           $('#UploadBookingVideoFile').modal('toggle');
           $('#UploadBookingVideoFile').modal('show');
          });
        });
  </script>
  </body>
</html>
