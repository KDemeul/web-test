<?php if($title != ''){?>
<div class="row">
	<div class="col-xs-10 show">
		<div class="row-title">
			<?php echo($title);?>
		</div>
	</div>
</div>
<?php }?>

<div class="separator-xxs"></div>

<?php if($subtitle != ''){?>
<div class="row row-eq-height">
	<div class="col-xs-10 show">
		<div class="row-subtitle">
			<?php echo($subtitle);?>
		</div>
	</div>
</div>
<?php }?>

<?php if($date != ''){?>
<div class="row row-eq-height">
	<div class="col-xs-8 show">
		<div class="row-date">
			<?php echo($date);?>
		</div>
	</div>
</div>
<?php }?>

<?php if($subsubtitle != ''){?>
<div class="row row-eq-height">
	<div class="col-xs-10 show">
		<div class="row-subsubtitle">
			<?php echo($subsubtitle);?>
		</div>
	</div>
</div>
<?php }?>

<?php if($p != ''){?>
<div class="row row-eq-height">
	<div class="col-xs-10 show">
		<div class="row-p">
			<?php echo($p);?>
		</div>
	</div>
</div>
<?php }?>
