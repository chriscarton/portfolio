<div id="View">
	<div class="header">
		<div>
			<h1><?= $project['title'] ?></h1>
			<div class="lead"><?= $project['intro'] ?></div>
		</div>
	</div>
	<div class="content">
		<?php
		if(file_exists($path)){
			include_once($path);
		}
		?>
	</div>
</div>