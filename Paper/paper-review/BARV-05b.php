<?php 
$ref = 'BARV-05b';

$title = 'Automatic Localization of Curvilinear Object in 3D Ultrasound Images';

$abstract = 'Utilization of tools during surgical interventions sets the problem of their accurate localization within biological tissue. The ultrasound imaging represents an inexpensive and a flexible approach for a real-time image acquisition of tissue structure with metal instruments. There are several difficulties involving processing of ultrasound images: Their noisy nature makes the localization task difficult; the objects appear irregular and incomplete. Our task is to determine the position of a curvilinear electrode in biological tissue from a three-dimensional ultrasound image. Initially, the data are segmented by thresholding and processed with the randomized version of the RANSAC (R-RANSAC) algorithm. The curvilinear electrode is modeled by a three-dimensional cubic curve. Its shape is subject to check using a curvature measure in the hypothesis evaluation step of the R-RANSAC algorithm. Subsequently, we perform the least squares curve fitting to the data that have been marked by the R-RANSAC as the ones corresponding to the sought object. The position estimation is optimal with respect to the mean square criterion. Finally, the localization of the electrode tips is carried out by a hypothesis testing on the distances between projections of inliers on the estimated curve. The algorithm has been tested on real three- dimensional ultrasound images of a tissue mimicking phantom with a curvilinear object. From the results, we conclude that the method is very stable even if the data contain high percentage of outliers. The computational cost of the algorithm shows the possibility of real-time data processing';

$algo = array(
	'Thresholding',
	'Model fitting (R-RANSAC)',
	'Model fitting (Least-squares fitting)'
	);

$result = array(
	'Real-time application '
	);

include('abstract-summary.php');
?>