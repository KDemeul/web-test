<?php 
$ref = 'hatt_beamsteering';

$title = 'Enhanced needle localization in ultrasound using beam steering and learning-based segmentation ';

$abstract = 'Segmentation of needles in ultrasound images remains a challenging problem. In this paper, we introduce a machine learning-based method for needle segmentation in 2D beam-steered ultrasound images. We used a statistical boosting approach to train a pixel-wise classifier for needle segmentation. The Radon transform was then used to find the needle position and orientation from the segmented image. We validated our method with data from ex vivo specimens and clinical nerve block procedures, and compared the results to those obtained using previously reported needle segmentation methods. Results show improved localization success and accuracy using the proposed method. For the ex vivo datasets, assuming that the needle orientation was known a priori, the needle was successfully localized in 86.2% of the images, with a mean targeting error of 0.48 mm. The robustness of the proposed method to a lack of a priori knowledge of needle orientation was also demonstrated. For the clinical datasets, assuming that the needle orientation was closely aligned with the beam steering angle selected by the physician, the needle was successfully localized in 99.8% of the images, with a mean targeting error 0.19 mm. These results indicate thatthe learning-based segmentation method may allow for increased targeting accuracy and enhanced visualization during ultrasound-guided needle procedures.';

$algo = array(
	'Machine learning-based method (statistical boosting approach)',
	'Radon transform'
	);

$result = array(
	'Average error ≈ 0.48mm (0.19mm when needle orientation closely aligned with the beam steering angle)'
	);

include('abstract-summary.php');
?>