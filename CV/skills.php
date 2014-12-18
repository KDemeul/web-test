<div class="separator"></div>
		<div class="arrow center">
			<a href="#skills" class="bold"></a>
		</div>
<div id="skills"> <!-- class="parallax-window" data-parallax="scroll" data-image-src="Images/background-pi.png"> -->
	<div class="container">
		<div class="separator"></div>
		<div class="row">
			<div class="col-lg-offset-4 col-lg-4">
				<h1>MY SKILLS</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-offset-5 col-lg-2 underline"></div>
		</div>
		<div class="separator"></div>
		<div class="row">
			<div class="col-lg-3">
				<div class="row limit-max-width">
					<?php
						$id = "icon-robot";
						$datacontent = array("Mobile","Probabilistic","Medical");
						include("circle-button.php");
					?>
				</div>
				<div class="row">
					<h3>robotics</h3>
				</div>
			</div>			

			<div class="col-lg-3">			
				<?php
						$id = "icon-computer";
						$datacontent = array("C++","JAVA","C#","Matlab");
						include("circle-button.php");
					?>
				<div class="row">
					<h3>programming</h3>
				</div>
			</div>	

			<div class="col-lg-3">				
				<?php
						$id = "icon-eye";
						$datacontent = array("Microsoft Office","LaTeX");
						include("circle-button.php");
					?>
				<div class="row">
					<h3>office</h3>
				</div>
			</div>	

			<div class="col-lg-3">			
				<?php
						$id = "icon-brain";
						$datacontent = array("System","Control","Robotics");
						include("circle-button.php");
					?>
				<div class="row">
					<h3>a.i.</h3>
				</div>
			</div>	
		</div>
		<div class="separator"></div>
	</div>
</div>