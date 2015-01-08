<?php 
$ref = 'UHER-08';

$title = 'Multi-resolution parallel integral projection for fast localization of a straight electrode in 3d ultrasound images ';

$abstract = 'We address the problem of fast and accurate localization of miniature surgical instruments like needles or electrodes using 3D ultrasound (US). An algorithm based on maximizing a Parallel Integral Transform (PIP) can automatically localize line-shaped objects in 3D US images with accuracy on the order of hundreds of micrometers. Here we propose to use a multi-resolution to accelerate the algorithm signiſcantly. We use a maximum function for downsampling to preserve the high intensity voxels of a thin electrode. We integrate the multi-resolution pyramid into a hierarchical mesh-grid search of PIP. The experiments with a tissue mimicking phantom and breast biopsy data show that proposed method works well on real US images. The speed-up is threefold compared to original PIP method with the same accuracy 0.4 mm. A further speed-up up to 16 times is reached by an early stopping of the optimization, at the expense of some loss of accuracy.
';

$algo = array(
	'Parallel Integral Projection transform'
	);

$result = array(
	'Average error ≈ 0.4 mm',
	'Computation time 3 times better than in <a href="#Barva-ieeeTUFFC2008">Barva-ieeeTUFFC2008</a>'
	);

$connectedTo = array(
	'Barva-ieeeTUFFC2008'
	);

include('abstract-summary.php');

$connectedTo = array();
?>