<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Interview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.border_upper
	{
		border: 10px solid;
		height: 500px;
		width: 500px;
		position: relative;
		top: 50px;
	}
	.border_inner
	{
		height: 350px;
		width: 350px;
		background: #e1e1d0;
		margin: 65px;
	}
	.upload
	{
		text-align: center;
	}


</style>
<body>
	<div class="container">
		<form action="getquote.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6">
				<div class="border_upper">
					<div class="border_inner">
						<div class="upload">
							<input type="file" name="albm" id="fileToUpload" class="form-group">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="position: relative;top: 50px;">
				<h4 style="color:red">Framing Quote Tool</h4>
				<div style="border:1px solid black;padding:10px">
					<p>Framing Options (enter size of being framed)</p>
					<div style="display: flex;padding: 5px;">
						<span style="margin-right: 20px;">Width</span>
						<select name="width" required>
							<option value="">Choose</option>
							<option value="100">100</option>
							<option value="200">200</option>
							<option value="300">300</option>
							<option value="400">400</option>
							<option value="500">500</option>
							<option value="600">600</option>
							<option value="700">700</option>
							<option value="800">800</option>
						</select>
						<select>
							<option>Choose</option>
							<option>12</option>
							<option>12</option>
							<option>12</option>
							<option>12</option>
						</select>
					</div>
					<div style="display: flex;padding: 5px;">
						<span style="margin-right: 16px;">Height</span>
						<select name="height" required>
							<option value="">Choose</option>
							<option value="100">100</option>
							<option value="200">200</option>
							<option value="300">300</option>
							<option value="400">400</option>
							<option value="500">500</option>
							<option value="600">600</option>
							<option value="700">700</option>
							<option value="800">800</option>
						</select>
						<select>
							<option>Choose</option>
							<option>12</option>
							<option>12</option>
							<option>12</option>
							<option>12</option>
						</select>
					</div>
				</div>
				<div style="border: 1px solid black;padding: 20px;margin-top: 20px;">
					<button style="border:none;color: white;background: red;padding: 5px;font-weight: bold;" name="submit" type="submit">Get Quote</button>
				</div>
			</div>
		</div>
		</form>
	</div>
<?php
// error_reporting(0);
// if(isset($_POST['submit'])){
//     $albm = $_REQUEST['albm'];
//             $dir = 'albums/'.$albm.'/';
//             $files = scandir($dir);
//             arsort($files);
//             foreach ($files as $file) {
//                     if ($file != '.' && $file != '..') {
//                             $info = getimagesize($dir . $file);
//                             $width = $info[0];
//                             $height = $info[1];
//                             echo '<img src="' . $dir . $file . '"/>';
//                             echo $width.$height;
//                     }
//             }
// }
?>
</body>
</html>