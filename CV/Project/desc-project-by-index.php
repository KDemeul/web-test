<div>
	<?php
	$title = array("dr. slamsson","starcraft","the guarding problem","flocus");
	$subtitle = array("an autonomous robot","artificial intelligence","multi-agent problem","full needle localization in ultrasound images");
	$pic = array("robot.jpg","starcraft.jpg","guard.jpg","Banner.png");
	$git = array("","/Blole/DD2438-2014-assignment3","/Blole/DD2438-2014-assignment2","/KDemeul/Flocus");
	?>
	<div class="separator"></div>
	<div class="row">
		<div class="col-md-offset-11 cold-md-1">
			<a class="fa fa-close fa-lg btn-caroussel close-pj"></a>
		</div>
		<h1><?php echo($title[$index])?></h1>
	</div>
	<div class="separator">
	</div>
	<div class="row vertical-align">
		<div class="col-md-offset-1 col-md-1">
			<a class="fa fa-angle-left fa-4x btn-caroussel previous-pj"></a>
		</div>
		<div class="col-md-4">
			<img class="img-responsive img-rounded" src=<?php echo('"Images/Projects/' . $pic[$index] . '"');?>/>
		</div>
		<div class="col-md-4" style="text-align: justify;">
			<h3><?php echo($subtitle[$index])?></h3>
			<?php 
				include('Project/'. $index . '.html');
			?>
		</div>
		<div class="col-md-1">
			<a class="fa fa-angle-right fa-4x btn-caroussel  next-pj"></a>
		</div>
	</div>
	<div class="separator"></div>
</div>