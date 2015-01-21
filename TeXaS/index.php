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
	<link href="css/strip.css" rel="stylesheet">
	<link href="css/edit.css" rel="stylesheet">
	<link href="css/background.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="css/bootstrap-social.css" rel="stylesheet">

</head>
<body>
	<?php include("top-navbar.html");?>

	<div class="separator-sm"></div>
	<div class="separator-sm"></div>

	<div>
		<?php include("left-navbar.html");?>
	</div>
	<div id="main-pan">
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="edit">
				<div style="width: 1140px;">
					<?php include('edit.php'); ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="setting">
				Application settings 
			</div>
			<div role="tabpanel" class="tab-pane fade" id="personalize">
				Personalize the document
			</div>
			<div role="tabpanel" class="tab-pane fade" id="code">
				LaTeX code editor
			</div>
			<div role="tabpanel" class="tab-pane fade" id="export">
				Export document to PDF
			</div>
			<div role="tabpanel" class="tab-pane fade" id="help">
				Help with the app
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
	<!-- Custom script -->
	<script src="js/jquery.hotkeys.js"></script>
	<script src="js/customscript.js"></script>
</body>
</html>