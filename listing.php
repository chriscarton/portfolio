<div id="firstPart">
	<section class="row-1">
		<div class="intro">
			<h1>Projets en tant qu'indépendant</h1>
		</div>
		<div class="grid">	
			<?= project($projects['esadvalenciennes']); ?>
			
			<div class="subgrid">
				<?= project($projects['stephenmaas']); ?>
				<?= project($projects['petropelik']); ?>
			</div>
		</div>
	</section>
	<section class="row-2">
		<div class="grid">
			<?php
			echo project($projects['placeauxcartons']); 
			?>
			<div class="subgrid">
				<div class="info">
					<p>Les deux essais suivants ont conduit à l'élaboration de ce système de site <i>one page</i>.</p>
				</div>
				<?php 
				echo concept([
					'title'=>'Petit vélo',
					'url'=>'https://chris-carton.com/concepts/petitvelo',
					'cover'=>'img/concepts/petitvelo.png'
				]);
				echo concept([
					'title'=>'Open mind',
					'url'=>'https://chris-carton.com/concepts/openmind',
					'cover'=>'img/concepts/openmind.png'
				]);
				?>
			</div>
		</div>
	</section>
	<section class="row-3">
		<div class="grid">
			<?php
			echo project($projects['emmanuelprin']);
			echo project($projects['assuranceslewis']); 
			echo project($projects['abcnatation']); 
			?>
		</div>
	</section>
	<section class="row-4">
		<div class="grid">
			<?php 
			echo project($projects['margot']); 
			echo project($projects['chriscarton']); 
			?>
		</div>
	</section>
</div>
<div id="secondPart">
	<section class="row-5">
		<div class="intro">
			<h1>Projets en agence <small>(Les Sentinelles du Web)</small></h1>
		</div>
		<div class="grid">
			<?php 
			echo project($projects['popeo']); 
			echo project($projects['funster']); 
			echo project($projects['femmesdebretagne']); 
			echo project($projects['artbox']); 
			echo project($projects['blogcolony']); 
			echo project($projects['gtliens']); 
			echo project($projects['handi']); 
			echo project($projects['toprhu']); 
			echo project($projects['bzh']); 
			echo project($projects['trezulien']); 
			echo project($projects['festimove']); 
			?>
		</div>
	</section>
</div>