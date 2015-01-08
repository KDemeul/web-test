<?php 
$ref = 'Chatelain13a';

$title = 'Real-time needle detection and tracking using a visually servoed 3D ultrasound probe';

$abstract = 'In this paper, we present a method to localize and track manually inserted needles in real-time using a 3D ultrasound probe mounted on a robotized arm. The system tracks the needle using online image processing. We first propose a new algorithm capable of robustly detecting a needle from the moment it is inserted, without any a priori information on the insertion direction. By combining the random sample consensus (RANSAC) algorithm with Kalman filtering in closed loop, we achieve robust real-time tracking of the needle. In addition, we propose a control scheme to automatically guide the ultrasonic probe in order to keep the needle within the field of view, while aligning its axis with the ultrasound beam. This method will ease the insertion of the needle by the operator, and allow the development of autonomous needle insertion by medical robots.';

$algo = array(
	'Model fitting (RANSAC)',
	'Tracking (KALMAN)',
	'Control scheme to automatically guide the probe',
	'No previous assumption (needle shape, needle insertion axis line)'
	);

$result = array(
	'Real-time application'
	);

include('abstract-summary.php');
?>