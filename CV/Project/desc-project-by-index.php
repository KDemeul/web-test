<div>
	<?php
	$title = array("dr. slamsson","starcraft","the guarding problem","flocus");
	$subtitle = array("an autonomous robot","artificial intelligence","multi-agent problem","full needle localization in ultrasound images");
	$pic = array("robot.jpg","starcraft.jpg","guard.jpg","ultrasonix.jpg");
	?>
	<div class="separator"></div>
	<div class="row">
		<a class="col-md-offset-11 col-md-1 glyphicon glyphicon-remove big close-pj"></a>
		<h1><?php echo($title[$index])?></h1>
	</div>
	<div class="separator">
	</div>
	<div class="row">
		<a class="col-md-offset-2 col-md-1 glyphicon glyphicon-chevron-left big previous-pj"></a>
		<div class="col-md-3">
			<img class="img-responsive" src=<?php echo('"Images/Projects/' . $pic[$index] . '"');?>/>
		</div>
		<div class="col-md-4">
			<h3><?php echo($subtitle[$index])?></h3>
			<?php include("Lipsum/lipsum1.php");?>
		</div>
		<a class="col-md-1 glyphicon glyphicon-chevron-right big next-pj"></a>
	</div>
	<div class="separator"></div>
</div>