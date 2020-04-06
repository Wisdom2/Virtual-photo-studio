<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Enquiries</h3>
  </div>
  <div class="panel-body">
    
    <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Sender Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
          </thead>
         

          <tbody>

             <?php

              foreach($customer->getCustomerEnquiries() as $enquiry){?>
              <tr>
                  <td><?php echo $enquiry["name"]; ?></td>
                  <td><?php echo $enquiry["email"]; ?></td>
                  <td><?php echo substr($enquiry["msg"], 0,5) ."..." ; ?></td>
                  <td>
                    <a class="btn btn-default replymails" href="#" data-value='<?php echo $enquiry["email"]; ?>' data-msg='<?php echo $enquiry["msg"]; ?>' 
                    data-user = '<?php echo $_SESSION["user_name"]; ?>'
                    data-receiver-name = '<?php echo $enquiry["name"]; ?>'
                    >Reply</a>
                  </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
  </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="replyEnquiry" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header main-color-bg">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">dbp Photography - Reply mail</h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-12">
                <form action="../backoffice/controllers/mailing/mailing.php" method="POST">
                    
                    <div class="form-group">
                        <label for="sender_email">Enquired:</label>
                        <textarea class="form-control" id="receiver_messaged" name="receiver_messaged" readonly="readonly" style="resize: none;"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="receiver_email">To:</label>
                        <input type="text" class="form-control" id="receiver_email" name="receiver_email" readonly="readonly">
                      </div>
                <div class="form-group">
                  <label for="sender_subject">Subject:</label>
                  <input type="text" class="form-control" id="sender_subject" name="sender_subject" placeholder="message title" required="required">
                </div>
                <div class="form-group">
                  <label for="slname">Message:</label>
                  <textarea name="msg" row="10" col="10" id="msg" class="form-control" required="required"></textarea>
                  <input type="hidden" name="receiver_name" id="receiver_name">
                </div>
                
                <button type="submit" name="replymail" id="replymail" class="btn btn-info btn-block">Send</button>
                
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.replymails').on('click', function(){
       // alert($(this).data("value"));
       $('#msg').attr("placeholder",$(this).data("user") + ", drop your message") ;
       $('#receiver_messaged').val($(this).data("msg"));
       $('#receiver_email').val($(this).data("value"));
       $('#receiver_name').val($(this).data("receiver-name"));
       $('#replyEnquiry').modal('toggle');
       $('#replyEnquiry').modal('show');
      })
     
    });
  </script>