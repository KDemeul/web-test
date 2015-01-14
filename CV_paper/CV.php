<div class="col-xs-12 separator-sm bg-darkblue">
</div>

<div class="col-xs-12 separator-lg"></div>
<div class="col-xs-12 separator-md"></div>

<div class="row">
	<div class="cv col-xs-6 show">
		<div class="CV-title"><span class="bold">Kilian</span> <span class="light">Demeulemeester</span></div>
	</div>
	<div class="cv col-xs-6">
		<div class="col-xs-6 right-line show">
			<div class="cv-status">23 ans, Célibataire </div>
			<div class="cv-adress">3 rue Gustave Courbet <br> 34090 Montpellier</div>
		</div>
		<div class="col-xs-6 show">
			<div class="cv-mail"><i class="fa fa-at"></i> kilian.demeule@gmail.com</div>
			<div class="cv-phone"><i class="fa fa-phone"></i> (+33) 06.88.55.29.37 </div>
		</div>
	</div>
</div>

<div class="col-xs-12 separator-lg"></div>

<div class="row ">
	<div class="col-xs-3">
		<div class="row">
			<div class="col-xs-offset-2 col-xs-10 category-title-offset">
				<span class="category-title">
					EDUCATION
				</span>
			</div>
		</div>
	</div>
	<div class="col-xs-9">
		<div class="row">
			<div class="col-xs-12">
				<?php 
				$date = 'August 2013 - March 2015';
				$title = 'KTH ROYAL INSTITUTE OF TECHNOLOGY';
				$subtitle = '<i class="fa fa-graduation-cap"></i> Double-degree program';
				$subsubtitle = 'Master degree in "Systems, Control and Robotics"';
				$p = '';
				include('education/uni.php');
				?>
			</div>
			<div class="col-xs-12 separator-xs"></div>
			<div class="col-xs-12">
				<?php 
				$date = 'September 2011 - June 2013';
				$title = 'SUPÉLEC';
				$subtitle = '<i class="fa fa-graduation-cap"></i> Engineering school';
				$subsubtitle = 'Computer science, project management, informations system, control';
				$p = '';
				include('education/uni.php');
				?>
			</div>
		</div>
	</div>
</div>

<div class="col-xs-12 separator-sm"></div>
<div class="col-xs-offset-1 col-xs-10 horizontal-line"></div>
<div class="col-xs-12 separator-sm"></div>

<div class="row">
	<div class="col-xs-3">
		<div class="row">
			<div class="col-xs-offset-2 col-xs-10 category-title-offset">
				<span class="category-title">
					EXPERIENCE
				</span>
			</div>
		</div>
	</div>
	<div class="col-xs-9">
		<div class="row">
			<div class="col-xs-12">
				<?php 
				$date = 'See <a href="http://kilian.demeule.free.fr" target="blank">kilian.demeule.free.fr</a> for more informations.';
				$title = 'PERSONNAL PROJECTS';
				$subtitle = "";
				$subsubtitle = "";
				$p = "
				<div class=\"separator-xs\"></div>
				<div class=\"row-subtitle\">Artificial Intelligence</div>
				<div class=\"row-date\">January 2014 - June 2014</div>
				In the context of the \"Artificial Intelligence and Multi Agent Systems\" course: implementation of scripted behaviors along with search algorithms inside the game Starcraft Broodwar.
				<div class=\"separator-xs\"></div>
				<div class=\"row-subtitle\">An autonomous robot</div>
				<div class=\"row-date\">September 2013 - December 2013</div>
				Conception and design of an autonomous robot. The robot had to find its way into a house (a wooden maze), detect, localize and identify the different objects inside the house. Implementation of advanced algorithms such as SLAM.
				<div class=\"separator-xs\"></div>
				<div class=\"row-subtitle\">TeXaS</div>
				<div class=\"row-date\">September 2012 - June 2013</div>
				Conception and implementation of the software TeXaS, a graphical user interface for creating LaTeX documents whithout the necessity to write down LaTeX code.   
				";
				include('education/uni.php');
				?>
			</div>
			<div class="col-xs-12 separator-xs"></div>
			<div class="col-xs-12">
				<?php 
				$date = 'September 2014 - February 2015';
				$title = 'LIRMM';
				$subtitle = 'Master thesis';
				$subsubtitle = "Needle localization in Ultrasound images";
				$p = "The project encompassed the exploration of techniques and methodologies best suited for solving the problem of needle localization in ultrasound images. Once done, we developed a software (C++, Qt, opencv) achieving automatic needle detection (axis and tip) and enhancing visualization.";
				include('education/uni.php');
				?>
			</div>
		</div>
	</div>
</div>

<div class="col-xs-12 separator-sm"></div>
<div class="col-xs-offset-1 col-xs-10 horizontal-line"></div>
<div class="col-xs-12 separator-sm"></div>

<div class="row">
	<div class="col-xs-3">
		<div class="row">
			<div class="col-xs-offset-2 col-xs-10 category-title-offset">
				<span class="category-title">
				</span>
			</div>
		</div>
	</div>
	<div class="col-xs-9">
		<div class="row">
			<div class="col-xs-12">
				<?php 
				$date = '';
				$title = 'LANGUAGE SKILLS';
				$subtitle = "";
				$subsubtitle = "";
				$p = "
				<div class=\"row\">
					<div class=\"col-xs-2\">
						<b> French </b> <br>
						<b> English </b> <br>
						<b> Swedish </b>
					</div>
					<div class=\"col-xs-9\">
						Native <br>
						Fluent <br>
						European level B2: advanced speaker
					</div>
				</div>
				";
				include('education/uni.php');
				?>
			</div>
			<div class="col-xs-12 separator-xs"></div>
			<div class="col-xs-12">
				<?php 
				$date = '';
				$title = 'INTERESTS';
				$subtitle = "";
				$subsubtitle = "";
				$p = "
				Book, trip, robotic, photoshop, 3D modeling, short film, informatic, badminton
				";
				include('education/uni.php');
				?>
			</div>
		</div>
	</div>
</div>