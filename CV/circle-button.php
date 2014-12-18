<link href="css/button-style.css" rel="stylesheet">
<button type="button" class="circle-button" data-toggle="popover" id=<?php echo('"' . $id . '"');?>>
	<div class="skill-content" style="display: none">
		<ul class="list-unstyled center popover-list">
		<?php foreach ($datacontent as $li) : ?>
			<li>
			<?php echo($li);?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</button>
