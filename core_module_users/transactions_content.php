<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Transactions</h3>
              </div>
              <div class="panel-body">
               
                <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Booking Id</th>
                          <th>Customer Id</th>
                          <th>Payment Type</th>
                          <th>Transaction Code</th>
                          <th>Amount</th>
                          <th>Staus</th>
                          <th>User</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($transaction->getTransactions() as $transactions): ?>
                            <tr>
                              <td> <?php echo $transactions["bookings_id"]; ?></td>
                              <td> <?php echo $transactions["customers_id"]; ?></td>
                              <td> <?php echo $transactions["payment_type"]; ?></td>
                              <td> <?php echo $transactions["transaction_code"]; ?></td>
                              <td> <?php echo $transactions["amount"]; ?></td>
                              <td> <?php echo $transactions["status"]; ?></td>
                              <td> <?php echo $transactions["approvedby"]; ?></td>
                              <td> <?php echo $transactions["created_at"]; ?></td>
                              
                                <td>
                                  <div class="dropdown create">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                      Select
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                      
                                      <li><a href='transactions.php?status=approved&id=<?php echo $transactions["id"];?>&user=<?php echo $_SESSION["user_id"]?>'>Approve</a></li>
                                      
                                    </ul>
                                  </div>
                                </td>

                            </tr>
                          <?php endforeach ?>
                      </tbody>
                      
                    </table>
              </div>
            </div>