<!-- TO SET : 
	$background
	$id
	$title
	$chapter (content)
	$next
-->
<div class="row <?php echo($background);?>" id="<?php echo($id);?>">
<div class="separator-sm"></div>
	<div class="col-xs-offset-3 col-xs-6 chapter">
		<div class="separator-xs"></div>
		<h1> <?php echo($title);?> </h1>
		<div class="rule-sm"></div>
		<?php 
		include($chapter);
		if($next != ''){
			include('next.php');
		} else {?>
			<div class="separator-xs"></div>
		<?}?>
	</div>
</div>