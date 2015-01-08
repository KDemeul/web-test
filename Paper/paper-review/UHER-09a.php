<?php 
$ref = 'UHER-09a';

$title = 'Needle localization methods in 3D ultrasound data ';

$abstract = 'Ultrasound imaging has shown to be well adapted for guidance of micro tools, such as biopsy needles or electrodes, in the human body. Indeed it is safe for both patient and physicians, it is cheap and flexible compared to other imaging modalities. The ultrasound imaging offers a real-time acquisition speed but it has to deal with a typical speckle noise and other acoustic artifacts in the image. In clinical practice the tool in ultrasound image is identified by a human expert. This paper gives an overview of automatic localization methods for needles or electrodes in 3D ultrasound data. We have developed two methods for axis localization: the 1 st method is based on Parallel Integral Projection for localization of a straight tool; the 2 nd method for axis localization of a curvilinear tool is based on model fitting using a RANSAC algorithm for robust and fast estimation. We present results on phantom data and breast biopsy data.';

$algo = array(
	'Parallel Integral Projection transform',
	'Model fitting (RANSAC)'
	);

$result = array(
	'Average error ≈ 0.15 – 0.2 mm (PIP transf.)',
	'Computational time ≈ 61 – 62 ms  (PIP transf.)',
	'Average error ≈ 1.4 – 3.2 mm (MR PIP)',
	'Computational time ≈ 5.5 – 7.3 ms  (MR PIP)',
	'Average error ≈ 0.3 – 0.6 mm (RANSAC)',
	'Computational time ≈ 0.6 – 1 ms  (RANSAC)'
	);

$connectedTo = array(
	'MRPIP',
	'Barva-ieeeTUFFC2008'
	);

include('abstract-summary.php');

$connectedTo = array();
?>