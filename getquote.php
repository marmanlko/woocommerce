<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quote</title>
</head>
<body>
</body>
</html>
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
		height: 500+<?php echo $_POST['height']?>px;
		width: 500+<?php echo $_POST['width']?>px;
		position: relative;
		top: 50px;
	}
	.border_inner
	{
		/*height: 350px;
		width: 350px;*/
		/*background: #e1e1d0;*/
		margin: 50px;
		display: flex;
		justify-content: center;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="border_upper">
					<div class="border_inner">
						<?php
							error_reporting(0);
							if(isset($_POST['submit'])){
							    $albm = $_REQUEST['albm'];
							            $dir = 'albums/';
							            $path="albums/";
							            $files = scandir($dir);
							            $filename = $_FILES['albm']['name'];
							            move_uploaded_file($_FILES['albm']['tmp_name'],($path . $filename));
							            // print_r($files);
							            echo '<img src="' . $dir . $_FILES['albm']['name'] . '" height="'.$_POST['height'].'" width=="'.$_POST['width'].'"/>';
							            // echo'<br>';
							            // echo $dir . $filename['albm']['name'];
							            // arsort($files);
							            // foreach ($files as $file) {
							            //         if ($file != '.' && $file != '..') {
							            //                 $info = getimagesize($dir . $file);
							            //                 $width = $info[0];
							            //                 $height = $info[1];
							            //                 // echo '<img src="' . $dir . $file . '" height="'.$_POST['height'].'" width=="'.$_POST['width'].'"/>';
							                            
							            //         }
							            // }
							}
							?>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="position: relative;top: 50px;">					
					<div>
						<span style="margin-right: 10px;">Width:</span>
						<?php echo '"'.$_POST['width'].'"';?>, 
						<span style="margin-right: 10px;">Height:</span>
						<?php echo '"'.$_POST['height'].'"';?>

					</div>
					<span style="margin-right: 20px; font-weight: bold;"> Total Cost:</span>
					$<?php echo $_POST['width']*$_POST['height']*0.0002;?><br><br>
					<button style="border:none;color: white;background:#800080;padding: 5px;font-weight: bold;">Checkout</button>
			</div>
		</div>
		
	</div>