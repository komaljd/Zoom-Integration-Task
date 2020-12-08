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
			<div class="HeroSection title text-center">
			<div class="formSection right-side" id="createMeeting">
						<form class="ZoomIntegrationForm" method="POST" action="create-fun.php">
							<div class="row create_meeting_form">
								<div class="col-md-12">
								<h1>Create Meeting Using Zoom  </h1>
								</div>
								<div class="col-md-6 m-auto">
									<div class="form-group">
										<input type="text" name="title" id="title" placeholder="Enter title" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Create meeting" name="Create_Meeting" id="meeting" class="btn btn-warning" >
									</div>

								</div>
							</div>
							<!--/.Create Meeting -->
						
						</form>
                        <!--  -->
                        <div class="meeting-link">
                         <?php
                            session_start();
                            if(isset($_SESSION['join_url']) && $_SESSION['join_url'] != "" && isset($_SESSION['password']) && $_SESSION['password'] != "" ){
                               
                                echo "Join URL: ". $_SESSION['join_url'];
                                echo "<br>";
                                echo "Meeting Password: ". $_SESSION['password'];
                            }
                         ?>
                         
                        </div>
					</div>
			</div>
		</div>
	</div>
</div>

<!-- script -->
<script src="assets/js/plugin.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
