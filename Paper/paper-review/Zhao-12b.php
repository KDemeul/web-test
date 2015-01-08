<?php 
$ref = 'Zhao-12b';

$title = 'Tracking biopsy needle using Kalman filter and RANSAC algorithm with 3D ultrasound';

$abstract = 'Ultrasound navigation technology is used for medical examinations and minimally invasive surgeries. This paper presents an improved method for tracking micro tools as biopsy metallic needles insertion using 3D ultrasound. Previously, the RANSAC [1] algorithm has been implemented to detect the needle inserted in human tissue in a stationary situation. In this paper, the Kalman filter is added to increase the stability of the RANSAC algorithm and realize an application in a dynamic situation. The RANSAC algorithm is used to get the needle axis direction and the position of the needle tip. The speckle tracking method is used to estimate the inserting speed of the needle. The Kalman filter uses the results given by the two methods above as the measurement to make the estimation of the direction of the needle and the position of the needle tip. The simulated results show that in both stationary and dynamic situations, the proposed method gives a more stable and accurate result than the RANSAC algorithm. ';

$algo = array(
	'Model fitting (RANSAC)',
	'Speckle tracking method',
	'Tracking (KALMAN)'
	);

$result = array(
	'Improved by at least 30% compared to RANSAC alone'
	);

include('abstract-summary.php');
?>