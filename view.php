<div id="View">
	<div class="project-header">	
		<h1><?= $project['title'] ?></h1>
		<div class="lead"><?= $project['intro'] ?></div>
	</div>
	<div class="project-content">
		<?php
		if(file_exists($path)){
			include_once($path);
		}
		?>
	</div>
</div>