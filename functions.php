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

function projectCard($src,$text,$arrow="top"){

	switch($arrow){
		case 'top':
			$arrow = '&uarr;'; 
		break;
		case 'bottom':
			$arrow = '&darr;'; 
		break;
		case 'left':
			$arrow = '&larr;';
		break;
		case 'right':
			$arrow = '&rarr;';
		break;
	}

	ob_start();
	?>
	<div class="project-card">
		<div class="project-img-container">
			<img src="<?= $src ?>">
		</div>
		<?php if(!empty($text)): ?>
		<div class="project-desc">
			<div class="icon">
				<?= $arrow ?>
			</div>
			<div class="project-text">
				<?= $text ?> 
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php
	return ob_get_clean();
}
?>