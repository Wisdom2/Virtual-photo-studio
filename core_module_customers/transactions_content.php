<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Transactions</h3>
              </div>
              <div class="panel-body">
               
                <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Booking Id</th>
                          <th>Payment Type</th>
                          <th>Transaction Code</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Approved By</th>
                          <th>Created At</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($transaction->getTransaction($_SESSION["customer_id"]) as $transactions): ?>
                            <tr>
                              <td> <?php echo $transactions["bookings_id"]; ?></td>
                              
                              <td> <?php echo $transactions["payment_type"]; ?></td>
                              <td> <?php echo $transactions["transaction_code"]; ?></td>
                              <td> <?php echo $transactions["amount"]; ?></td>
                              <td> <?php echo $transactions["status"]; ?></td>
                              <td> <?php echo $transactions["firstname"] . " " . $transactions["lastname"]; ?></td>
                              
                              <td> <?php echo $transactions["created_at"]; ?></td>
                            
                            </tr>
                          <?php endforeach ?>
                      </tbody>
                      
                    </table>
              </div>
            </div>