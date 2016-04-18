<?php get_header(); ?>
		<!-- START CAROUSEL -->
		<div id="my_carousel" class="carousel slide" data-ride="carousel">
			<!-- Slides -->
			<div class="carousel-inner">
				<!-- Page 1 -->
				<div class="item active">  
					<div class="carousel-page">
						<img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image1.png" class="img-responsive" style="margin:0px auto;min-height:100%;"/>
					</div> 
					<div class="carousel-caption">L'institution</div>
				</div>   
				<!-- Page 2 -->
				<div class="item"> 
					<div class="carousel-page">
						<img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image2.png" class="img-responsive" style="margin:0px auto;min-height:100%;"/>
					</div> 
					<div class="carousel-caption">L'ecole</div>
				</div>  
				<!-- Page 3 -->
				<div class="item">  
					<div class="carousel-page">
						<img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image3.png" class="img-responsive"	style="margin:0px auto;min-height:100%;"/>
					</div>  
					<div class="carousel-caption">Le lycée</div>
				</div>     
			</div>
			<!-- Bulles -->
			<ol class="carousel-indicators">
				<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#my_carousel" data-slide-to="1"></li>
				<li data-target="#my_carousel" data-slide-to="2"></li>
			</ol>
			<!-- Contrôles -->
			<a class="left carousel-control" href="#my_carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left-W"></span>
			</a>
			<a class="right carousel-control" href="#my_carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right-W"></span>
			</a>
		</div>
		<!-- END CAROUSEL -->
<!-- ================================ -->
		<!-- INTRO -->
		<div class="row cont-intro">
			<div class="col-md-6 evenement cont-eve">
				<h2>EVENEMENTS</h2>
				<div class="row">
					<div class="col-md-12 photo_evenement">	
						<img src="<?php echo get_template_directory_uri(); ?>/images/evenement.jpg" alt="evenement"/>
						<h3>01/04/2016</h3><br/>
						<p>Portes ouvertes ESCC le vendredi 1 Avril de 17h à 20h : Projet international axé sur l'anglais, Prépa à Sciences Po, nouveau BTS Métiers de la Chimie.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 directeur ">
				<h2>LE MOT DU DIRECTEUR</h2>	
				<div class="row cadre_directeur">
					<div class="col-md-12 photo_directeur">
						<img src="<?php echo get_template_directory_uri(); ?>/images/directeur.png" alt="Mot du directeur"/>
						<p>Chers élèves,Chers parents,Chers visiteurs,</br>Nous sommes heureux de vous accueillir sur le site de l'Institution Notre Dame/Saint Ferdinand. Nous espérons qu'il répondra à vos attentes concernant les informations que vous recherchez.</br>
						Notre groupe scolaire n'est pas seulement une structure moderne et dynamique. Toute l'équipe éducative place l'élève au cœur de son quotidien en essayant de le faire grandir non seulement sur le plan intellectuel mais également dans ses dimensions physique, sociale, artistique, morale et spirituelle. En résumé, nous cherchons à faire en sorte que l'élève s'épanouisse dans toutes ses dimensions.
						</br>
						C'est tout le sens de notre projet éducatif.</br>
						Bonne visite !
						</br>
						<strong>Marc Tranin,Chef d'établissement coordinateur</strong>
						</p>
					</div>
				</div>
			</div>   
		</div>
		<!-- END INTRO -->
