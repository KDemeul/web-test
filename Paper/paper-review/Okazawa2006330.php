<?php 
$ref = 'Okazawa2006330';

$title = 'Methods for segmenting curved needles in ultrasound images ';

$abstract = 'Ultrasound-guided percutaneous needle insertions are widely used techniques in current clinical practice. Some of these procedures have a high degree of difficulty because of poor observability of the needle in the ultrasound image. There have been recent efforts t improved guidance by computer assisted needle detection. These software techniques are often limited by not representing needle curvature We present two methods to detect the needle in 2D ultrasound that specifically address needle curvature. Firstly, we demonstrate a real-time needle segmentation algorithm based on the Hough transform which detects the needle and represents its curved shape. Secondly we demonstrate how a new coordinate transformation can transform detection of a curved needle to a linear fit. These methods are demonstrated on ultrasound and photographic images.';

$algo = array(
	'Hough transform',
	'New coordinate transformation can transform detection of a curved needle to a linear fit'
	);

$result = array(
	'Average error &leq; 0.8 mm (method 2)'
	);

include('abstract-summary.php');
?>