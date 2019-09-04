<section class="grid" id="templateGrid1">
	<?= project([
		'title'=>'Esad Valenciennes',
		'intro'=>"<p>Site réalisé intégralement pour <b>l'École Supérieure d'Art et de Design</b> de <b>Valenciennes</b> (anciennement <i>École Supérieure Nationale des Beaux-Arts de Valenciennes</i>).</p> <p>Site réalisé sur <b>CakePHP 2</b> avec authentification, pages, actualités, et système de modules en pages d'accueil et d'informations.</p>",
		'background_color'=>'#FFEA6E',
		'cover'=>'img/projets/auto/esad.png',
		'url'=>'esadvalenciennes'
	]); ?>
	
	<div class="right grid">
		<?= project([
			'title'=>'Stephen Maas',
			'intro'=>"<p>Site réalisé sur CakePHP 2. Dispose d'un système d'administration et d'une navigation en <i>Ajax</i></p>",
			'background_color'=>'#71B6DB',
			'cover'=>'img/projets/auto/stephenmaas.png',
			'url'=>'stephenmaas'
		]); ?>

		<?= project([
			'title'=>'Petr Opelik',
			'intro'=>"<p>Site portfolio réalisé sur CakePHP 2 avec une <b>navigation originale</b> combinant Javascript (avec les librairie jQuery et Vivus), Ajax et Svg.</p>",
			'background_color'=>'#75DB71',
			'cover'=>'img/projets/auto/petropelik.png',
			'url'=>'petropelik'
		]); ?>
	</div>
</section>
<section class="ban" id="templateGrid2">
	<div class="grid">
		<?php
		echo project([
			'title'=>'Place aux Cartons',
			'intro'=>"<p>Site réalisé intégralement pour <b>l'Association Place aux Cartons</b> à <b>Valenciennes</b>.</p><p>Ce site dispose d'une d'authentification basique et d'un système d'administration maison à la volée grâce à l'attribut <code>contentEditable</code></p><p>Il est couplé à un WordPress pour la partie blog.</p>",
			'background_color'=>'#996F42',
			'cover'=>'img/projets/auto/placeauxcartons.png',
			'url'=>'placeauxcartons'
		]); 
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
		echo project([
			'title'=>'Emmanuel Prin',
			'intro'=>"<p>Porfolio administrable réalisé pour un ami à la sortie des Beaux-Arts. Ce site n'est plus en ligne.</p>",
			'background_color'=>'#F4A700',
			'cover'=>'img/projets/auto/emmanuelprin.png',
			'url'=>'emmanuelprin'
		]);

		echo project([
			'title'=>'Assurances Lewis',
			'intro'=>"<p>Maquette pour une société d'assurance.</p>",
			'background_color'=>'#7EC64E',
			'cover'=>'img/projets/auto/assurances_lewis.png',
			'url'=>'assuranceslewis'
		]); 

		//Screenshooter sur...
		//http://localhost/abcnatation/
		//Mais il y a des bugs alors bon...
		echo project([
			'title'=>'ABC Natation',
			'intro'=>"<p>Maquette pour une association.</p>",
			'background_color'=>'#996F42',
			'cover'=>'img/projets/auto/emmanuelprin.png',
			'url'=>'abcnatation'
		]); 
		?>
	</div>
</section>
<!-- Je suis en train d'oublier margot -->
<!-- Fuckin' hell -->
<section id="templateGrid4">
	<div class="grid">
		<?php 
		echo project([
			'title'=>'Margot',
			'intro'=>"<p>Ici on va faire du blabla.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/auto/margot.png',
			'url'=>'margot'
		]); 
				
		echo project([
			'title'=>'Mon propre site internet !',
			'intro'=>"<p>Parce qu'on est jamais aussi bien servi que par soi-même.</p>",
			'background_color'=>'#58ABE0',
			'cover'=>'img/projets/auto/chriscarton.png',
			'url'=>'chriscarton'
		]); 
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