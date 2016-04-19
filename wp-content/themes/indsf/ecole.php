<?php 
/* 
Template Name: Niv2
*/ 
get_header(); ?>

<!-- INTRO -->
<div class="row conteneur-intro">
<?php
		// On execute un query pour récupérer la page souhaitée
		$my_query = new WP_Query( array('pagename' => 'ecole/letablissement'));
        // on boucle sur les résultat... (on ne trouve qu'une page enfaite, mais bon)
        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
			//On recupère les metadonnées de la miniature
			$thumb_img = get_post_meta( get_post_thumbnail_id() ); // Get post ID
			// On initialise le text_alternatif qu'on utilisera pour la miniature
			$thumb_title = get_post(get_post_thumbnail_id())->post_title; 
			$thumb_alttext = empty($thumb_img['_wp_attachment_image_alt']['0'])? $thumb_title : $thumb_img['_wp_attachment_image_alt']['0']
?> 
	<div class="col-md-6">
		<h2><?php the_title(); ?></h2>
		<div class="row cont-intro">
			<div class="col-md-12 bandeau1">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $thumb_alttext; ?>" title="<?php echo $thumb_title; ?>"/>
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</div>
<?php
    endwhile;
	endif;
    // 4. On réinitialise à la requête principale (important)
    wp_reset_postdata();
?>

<?php
	if(have_posts()) : while (have_posts() ) : the_post();
			//On recupère les metadonnées de la miniature
			$thumb_img = get_post_meta( get_post_thumbnail_id() ); // Get post ID
			// On initialise le text_alternatif qu'on utilisera pour la miniature
			$thumb_title = get_post(get_post_thumbnail_id())->post_title; 
			$thumb_alttext = empty($thumb_img['_wp_attachment_image_alt']['0'])? $thumb_title : $thumb_img['_wp_attachment_image_alt']['0']
?> 
	<div class="col-md-6">
		<h2><?php the_title(); ?></h2>
		<div class="row cont-intro">
			<div class="col-md-12 bandeau2">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $thumb_alttext; ?>" title="<?php echo $thumb_title; ?>"/>
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div> 
	</div>
<?php
    endwhile;
	endif;
?>
</div>
<!-- END INTRO -->

<!-- PROJET -->
<div class="row projet cont-projet">
	<h2>PROJET</h2>
	<h3>Vivre ensemble</h3>
		<div class="col-lg-12">
			
			<h4>Vivre ensemble et transmettre des valeurs humaines et chrétiennes</h4>
			<p>
			Notre projet fait bien sûr référence aux fondateurs de l’école, les Frères des Ecoles Chrétiennes. Nous cherchons à transmettre à la fois des savoirs et des valeurs.
			Les savoirs qui sont au cœur de notre enseignement respectent bien sûr les programmes officiels et le socle commun
			<br><a href="#">Lire la suite</a>
			</p>
		</div>
<!-- ------------------------------------ -->
	<h3>Vie enseignante</h3>
	<div class="col-lg-12">

		<h4>Promouvoir un enseignement de qualité et une culture humaniste</h4>
		<p>
			La réussite des apprentissages à l'école primaire est une étape essentielle pour les enfants. Nous apportons une attention particulière aux apprentissages fondamentaux, qui serviront de base à la construction de la vie scolaire des enfants, mais nous cherchons également à éveiller leur curiosité, à les ouvrir sur le monde.
			<br><a href="#">Lire la suite</a>
		</p>
	</div>

<!-- ------------------------------------ -->
	<h3>Accompagner l'élève</h3>
	<div class="col-lg-12">
		<h4>Accompagner l'élève dans son projet personnel</h4>
		<p>
			Pour accompagner les enfants, il faut d'abord les connaître et connaître leur environnement familial. Le contact avec les familles est donc essentiel. 
			<br><a href="#">Lire la suite</a>
		</p>
	</div>
	 

