<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Customers</h3>
              </div>
              <div class="panel-body">
                
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Firstname</th>
                        <th>Surname</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        
                      </tr>
                      
                      <?php foreach ($customer->getCustomers() as $customerDetail) { ?>

                      <tr>
                        <td> <?php echo $customerDetail["firstname"]; ?></td>

                        <td><?php echo $customerDetail["lastname"]; ?></td>
                        <td><?php echo $customerDetail["gender"]; ?></td>
                        <td><?php echo $customerDetail["email"]; ?></td>
                        <td><?php echo $customerDetail["phonenumber"]; ?></td>
                        
                        
                      </tr>

                      <?php }?>
                      
                    </table>
              </div>
              </div>



   </div>

   