<?php
error_reporting(0);
session_start();
include('db_connection.php');

if (isset($_POST['submit'])) {
  // $pimage = $_POST['pimage'];

  if (isset($_FILES['pimage']['name'])) {
    $imageName = $_FILES['pimage']['name'];
    if ($imageName!="") {
      # code...
    
    $ext = end(explode('.', $imageName));
    $imageName = "image".rand(0000,9999).".".$ext;
    $sourcePath = $_FILES['pimage']['tmp_name'];
    $destinationPath = "images/".$imageName;

    $upload = move_uploaded_file($sourcePath,$destinationPath);

    if($upload == true)
    {
      echo "<script>Image inserted successfully</script>";
    }
  }
  }
    else
  	{
  		$imageName = "";
  	}

  $sql = mysqli_query($conn, "INSERT INTO `images`(`Image`) VALUES ('$imageName')");
  if($sql) echo "<script>alert('New Image uploaded');</script>";
  else echo "Error in submission";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin | Home Page</title>
	<link rel="shortcut icon" href="images/FB_IMG_1601542583861.jpg">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css" >
  	.head{
  		height: 100px;
  	}
  	.head a{text-decoration: none;}
  
  input[type='text'],input[type='password'],select{
  	width: 100%;
  	border: none;
  	border-bottom: 1px solid lightgray;
  	outline: none;
  }

.model{
            box-shadow: 4px 3px 14px 7px lightgray;
            width: 400px;
            height: 200px;
            position: absolute;
            left: 40%;
            top: 110%;
            transform: translate(-50%, -50%);
       }
       form{
       	padding: 20px;
       }
       label{color: gray;}
  </style>
</head>
<body>
<section class="container p-4 head">
	<div class="float-left">
		<h4><a href="main.php">Welcome Admin</a></h4>
	</div>
	<div class="float-right">
		<a href="#" class="btn btn-outline-danger">Logout</a>
	</div>
	<hr style="margin-top: 70px;">
</section>

<section class="container">
	<div class="row">
		<?php include('slider.php');?>
		<div class="col-lg-8 col-md-8 col-sm-8 col-12">
				<div>
					<h5 style="color: gray;" class="p-3">Upload Image</h5>
				</div>
		<div class="model">
			<form action="" method="post" enctype="multipart/form-data" class="container">
				
				<div class="p-2">
					<label for="image">Image</label><br>
					<input type="file" name="pimage" id="image" accept="image/*" required>
				</div>
				
				<div class="p-3" align="center">
					<input type="submit" class="btn btn-outline-success pl-4 pr-4" name="submit" required>
				</div>
			</form>	
		</div>
		</div>
	</div>
</section>
</body>
</html>