<!-- ------------------------------------ -->
	<h3>Anglais</h3>
	<div class="col-lg-12">
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget sodales felis. Vivamus lorem purus, posuere vel efficitur sit amet, viverra vitae magna. Aliquam id ipsum consectetur, tincidunt mauris sit amet, blandit libero. Cras iaculis pharetra elit. Ut maximus est vitae felis facilisis eleifend. Ut convallis arcu vel magna facilisis interdum. Nam ullamcorper ligula sed lectus auctor, id vestibulum dui pulvinar. Vivamus luctus interdum elit nec vehicula. Morbi pellentesque nulla ante, a ultrices dui dignissim vitae.
		<br><a href="#">Lire la suite</a>
		</p>
	</div>
</div>
<!-- END PROJET -->

<!-- CLASSES -->
<div class="classes">
		<h2>CLASSES</h2>
		<h3>Cycle 1: Le cycle des apprentissages premiers</h3>	
		<div class ="row">
				<div class="col-md-4">
					<p><strong>Le cycle 1 concerne les trois premiers niveaux de maternelle : </strong></p>
					<ul>
						<li>Toute petite section de maternelle (2 - 3 ans)</li>
						<li>Petite section de maternelle (3 - 4 ans)</li>
						<li>Moyenne section de maternelle (4 - 5 ans)</li>
					</ul>
				</div>
					
				<div class="col-md-4">
					<p><strong>Les objectifs du cycle sont les suivants : </strong></p>
					<ol>
		    			<li>S'approprier le langage</li>
		    			<li>Découvrir l'écrit</li>
		    			<li>Devenir élève</li>
		    			<li>Agir et s'exprimer avec son corps</li>
		    			<li>Découvrir le monde</li>
		    			<li>Percevoir, sentir, imaginer, créer</li>
					</ol>
				</div>

				<div class="col-md-4">
					<p><strong>Nos classes : </strong></p>
					<ul>
						<li><a href = "#"> Classe TPS</a></li>
						<li><a href = "#"> Classe PS</a></li>
						<li><a href = "#"> Classe MS</a></li>
						<li><a href = "#"> Classe GS</a></li>
					</ul>
				</div>
		</div>

		<h3>Cycle 2: Le cycle des apprentissages fondamentaux</h3>	
		<div class ="row">
				<div class="col-md-4">
					<p><strong>Le cycle 2 est à cheval sur l'école maternelle et sur l'école élémentaire :</strong></p>
					<ul>
						<li>Grande section de maternelle</li>
    					<li>Cours préparatoire</li>
    					<li>Cours élémentaire niveau 1</li>
    				</ul>
				</div>
					
				<div class="col-md-4">
					<p><strong>Les objectifs du cycle sont les suivants : </strong></p>
					<ol>
		    			<li>Maîtrise du langage et de la langue française</li>
		    			<li>Vivre ensemble</li>
		    			<li>Mathématiques</li>
		    			<li>Découvrir le monde</li>
		    			<li>Langue vivante étrangère</li>
		    			<li>Éducation artistique</li>
		    			<li>Éducation physique et sportive</li>
					</ol>
				</div>

				<div class="col-md-4">
					<p><strong>Nos classes : </strong></p>
					<ul>
						<li><a href = "#"> Classe GS</a></li>
						<li><a href = "#"> Classe CP</a></li>
						<li><a href = "#"> Classe CP/CE1</a></li>
						<li><a href = "#"> Classe CE1</a></li>
					</ul>
				</div>
		</div>

		<h3>Cycle 3: Le cycle des approfondissements</h3>	
		<div class ="row">
				<div class="col-md-8">
					<p><strong>Les trois dernières années à l'école primaire (CE2,CM1,CM2) constituent le "cycle 3". Les programmes définis par le Ministère de l'Education Nationale prévoient que les matières suivantes soient enseignées :</strong></p>
					
					<div class ="row">
						<div class="col-md-6">	
							<ul>
								<li>Maîtrise du langage et de la langue française</li>
								<li>Éducation civique</li>
								<li>Littérature</li>
								<li>Observation réfléchie de la langue française</li>
								<li>Langues étrangères ou régionales</li>
								<li>Histoire</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<li>Géographie</li>
								<li>Mathématiques</li>
								<li>Sciences expérimentales et technologie</li>
								<li>Arts visuels</li>
								<li>Éducation musicale</li>
								<li>Éducation physique et sportive</li>
							</ul>
						</div>
					</div>
				</div>
				

				<div class="col-md-4">
					<p><strong>Nos classes : </strong></p>
					<ul>
						<li><a href = "#"> Classe CE2</a></li>
						<li><a href = "#"> Classe CE2/CM1</a></li>
						<li><a href = "#"> Classe CM1</a></li>
						<li><a href = "#"> Classe CM2</a></li>
					</ul>
				</div>
		</div>

		<h3>LA CLIS</h3>
		<div class ="row">
				<div class="col-md-12">
				<p>Dans les écoles élémentaires, les classes pour l’inclusion scolaire (CLIS) accueillent des enfants présentant un trouble mental, auditif, visuel ou moteur, et pouvant tirer profit d’une intégration en milieu scolaire ordinaire.</br>Les élèves reçoivent un enseignement adapté au sein de la CLIS, et partagent certaines activités avec les autres écoliers. </p>
				</div>
		</div>
