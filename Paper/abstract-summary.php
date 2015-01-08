			<h4 id="<?php echo($ref);?>"><a href="<?php echo('Needle/' . $ref . '.pdf'); ?>" target="_blank"> <?php echo($title);?> </a></h4>
			<p>
				<?php echo ($abstract);?>
 				<ul class="fa-ul">
					<?php foreach ($algo as $field) {?>
					<li><i class="fa-li fa fa-arrow-circle-o-right"></i>
						<?php echo($field);?>
					</li>	
					<?php }?>
				</ul>
<!--				<ul class="fa-ul">
					<?php foreach ($result as $field) {?>
					<li><i class="fa-li fa fa-check-square"></i>
						<?php echo($field);?>
					</li>	
					<?php }?>
				</ul>

				<ul class="fa-ul">
					<?php foreach ($connectedTo as $field) {?>
					<li><i class="fa-li fa fa-link"></i>
						<a href="<?php echo('#' . $field)?>"><?php echo($field);?></a>
					</li>	
					<?php }?>
			</ul> -->
		</p>

		<div class="center ending">	<a href="#introduction" class="fa fa-angle-up"></a></div>
		<div class="separator-xs"></div>