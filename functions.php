<?php 
function project($project){
	ob_start();
	?>
	<div class="project" style="background-color:<?php echo $project['background_color'] ?? 'white' ?>;">
		<div class="background-image" style="background-image:url('<?php echo $project['cover'] ?? ''; ?>');">
			
		</div>
		<div class="overlay"></div>
		<div class="pattern"></div>
		<div class="encart">
			<h1><?= $project['title'] ?></h1>
			<div class="intro">
				<?= $project['intro'] ?>
			</div>
			<div class="btn-container">
				<a class="btn">Suite <span class="arrow">→</span></a>
			</div>
		</div>
	</div>
	<?php
	$project = null;
	return ob_get_clean();
}

function concept($concept){
	ob_start();
	?>
	<div class="concept">
		<div class="background-image" style="background-image:url('<?php echo $concept['cover'] ?? ''; ?>');">
			
		</div>
		<div class="overlay"></div>
		<div class="pattern"></div>
		<div class="encart">
			<h2><?= $concept['title'] ?></h2>
			<div class="link-container">
				<a href="<?= $concept['url']; ?>" target="blank">
					<?= $text ?? 'Tester la démo' ?>
				</a>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();

}
?>