<?php include("includes/header.php") ?>

  <?php include("includes/nav.php") ?>

  <!DOCTYPE html>
	<html lang="English">
		<head>
			<h1 style="text-align:center;">Welcome to my swiss knife website application</h1>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<br>
			<?php echo "Today is the " . date("d-m-Y") . "<br>";?>
		</head>
		<body style="text-align:center">
		</br>
		<form action="upload.php" method="post" enctype="multipart/form-data" style="text-align:center">
			<br>Please select an image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload" name="upload">
		</form>
		</body>
	</html>

<?php include("includes/footer.php") ?>