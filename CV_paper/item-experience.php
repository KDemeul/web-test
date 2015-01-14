<div class="line row">
<div class="col-xs-1" style="width: 1cm; height: <?php echo($height); ?>px;"></div>
	<div class="col-xs-2 timeline timeline-progress full-height timeline-work " style="height: <?php echo($height); ?>px;"></div>
		<div class="col-xs-8 content-wrap">
		<div class="line-content line-content-education">
			<!-- Job title & subtitle -->
			<h3 class="section-item-title-1"><?php echo($job_title); ?></h3>
			<!-- Job time & loc-->
			<h4 class="job"><i class="fa fa-flag"></i> <?php echo($job_status); ?> <?php if($job_date !=''){echo('&nbsp;&nbsp;');}?> <span class="job-date"><?php echo($job_date); ?></span></h4>
			<!-- Job subtitle -->
			<?php if($job_subtitle != ''){?>
				<h3 class="section-item-title-2"><?php echo($job_subtitle); ?></h3>
			<?php }?>
			<!-- Job desc -->
			<div class="job-description">
				<p><?php echo($job_desc); ?></p>
			</div>
			<!-- /Content -->
		</div>
	</div>
	<!-- /Item Content -->
	<!-- Margin Collum -->
	<div class="col-xs-1" style="height: <?php echo($height); ?>px;"></div>
	<!-- /Margin Collum -->
</div>