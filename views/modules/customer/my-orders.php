<div class="card my-3">
    <div class="card-header">
        <center>
            <h1>My Orders</h1>
            <p class="lead">Your orders on one place</p>
        </center>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                      <th>Order No</th>
                      <th>Invoice No</th>
                      <th>Product </th>
                      <th>Quantity</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Date</th>
                  </tr>
                </thead>
                <tbody>

                <?php

                $item = 'c_email';
                $_value = $_SESSION['c_email'];
                $customers = UserController::ctrShowUsers($item, $_value);
                $c_id    = $customers['c_id'];

                $item  = 'o_c_id';
                $value = $c_id;
                $srNo  = 0;

                $orders = OrderController::ctrShowOrders($item, $value);
                foreach ($orders as $order) {
                    $srNo++;

                ?>

                  <tr>
                      <td># <?php echo $srNo; ?></td>
                      <td><?php echo $order['o_invoice'] ?></td>
                      <td>
                          <?php

                          $item = 'p_id';
                          $value = $order['o_p_id'];

                          $products = ProductController::ctrShowProduct($item, $value);

                          echo $products['p_title'];
                          ?>
                      </td>
                      <td><?php echo $order['o_qty'] ?></td>
                      <td>ksh. <?php echo $order['o_amount'] ?></td>
                      <td><?php echo $order['o_status'] ?></td>
                      <td><?php echo $order['o_date'] ?></td>

                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>
    </div>
</div>