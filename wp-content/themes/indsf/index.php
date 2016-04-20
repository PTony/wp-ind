<?php 
/* 
Template Name: Homepage
*/ 
get_header(); ?>
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
<!-- ================================ -->
    			<?php query_posts('category_name=actu-avec-vignette&&showposts=2'); ?>
    			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 actu1">
						<img class="img-responsive" src=' <?php the_post_thumbnail_url(); ?> ' alt="bourses">
						<h3><?php the_title(); ?></h3>
						<!-- <p class="postmetadata"><?php the_time('j F Y') ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?> -->
						</p>						
						<p><?php the_content(); ?></p>
					</div>
     			<?php endwhile;
				endif; ?> 
				</div>
				<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 horizontal">
<!-- ========================================== -->
    			<?php query_posts('category_name=actu-sans-vignette&&showposts=4'); ?>
    			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="news" id="post-<?php the_ID(); ?>">
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<!-- <p class="postmetadata"><?php the_time('j F Y') ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?> -->
						</p>
						<p><?php the_content(); ?></p>
					</div>	
     			<?php endwhile;
				endif; ?> 
				</div>
			</div>
		</div>		
		<!-- END ACTU -->
<!-- ================================ -->
		<!-- INTERNATIONAL -->
		<div class="international">
			<div class="row cont-inter">
			<?php
				$art_proj_inter = get_post('462');
			?>
				<h2><?php echo $art_proj_inter->post_title; ?></h2>
				<p><?php echo $art_proj_inter->post_content; ?></p>
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
