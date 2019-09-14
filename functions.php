<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

function project($project){
	ob_start();
	?>
	<div class="project" style="background-color:<?php echo $project['background_color'] ?? 'white' ?>;">

		<div class="inner">
			<?php if(!empty($project['website'])):?>
				<a href="<?= $project['website'] ?>" target="blank">
					<?= $project['website'] ?>
				</a>
			<?php endif; ?>
			<h1>
				<?= $project['title'] ?>
			</h1>
			<?php if(!empty($project['cover'])): ?>
			<div class="img-container">
				<a href="?p=<?= $project['url'] ?>">
					<img src="<?= $project['cover'] ?>">
				</a>
			</div>
			<?php endif; ?>
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
	return ob_get_clean();
}
function concept($concept){
	ob_start();
	?>
	<div class="concept" style="background-image:url('<?php echo $concept['cover'] ?? ''; ?>');">
		
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

function card($src,$text=null,$arrow="top"){

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
	<div class="card">
		<div class="img-container">
			<a class="lightbox" href="<?= $src ?>">
				<img src="<?= $src ?>">
			</a>
		</div>
		<?php if(!empty($text)): ?>
		<div class="desc">
			<div class="icon">
				<?= $arrow ?>
			</div>
			<div class="text">
				<div>	
					<?= $text ?> 
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php
	return ob_get_clean();
}

function info($text,$direction=null){
	ob_start();
	?>
	<div 
		class="info"
		>
		<div class="icon">
			<?php
			if(!empty($direction)):
				if($direction=="up"){
					$arrow = '&uarr;'; 
				}else{
					$arrow ='&darr;';
				}
			else:
				$arrow = '&uarr;'; 
			endif;
			echo $arrow; 
			?>
		</div>
		<div class="text">
		<?= $text ?>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
?>