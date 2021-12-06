<?php

include('db_connection.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="assets/images/FB_IMG_1601542583861.jpg">
    <title>Helping Hands | Images</title>
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
    img{
      transition: 1s;
    }
    img:hover{
      transition: 1s;
      transform: rotate(7deg);
      border-radius: 50%;
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
                        <h3>Images</h3>
                        <ol>
                            <li>Home<i class="far fa-angle-double-right"></i></li>
                            <li>Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

     

     <div class="container" style="margin-top: 4em;">
       <div class="row ">
                  
          <?php 

          $sql = $conn->prepare("SELECT * FROM `images`");
          $sql->execute();
          $result = $sql->get_result();
          while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $image = $row['Image'];

          ?>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
              <a href="admin/images/<?php echo($image);?>"><img src="admin/images/<?php echo($image);?>" width="270" height="250" class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3"> </a>
            </div>
            
           
          <?php } ?>
           
       </div>
     </div>
                                   

    <!-- ========bg-03 started ========= -->



  </main>

<?php include('footer.php');?>
</body>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>