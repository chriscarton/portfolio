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
			<h1>
				<?php if(!empty($project['website'])):?>
					<small>
						<a href="<?= $project['website'] ?>" target="blank">
							<?= $project['website'] ?>
						</a>
					</small>
					<br>
				<?php endif; ?>
				<?= $project['title'] ?>
			</h1>
			<div class="intro">
				<?= $project['intro'] ?>
			</div>
			<?php if(!empty($project['url'])): ?>
				<div class="btn-container">
					<a href="?p=<?= $project['url'] ?>" class="btn">Suite <span class="arrow">→</span></a>
				</div>
			<?php endif; ?>
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

function debug($var){
	ob_start();
	?>
	<pre>
		<code>
<?php var_dump($var); ?>
		</code>
	</pre>
	<?php
	return ob_get_clean();
}
?>