<!-- ================================ -->
		<!-- ACTU -->
		<div class="actus">
			<h2>ACTUALITES</h2>
			<div class="row cont-actu">	
				<div class="row col-lg-6 col-md-6 col-sm-12 col-xs-12 vertical">
				<?php
				$thumbs = array(
				            'posts_per_page' => 2,
				            'meta_query' => array(array('key' => '_thumbnail_id')) 
				);
				$newsWithPic = new WP_Query($thumbs);
				if($newsWithPic->have_posts()) : 
					while ($newsWithPic->have_posts() ) : $newsWithPic->the_post();
				?>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 actu1">
						<img class="img-responsive" src=' <?php the_post_thumbnail_url(); ?> ' alt="bourses">
						<h3><?php the_title(); ?></h3>
						<p class="postmetadata"><?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
						</p>						
						<p><?php the_content(); ?></p>
					</div>
                <?php
					endwhile;
				endif;
				
				// 4. On réinitialise à la requête principale (important)
				wp_reset_postdata();
                ?>
				</div>
				<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 horizontal">
			<?php
				if(have_posts()) : 
					while(have_posts()) : the_post(); 
			?>
					<div class="news" id="post-<?php the_ID(); ?>">
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<p class="postmetadata"><?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
						</p>
						<p><?php the_content(); ?></p>
					</div>
			<?php
					endwhile;
				endif;
			?>
				</div>
			</div>
		</div>		
		<!-- END ACTU -->
<!-- ================================ -->
		<!-- INTERNATIONAL -->
		<div class="international">
			<div class="row cont-inter">
				<h2>PROJET INTERNATIONAL</h2>
				<h3>L’Institution Notre Dame est résolument engagée sur un projet International. En quoi consiste-t-il ?</h3>
				<div class="row cont-inter">	
					<div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-md-3 col-sm-12 col-xs-12 image">
					<img src='<?php echo get_template_directory_uri(); ?>/img/carte.png' alt="carte">	
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 texte">
						<p>Un enseignement centré sur la maitrise de l’anglais et pour une ouverture culturelle à l’international.</br>A l’Ecole Saint Ferdinand : cours d’anglais dès la maternelle.Au collège Notre Dame Depuis  2014 deux classes de 6ème  dites à « ouverture internationale » ont été mises en place : certains cours sont  enseignés partiellement en anglais, notamment en Histoire et Géographie, en Arts plastiques, en Mathématiques et en EPS. Plus une heure de conversation hebdomadaire en anglais avec un professeur natif. Ces deux classes actuellement en 5ème poursuivent la même logique.En 2015 une classe de 6ème à « ouverture internationale » a continué le projet.De plus, une classe bilangue anglais espagnol a été ouverte en 6ème.Au lycée général :A cette rentrée 2015 parmi les classes de Seconde l’une d’entre elles est à « ouverture internationale » avec également de l’enseignement en anglais en SVT, en SES et en Mathématiques.  <a href="./page3.html">lire la suite</a></p>	
					</div>
					<div class="col-lg-1 col-md-1"></div>
				</div>
			</div>
		</div>		
		<!-- END INTERNATIONAL -->
<!-- ================================ -->
		<!-- MEDIA -->
		<div class="media row cont-media">
			<h2>MEDIA</h2>
			<div class="col-xs-12 col-md-4 col-lg-4 yt">
			    <h3>Vidéos</h3>
				<iframe height="300" width="350" src="https://www.youtube.com/embed/videoseries?list=UUr2_AMouXAv838HHARFw93g" frameborder="0" allowfullscreen></iframe>                   
			</div>
			<div class="col-xs-12 col-md-4 col-lg-4 commentaires">
			    <h3>Facebook</h3>
				<div class="fb-page" data-href="https://www.facebook.com/indchartres" data-tabs="timeline" data-width="350" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/indchartres"><a href="https://www.facebook.com/indchartres">Institution Notre-Dame</a></blockquote></div></div>
			</div>
			<div class="col-xs-12 col-md-4 commentaires-eleves">
			    <h3>Twitter</h3>
			    <a class="twitter-timeline"  href="https://twitter.com/IndChartres" data-widget-id="716977401792700416">Tweets de @IndChartres</a>
			    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		<!-- END MEDIA -->
<!-- ================================ -->

<!-- FOOTER -->
<?php get_footer(); ?>
<!-- /FOOTER -->
	 	</div>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>