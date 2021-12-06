<?php

session_start();
include('db_connection.php');
error_reporting(0);
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $sql = $conn->prepare("INSERT INTO `feedback`(`name`, `email`, `number`, `message`) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $name, $email, $number, $message);
    $sql->execute();
    if ($sql) {
        # code...
        $msg = "Thanking you for the feedback, we will get back to you.";
    }

}
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="assets/images/FB_IMG_1601542583861.jpg">
    <title>Helping Hands | Contact Us</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    #bottom li a{
      color: white;
    }
    #bottom li a:hover{
      color: Crimson;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <!-- ======== header started ========= -->
<?php include('header.php');?>

  <!-- ======== main started ========= -->

  <main class="charity-01-main">

    <!-- ============abt-01 Section  Start============ -->

    <section class="abt-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper">
                        <h3>Contact Us</h3>
                        <ol>
                            <li>Home<i class="far fa-angle-double-right"></i></li>
                            <li>Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="bg-0-b">
         <div class="container">
             <div class="row">
                 <div class="main-card-contact d-flex">
                     <div class="sup-card-contact">
                         <div class="sup-content">
                             <div class="head-content">
                                 <h2>Leave a message here</h2>
                                 <p>We are here to help you in all the situations that people are in need. Contact us for all your queries</p>
                             </div>

                             <div class="contact-title">
                                 <h2>Donate</h2>
                                 <ol>
                                     <li><i class="far fa-map-marker-check"></i>Kolimigundla</li>
                                     <li><i class="fal fa-mobile"></i>+91 9550112323,&nbsp; 8790441551,&nbsp;9642291420</li>
                                     <li><i class="fal fa-envelope"></i>helpinghandskgl@gmail.com</li>
                                 </ol>
                             </div>
                         </div>
                     </div>

                     <div class="sup-card-contact-0a">
                         <div class="contact-a1">
                            <h5 class="text-center text-success"><?php echo "$msg";?></h5>
                             <form action="" method="post">
                                 <div class="dived d-flex">
                                     <div class="form-group">
                                         <div class="form-sup">
                                             <div class="cal-01">
                                                 <input type="name" name="name" id="" class="form-control"
                                                     placeholder="Enter Your Name">
                                                 <i class="fal fa-user-tie"></i>
                                             </div>

                                             <div class="cal-01">
                                                 <input type="phone" name="number" id="" class="form-control"
                                                     placeholder="Phone Number">
                                                 <i class="fal fa-phone"></i>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <div class="form-sup">
                                             <div class="cal-01">
                                                 <input type="email" name="email" id="" class="form-control"
                                                     placeholder="Enter Your Email">
                                                 <i class="fal fa-at"></i>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="ca-ool">
                                         <textarea name="message" cols="80" rows="6" class="form-control"
                                             placeholder="Message"></textarea>
                                     </div>
                                     <div style="margin-left: 13em;" class="mt-4">
                                        <input type="submit" name="submit" class="btn btn-success" style="padding-left: 4em;padding-right: 4em;">
                                         <!-- <button type="submit" class="btn btn-success" style="margin: 7;">Submit</button> -->
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="mab-01">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15410.097096009704!2d78.09810636627661!3d15.074406901448898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb4181c577a39e9%3A0xb6e36e96af4ab67d!2sKolimigundla%2C%20Andhra%20Pradesh%20518123!5e0!3m2!1sen!2sin!4v1622958477777!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </section>
  </main>

 <?php include('footer.php');?>
</body>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>