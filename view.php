<h1><?= $project['title'] ?></h1>
<div class="lead"><?= $project['intro'] ?></div>
<?php 
	if(!empty($project['images'])):
		foreach($project['images'] as $image):
debug($image);
		endforeach;
	endif;
?>