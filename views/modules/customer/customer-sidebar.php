
<?php
     $item = 'c_email';
     $value = $_SESSION['c_email'];
     $customers = UserController::ctrShowUsers($item, $value);
?>

<div class="card my-3">
    <div class="card-header">
        <img src="views/img/users/<?php echo $customers['c_image']; ?>" class="img-fluid">
        <br>
        <span class="pt-3">Name: <?php echo $customers['c_name']; ?></span><br>
        <span class="pt-3">Email: <?php echo $customers['c_email']; ?></span>
    </div>

    <div class="card-body">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="cust-account" class="nav-link active"><i class="fa fa-list"></i> My Orders</a>
            </li>

            <li class="nav-item">
                <a href="logout" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>
</div>