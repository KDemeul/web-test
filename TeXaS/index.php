<!DOCTYPE html>
<html>
<head>
	<title>TeXaS</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom css -->
	<link href="css/top-navbar.css" rel="stylesheet">
	<link href="css/left-navbar.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/background.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="css/bootstrap-social.css" rel="stylesheet">

</head>
<body>
	<?php include("top-navbar.html");?>

	<div class="separator-sm"></div>
	<div class="separator-sm"></div>

    <div class="row">
		<div class="col-xs-2">
			<?php include("left-navbar.html");?>
		</div>
		<div class="col-xs-offset-1 col-xs-8">
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="edit">
					<?php include('lipsum.html');?>
					<?php include('lipsum.html');?>
					<?php include('lipsum.html');?>
					edit
				</div>
				<div role="tabpanel" class="tab-pane fade" id="setting">
					<?php include('lipsum.html');?>
					setting
				</div>
				<div role="tabpanel" class="tab-pane fade" id="personalize">
					<?php include('lipsum.html');?>
					perso
				</div>
				<div role="tabpanel" class="tab-pane fade" id="code">
					<?php include('lipsum.html');?>
					code
				</div>
				<div role="tabpanel" class="tab-pane fade" id="export">
					<?php include('lipsum.html');?>
					export
				</div>
				<div role="tabpanel" class="tab-pane fade" id="help">
					<?php include('lipsum.html');?>
					help
				</div>
		</div>
	</div>
</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/tooltip.js"></script>
	<!-- Custom script -->
	<script src="customscript.js"></script>
	<script src="parallax.js"></script>
</body>
</html>