<?php
$fonts="arial";
$bgcolor="#C2C2C2";
?>


<!DOCTYPE html>
<html>
	<head>
		<title><?php echo"This is my secound php practise"?></title>
		<style>
			body{font-family: <?php echo"$fonts"?>;color:<?php echo"$fontcolor"?>;}
			.header-area{background-color:<?php echo"$bgcolor"?>;margin-top:20px;}
			.header-area h2, .footer-area h2{margin: 0}
			.main-content-area{background: #ccc;min-height:490px;padding: 10px;}
			.footer-area{background-color: <?php echo"#999"?>;text-align: center;margin-bottom: 30px;}
		</style>
	</head>
	<body style="width:750px;margin:0 auto">
		<section class="header-area">
				<h2 style="margin:0"><?php echo"PHP Header"?></h2>
		</section>
			<section class="main-content-area">
				<hr/>
					<p style="margin: 0;display: inline-block;">PHP Handling</p>


					<h4 style="float: right;margin:0"><?php 

					date_default_timezone_set('Asia/Dhaka');
					echo"Time".date(" h:i:sa");

					?></h4>
				<hr/>
				<?php
					if (isset($_FILES['image'])) {
						$filename = $_FILES['image']['name'];
						$filetmp = $_FILES['image']['tmp_name'];
						move_uploaded_file($filetmp,"images/".$filename);
						echo "This file is successful";
					}
				?>
				<form action="" method="post" enctype="multipart/form-data">
					<input type="file" name="image">
					<input type="submit" value="submit">
				</form>
					
			</section>

		<section class="footer-area">
				<h2><?php echo"&copy ".date("Y")?> imran islam</h2>
		</section>
	</body>
</html>