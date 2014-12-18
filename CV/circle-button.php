<link href="css/button-style.css" rel="stylesheet">
<button type="button" class="circle-button" data-toggle="popover" id=<?php echo('"' . $id . '"');?>>
	<div class="skill-content" style="display: none">
		<ul class="list-unstyled popover-list">
		<?php foreach ($datacontent as $li) : ?>
			<li><span class="glyphicon glyphicon-ok" style="color: #E74C3C">  </span>
			<?php echo($li);?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</button>
