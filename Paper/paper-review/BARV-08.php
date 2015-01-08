<?php 
$ref = 'BARV-08';

$title = 'Parallel Integral Projection Transform for Straight Electrode Localization in 3-D Ultrasound Images';

$abstract = 'In surgical practice, small metallic instruments are frequently used to perform various tasks inside the human body. We address the problem of their accurate localization in the tissue. Recent experiments using medical ultrasound have shown that this modality is suitable for real-time visualization of anatomical structures as well as the position of surgical instruments. We propose an imageprocessing algorithm that permits automatic estimation of the position of a line-segment-shaped object. This method was applied to the localization of a thin metallic electrode in biological tissue. We show that the electrode axis can be found through maximizing the Parallel Integral Projection transform that is a form of the Radon transform. To accelerate this step, hierarchical mesh-grid algorithm is implemented. Once the axis position is known, localization of the electrode tip is performed. The method was tested on simulated images, on ultrasound images of a tissue mimicking phantom containing a metallic electrode, and on real ultrasound images from breast biopsy. The results indicate that the algorithm is robust with respect to variations in electrode position and speckle noise. Localization accuracy is of the order of hundreds of micrometers and is comparable to the ultrasound system axial resolution.';

$algo = array(
	'Parallel Integral Projection transform (hierarchical mesh-grid algorithm)'
	);

$result = array(
	'Average error &asymp; 100µm'
	);

include('abstract-summary.php');
?>