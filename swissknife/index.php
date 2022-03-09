<?php
	require_once('includes/header.php');
	include('includes/nav.php');
?>

  <!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Tehaunuiss</title>
			<link rel="stylesheet" href="<?php echo $app_path ?>css/style.css"/>
			<h1 style="text-align:center;">Welcome</h1>
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

<?php include('includes/footer.php') ?>