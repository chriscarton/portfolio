<section id="templateGrid1">
	<div class="section-intro">
		<h1>Projets en tant qu'indépendant (auto-entreprise)</h1>
	</div>
	<div class="grid">	
		<?= project($projects['esadvalenciennes']); ?>
		
		<div class="right">
			<?= project($projects['stephenmaas']); ?>
			<?= project($projects['petropelik']); ?>
		</div>
	</div>
</section>
<section class="ban" id="templateGrid2">
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
<section class="ban" id="templateGrid3">
	<div class="grid">
		<?php
		echo project($projects['emmanuelprin']);

		echo project($projects['assuranceslewis']); 

		//Screenshooter sur...
		//http://localhost/abcnatation/
		//Mais il y a des bugs alors bon...
		echo project($projects['abcnatation']); 
		?>
	</div>
</section>
<!-- Je suis en train d'oublier margot -->
<!-- Fuckin' hell -->
<section id="templateGrid4">
	<div class="grid">
		<?php 
		echo project($projects['margot']); 
		echo project($projects['chriscarton']); 
		?>
	</div>
</section>
<section id="templateGrid5">
	<div class="section-intro">
		<h1>Projets en agence (Les Sentinelles du Web)</h1>
		<p>Un peu de blabla</p>
	</div>
	<div class="grid">
		<?php 
		echo project([
			'title'=>'Popeo',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/popeo.png',
			'url'=>'popeo'
		]); 
		echo project([
			'title'=>'Funster',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/funster.png',
			'url'=>'funster'
		]); 
		echo project([
			'title'=>'Femmes de Bretagne',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/femmes_de_bretagne.png',
			'url'=>'femmesdebretagne'
		]); 
		echo project([
			'title'=>'Art Box',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/artbox.png',
			'url'=>'artbox'
		]); 
		echo project([
			'title'=>'Blog Colony',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/artbox.png',
			'url'=>'blogcolony'
		]); 
		echo project([
			'title'=>'Gt Liens',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/gtliens.png',
			'url'=>'gtliens'
		]); 
		echo project([
			'title'=>'Handi Val de Seine',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/handi.png',
			'url'=>'handi'
		]); 
		echo project([
			'title'=>'Top Rhu',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/toprhu.png',
			'url'=>'toprhu'
		]); 
		echo project([
			'title'=>'BZH Boutique',
			'intro'=>"<p>Comment défendre l'indéfendable ? Et bien c'est le client qui voulait ça ! Et puis je n'ai fais que l'intégration (<i>prestashop</i>)</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/bzh.png',
			'url'=>'bzh'
		]); 
		echo project([
			'title'=>'Camping de Trezulien',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/trezulien.png',
			'url'=>'trezulien'
		]); 
		echo project([
			'title'=>'Festimove',
			'intro'=>"<p>Blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/sdw/festimove.png',
			'url'=>'festimove'
		]); 
		?>
	</div>
</section>