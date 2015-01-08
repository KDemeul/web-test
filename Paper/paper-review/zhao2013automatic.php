<?php 
$ref = 'zhao2013automatic';

$title = 'Automatic Needle Detection and Tracking in 3D Ultrasound Using an ROI-Based RANSAC and Kalman Method ';

$abstract = 'This article proposes a robust technique for needle detection and tracking using threedimensional ultrasound (3D US). It is difficult for radiologists to detect and follow the position of micro tools, such as biopsy needles, that are inserted in human tissues under 3D US guidance. To overcome this difficulty, we propose a method that automatically reduces the processed volume to a limited region of interest (ROI), increasing at the same time the calculation speed and the robustness of the proposed technique. First, a line filter method that enhances the contrast of the needle against the background is used to facilitate the initialization of ROI using the tubularness information of the complete US volume. Then, the random sample consensus (RANSAC) and Kalman filter (RK) algorithm is used in the ROI to detect and track the precise position of the needle. A series of numerical inhomogeneous phantoms with a needle simulated from real 3D US volumes are used to evaluate our method. The results show that the proposed method is much more robust than the RANSAC algorithm when detecting the needle, regardless of whether or not the insertion axis corresponds to an acquisition plane in the 3D US volume. The possibility of failure is also discussed in this article.';

$algo = array(
	'Line filtering (enhance contrast)',
	'Model fitting (RANSAC)',
	'Tracking (KALMAN)',
	);

$result = array(
	);

$connectedTo = array(
	'Uher-13'
	);

include('abstract-summary.php');

$connectedTo = array();
?>