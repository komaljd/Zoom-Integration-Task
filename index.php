<?php
require_once 'config.php';
 $url = "https://zoom.us/oauth/authorize?response_type=code&client_id=".CLIENT_ID."&redirect_uri=".REDIRECT_URI;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zoom Integration</title>
	<link rel="stylesheet" type="text/css" href="assets/css/plugin.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="mainWrapper">
<div class="container">
		<div id="headerWrapper">
			<a href="javascript:;" class="logo">ZOOM</a>
		</div>
		<!-- body -->
		<div class="bodyWrapper">
			<div class="HeroSection title">
				<h1 class="text-white">PLESASE LOGIN FOR TOKEN  </h1>
					<a href="<?php echo $url; ?>" class="btn btn-primary">LOGIN</a>
				</div>
			</div>
		</div>
</div>

<!-- script -->
<script src="assets/js/plugin.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>