</div>
<!-- END CLASSES -->

<!-- ACTU -->
<div class="actus-ecole">
	<h2>ACTUALITES</h2>
	<div class="row cont-actu-ecole">
		
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 actus1">
			<h3>Operation Mille boites</h3>
			<img class="img-responsive" src='./img/1000_boites.jpg' alt="1000_boites"><a href="./page3.html" >
			</a	>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 actus2">
			<h3>Princes</h3>
			<img class="img-responsive" src='./img/princes_et_princesses.png' alt="princes">
			<p>Afin d'inscrire notre projet au sein de celui de l'école lié à l'international, la petite section a choisi de découvrir l'Inde avec ses élèves...<a href="./page3.html">lire la suite</a></p>	
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 actus3">
			<h3>Jardinage</h3>
			<img class="img-responsive" src='./img/jardinage.jpg' alt="jardinage">
			<p>Nous avons mis des pensées et des bulbes dans notre jardin. Il fallait faire un trou dans la terre, mettre la plante ou le bulbe et ramener....<a href="./page3.html">lire la suite</a></p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 actus4">
			<h3>Sablier</h3>
			<img class="img-responsive" src='./img/sablier.jpg' alt="sablier">
			<p>Fabrication d'un sablier en Grande Section. En atelier de décloisennement nous avons éssayé de fabriquer des sabliers: il faut d'abord prendre...<a href="./page3.html">lire la suite</a></p>
		</div>
		
	</div>
</div>
<!-- END ACTU -->

<!-- GALERIE -->
	<div class="row album cont-album ">
		<div class="col-md-12 pad-album">
			<h2>ALBUM PHOTOS</h2>
				<div class="row cont-album">
					<h3>Moyenne section 2014</h3>
						<img src="./img/ecole_album_img6.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img1.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img2.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img3.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img4.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img5.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
				</div>
				<div class="row cont-album">
					<h3>CE1 2014</h3>
						<img src="./img/ecole_album_img7.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img8.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img9.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img10.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img11.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
						<img src="./img/ecole_album_img12.jpg" alt="" class="col-xs--6 col-md-2 col-lg-2 thumbnail img-rounded">
				</div>
		</div>
	</div>
		
<!-- END GALERIE -->

<!-- INFOS PRATIQUES -->
<div class="infos-prat">
	<h3>INFORMATIONS PRATIQUES</h3>
		<div class="row cont-info">
			<div class="col-xs-12 col-md-3 col-lg-3">
				<h4>Tarifs</h4>
					<ul>
						<li><a href="*">Consulter nos tarifs</a></li>
					</ul>	
			</div>
			<div class="col-xs-12 col-md-3 col-lg-3">
				<h4>Liens et Téléchargements</h4>
					<ul>
						<li><a href="*">Les liens utiles de l'écoles</a></li>
						<li><a href="*">Les téléchargements</a></li>
					</ul>
			</div>
			<div class="col-xs-12 col-md-3 col-lg-3">
				<h4>Règlement financier</h4>
					<ul>
						<li><a href="*">Consulter le règlement financier</a></li>
					</ul>
			</div>
			<div class="col-xs-12 col-md-3 col-lg-3">
				<h4>Menu de la semaine</h4>
					<ul>
						<li><a href="*">Consulter le menu de la semaine</a></li>
					</ul>
			</div>
		</div>
</div>
<!-- END INFOS PRATIQUES -->

			<?php get_footer(); ?>

