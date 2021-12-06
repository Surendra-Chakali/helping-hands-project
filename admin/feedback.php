<?php

session_start();
include('db_connection.php');

if (isset($_POST['submit'])) {
	# code...
	$id = $_POST['deldesc'];

	$sql = $conn->prepare("DELETE FROM feedback WHERE id = ?");
	$sql->bind_param("i", $id);
	$sql->execute();
	if ($sql) {
		# code...
		echo "<script>alert('Feedback deleted');</script>";
	}
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

<section class="m-4">
	<div class="row">
		<?php include('slider.php');?>
		<div class="col-lg-8 col-md-8 col-sm-8 col-12">
			<div class="table-responsive p-4">
				<div>
					<h5 style="color: gray;" class="p-3">Manage users</h5>
				</div>
				<table class="table table-hover table-borderless text-center">

					<thead>
						<tr>
							<th>Name</th>
							<th>Email id</th>
							<th>Phone number</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php

					$sql = $conn->prepare("SELECT * FROM feedback");
					$sql->execute();
					$result = $sql->get_result();
					while ($row = $result->fetch_assoc()) {
						$id = $row['id'];
						# code...
						?>
						<tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['number'];?></td>
							<td><?php echo $row['message'];?></td>
							<td>
								<form action="" method="post">
									<input type="hidden" name="deldesc" value="<?php echo($id)?>">
									<input type="submit" name="submit" value="x" style="outline: none;border: none;background-color: white;">
								</form>
							</td>
						</tr>
						<?php
					}

					?>
					
				</table>
			</div>	
		</div>
	</div>
</section>
</body>
</html>