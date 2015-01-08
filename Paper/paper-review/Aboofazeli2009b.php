<?php 
$ref = 'Aboofazeli2009b';

$title = 'A new scheme for curved needle segmentation in three-dimensional ultrasound images';

$abstract = 'Ultrasound image guided needle insertion is the method of
choice for a wide variety of medical diagnostic and
therapeutic procedures. When flexible needles are inserted
in soft tissue, these needles generally follow a curved path.
Segmenting the trajectory of the needles in ultrasound
images will facilitate guiding them within the tissue. In this
paper, a novel algorithm for curved needle segmentation in
three-dimensional (3D) ultrasound images is presented. The
algorithm is based on the projection of a filtered 3D image
onto a two-dimensional (2D) image. Detection of the needle
in the resulting 2D image determines a surface on which the
needle is located. The needle is then segmented on the
surface. The proposed technique is able to detect needles
without any previous assumption about the needle shape, or
any a priori knowledge about the needle insertion axis line';

$algo = array(
	'Projection of 3D image to a 2D one',
	'Segmentation',
	'No previous assumption (needle shape, needle insertion axis line).'
	);

$result = array(
	'Average error &asymp; 2.8mm (less than 3.2% of the needle length)',
	'Computation time &asymp; 3sc'
	);


include('abstract-summary.php');
?>