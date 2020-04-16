<!--Turns on session and output buffering-->
<?php
  session_start();
  ob_start();

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;
 require_once( 'views/vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SCH||Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="views/css/bootstrap.css"><!--bootstrap-->
  <link rel="stylesheet" href="views/css/all.css"><!--webIcon-->
  <link rel="stylesheet" href="views/css/lightbox.min.css"><!--This is for the css gallery--->
	<link rel="stylesheet" type="text/css" href="views/css/cssvihecle.css"><!--my css-->
  <!-- SweetAlert vs2 -->
<script src="views/js/sweetalert2/sweetalert2.all.js"></script>
</head>

<body>
  <!--the preloader for the images srt-->
  <div class="preloader d-flex justify-content-center align-items-center">
    <img src="views/img/template/spinnerloader.gif" alt="the preloader"><br>
    <p>Loading...Please wait</p>
  </div>
  <!--the preloader for the images end--->
	<nav class="navbar navbar-expand-lg navbar-light bg-info">

      <a class="navbar-brand" href="#"><img src="views/img/template/fine.jpg" alt="banner" height="50px" width="50px" style="border-radius: 50%"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto px-5">

          <li class="nav-item active px-2">
            <a class="nav-link text-white" href="home">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item px-2">
            <a class="nav-link text-white" href="#inventory">Shop</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link text-white" href="#skills">Services</a>
          </li>

            <li class="nav-item px-2"> 
            <a class="nav-link text-white" href="#question">About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#contactus_modal">Contact Us</a>
          </li>

        </ul>


          <ul class="navbar-nav float-right">
         <li class="nav-item px-1">
                      <a class="nav-link text-white" href="cart">
                          <i class="fas fa-shopping-cart"></i>
                      </a>
                  </li>
              <?php if(!isset($_SESSION['c_email'])): ?>

                  <li class="nav-item px-1">
                      <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#login_modal">
                          Sign In
                      </a>
                  </li>

                  <li class="nav-item px-1">
                      <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#register_modal">
                          Sign Up
                      </a>
                  </li>

              <?php else: ?>
                  <li class="nav-item px-1">
                      <a class="nav-link text-white" href="logout">Log Out</a>
                  </li>
              <?php endif; ?>


          </ul>

      </div>

</nav><!---end of the nav-->
<?php 

/*===========================================================
=            FROM USER MODULE TO INCLUDE HEADER             =
===========================================================*/

 ?>
 
<!--Login modal-->
<div class="modal fade" id="login_modal">
    <div class="modal-dialog">
        <div class="modal-form login modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Login To Your Account</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="POST">

                    <div class="form-group">
                        <input type="email" name="c_email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="c_password" class="form-control" placeholder="password" required>
                    </div>
                    <input type="submit" name="login" class="btn btn-success btn-block" value="Login">

                    <div class="text-center mt-3">
                        <a href="#" data-toggle="modal" data-target="#register_modal" data-dismiss="modal">
                            Register
                        </a>
                        &nbsp;&nbsp; | &nbsp;&nbsp;
                        <a href="#" data-toggle="modal" data-target="#forgot_modal" data-dismiss="modal">
                            Forgot Password
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!--register modal-->
<div class="modal fade" id="register_modal">
    <div class="modal-dialog">
        <div class="modal-form register modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register Account</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Full Name</label>
                        <input type="text" class="form-control" name="c_name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Gender</label>
                        <select name="c_gender"class="form-control">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Email</label>
                        <input type="email" class="form-control" name="c_email" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Password</label>
                        <input type="password" class="form-control" name="c_password" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Image</label>
                        <input type="file" class="form-control" name="c_image" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Address</label>
                        <input type="text" class="form-control" name="c_location">
                    </div>

                    <input type="submit" name="register" value="Register" class="btn btn-success btn-block">

                </form>
            </div>
        </div>
    </div>
</div>


<!--Logs in user-->
<?php
  $login = new UserController();
  $login->ctrUserLogin();
?>

<!--Add / create new user-->
<?php
  $addUser = new UserController();
  $addUser->ctrAddUser();
?>


 <!--CONTACT US MODAL-->
<div class="modal fade" id="contactus_modal">
    <div class="modal-dialog">
        <div class="modal-form register modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact Support for any Query</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Subject</label>
                        <input type="text" class="form-control" name="subject">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Message</label>
                        <textarea class="form-control" name="message"></textarea>
                    </div>

                    <input type="submit" name="contact" value="Submit" class="btn btn-success btn-block">

                </form>
                <?php 


if (isset($_POST['contact'])) {
$sender_name = $_POST['name'];
$sender_email = $_POST['email'];
$sender_subject = $_POST['subject'];
$sender_message = $_POST['message'];
$receiver_email = "willsnyagah@gmail.com";
// mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);


$mail = new PHPMailer(true);
try{
//$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'willsnyagah@gmail.com';
$mail->Password = '33455310willis';
$mail->SMTPSecure = 'tls';
$mail->setFrom($sender_email, $sender_name);
$mail->addReplyTo('willsnyagah@gmail.com', 'nyaga');
$mail->addAddress('willsnyagah@gmail.com','admin');

$mail->isHTML(true);
$mail->Subject = $sender_subject;
$mail->Body    = $sender_message;
$mail->AltBody = 'This is a plain-text message body';

$mail->send();

echo "<script>
           swal({
            type:'success',
                    title: 'Success...',
                    text: 'Email sent successfully',
                    showConfirmButton: true,
                    confirmButtonText:'Close',
                    closeOnConfirm:false
            }).then((result)=>{
              if(result.value){
                window.open('home','_self');
              }
              });
           </script>";

 }catch(Exception $e){
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";   
 }  

}

                 ?>
            </div>
        </div>
    </div>
</div> 