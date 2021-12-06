<?php
error_reporting(0);     
session_start();
include('db_connection.php');
# User Credentials
if(isset($_POST['submit']))
{
    $uname = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = $conn->prepare("select * from admin where username = ?");
    $sql->bind_param("s", $uname);
    $sql->execute();
    $result = $sql->get_result();
    $row = $result->fetch_assoc();
    $Dbuname = $row['username'];
    $Dbpassword = $row['password'];

    
        if($Dbuname == $uname && $Dbpassword == $password){
        $_SESSION['username'] = $uname;
        header('location:uploadimage.php');
        }
        else{
            $error = "Invalid username or password";
        }                      
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Avanni">
    <title>Helping Hands | Admin</title>

   <link rel="shortcut icon" href="images/FB_IMG_1601542583861.jpg">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">

    @media only screen and (max-width: 769px)
      { 
        .rightnav{display: none;}
      }

        input[type='text'],input[type='email'],input[type='password']
        {
            border: none;
            outline: none;
            border-bottom: 1px solid gray;
            width: 70%;
        }

        .error{width: 70%;}
         .btn-grad {background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%);}
         .btn-grad {text-transform: uppercase;transition: 0.5s;background-size: 200% auto;color: white;box-shadow: 0 0 20px #eee;border-radius: 40px;display: block;width: 70%; border:none;}

          .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
          }
         
         .model{
            box-shadow: 4px 3px 14px 7px lightgray;
            padding: 0;
            margin: 0; 
            /*position: relative;*/
            width: 400px;
            height: 440px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
         }
         .text-grad{background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;}

    </style>
</head>
<body>
<!-- <?php include('header.php');?> -->

<!-- <div class="history-area default-padding-top container" align="center">
    <div class="row m-1"> -->
            <h5 class="text-center text-danger pt-2"><?php echo($error);?></h5>
           <h5 class="text-center text-danger pt-2"><?php echo "$mailerror";?></h5>
       <div class="model col-10" style="border-radius: 20px;">
            <svg style="border-radius: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,192L80,160C160,128,320,64,480,85.3C640,107,800,213,960,240C1120,267,1280,213,1360,186.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

            <h3 class="mb-4 text-center text-grad">LOGIN</h3>
            <form action="" method="post" class="pl-5 pr-5 pb-5 pt-2">
                <div class="mb-4" align="center">
                    <!-- <label for="email" class="email">Email id</label><br> -->
                    <input type="text" class="text-center" name="username" placeholder="Username" required>
                </div>

                <div class="mb-4" align="center">
                    <!-- <label for="email">Password</label><br> -->
                    <input type="password" class="text-center" id="" name="password" placeholder="Password" required>

                </div>

                <div align="center" class="mt-4 mb-4">
                    <input type="submit" class="btn-grad p-2" name="submit" id="submit">
                </div>
          
            </form>
        </div>

</body>
</html>