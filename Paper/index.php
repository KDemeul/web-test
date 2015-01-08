<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- <link rel="icon" href="../../favicon.ico"> -->

	<title>Master Thesis</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom css -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="css/bootstrap-social.css" rel="stylesheet">


</head>
<body>
	<?php 
		include('part/title.html');

		include("navbar.php");

		$background = 'grey-bg';
		$id = 'abstract';
		$title = 'Abstract';
		$chapter = 'part/abstract.html';
		$next = 'acknowledgement';
		include('chapter.php');
	
		$background = '';
		$id = 'acknowledgement';
		$title = 'Acknowledgement';
		$chapter = 'part/acknowledgement.html';
		$next = 'tableofcontent';
		include('chapter.php');

		include('part/tableofcontent.html');

		$background = '';
		$id = 'introduction';
		$title = 'Introduction';
		$chapter = 'part/introduction.html';
		$next = 'background';
		include('chapter.php');

		$background = 'grey-bg';
		$id = 'background';
		$title = 'Background';
		$chapter = 'part/background.html';
		$next = 'input';
		include('chapter.php');

		$background = '';
		$id = 'input';
		$title = 'Data acquisition';
		$chapter = 'part/input.html';
		$next = 'roi';
		include('chapter.php');

		$background = 'grey-bg';
		$id = 'roi';
		$title = 'Region of interest';
		$chapter = 'part/roi.html';
		$next = 'axis';
		include('chapter.php');

		$background = '';
		$id = 'axis';
		$title = 'Axis localization';
		$chapter = 'part/axis.html';
		$next = 'tip';
		include('chapter.php');

		$background = 'grey-bg';
		$id = 'tip';
		$title = 'Tip localization';
		$chapter = 'part/tip.html';
		$next = 'experiment';
		include('chapter.php');

		$background = '';
		$id = 'experiment';
		$title = 'Experiments & Results';
		$chapter = 'part/experiments.html';
		$next = 'conclusion';
		include('chapter.php');

	    $background = 'grey-bg';
		$id = 'conclusion';
		$title = 'Conclusion';
		$chapter = 'part/conclusion.html';
		$next = '';
		include('chapter.php');

		include('footer.php');
	?>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- Custom script -->
	<script src="customscript.js"></script>
</body>
</html>	
