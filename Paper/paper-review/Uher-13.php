<?php 
$ref = 'Uher-13';

$title = 'Line filtering for surgical tool localization in 3D ultrasound images';

$abstract = 'We present a method for automatic surgical tool localization in 3D ultrasound images based on line filtering, voxel classification and modelfitting. This could possibly provide assistance for biopsy needle ormicro-electrode nsertion, or a robotic system performing this insertion. The line-filtering method is first used to enhance the contrast of the 3D ltrasound image, then a classifier is chosen to separate the toolvoxels, in order to reduce the number of outliers. The last step is Random Sample Consensus (RANSAC) model fitting. Experimental results on several different polyvinyl alcohol (PVA) cryogel data sets demonstrate that the failure rate of the method proposed here is improved by at least 86% compared to the model-fitting RANSAC algorithm with axis accuracy better than 1 mm, at the expense of only a modest increase in computational effort. The results of this experiment show that this system could be useful for clinical applications.';

$algo = array(
	'Line filtering (enhance contrast)',
	'Voxel classification (separate tool voxels)',
	'Model fitting (RANSAC)'
	);

$result = array(
	'Failure rate: improved by at least 86% compared to RANSAC',
	'Average error &le; 1mm'
	);

include('abstract-summary.php');
?>