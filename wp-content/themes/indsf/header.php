<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="<?php bloginfo('description') ?>">
    	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<title>
			<?php bloginfo('name') ?>
				<?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?>
				<?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?>
				<?php else : ?><?php wp_title() ?>
				<?php endif ?>
		</title>
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> 
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> 
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> 
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />		
	</head>
	<body>
		<div class="container-fluid cont-fluid">
		<!--HEADER -->
		<div class="container__header">
			<header class="header">
				<div class="row">
					<div class="header-logo col-lg-2 col-md-2 col-sm-2 col-xs-3">
						<a href="index.php">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/header/logo-tr2.png" alt="logo du site institution notre dame">
						</a>
					</div>
					<div class="header-title col-lg-6 col-md-6 col-sm-10 col-xs-9">
						<h1><a href="<?php bloginfo('url'); ?>">Institution Notre Dame</a></h1>
						<h2>Saint Ferdinand</h2>
					</div>
					<div class="projet-inter col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="globe">
		   				 <div class="map"></div>
		 			 </div>	
		 			 <span class="slogan">Discover the international school project !</span>
					</div>
				</div>
			</header>
		</div>
		<!-- END HEADER -->
<hr>
<hr>
<hr>
<?php wp_nav_menu( array('theme_location' => 'college-col1', 'fallback_cb' => false)); ?>
<hr>
<?php wp_nav_menu( array('theme_location' => 'college-col2', 'fallback_cb' => false)); ?>
<hr>
<?php wp_nav_menu( array('theme_location' => 'college-col3', 'fallback_cb' => false)); ?>


<?php	//wp_nav_menu(array('theme_location' => 'header-menu'));
?>		
		<!-- MENU -->
		<nav class="navbar navbar-default navbar-menu" role="navigation">
			<!-- HAMBURGER -->
			<div class="navbar-header nav-head nav-burger">
			  <button class="navbar-toggle btn btn-burger" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
				<!-- <span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> -->
				Menu
			  </button>
			</div>
			<!-- HAMBURGER -->
			<div class="collapse navbar-collapse js-navbar-collapse nav-col">
				<ul class="nav navbar-nav nav-menu nav-line">
					<!-- ACCUEIL -->
					<li class="dropdown mega-dropdown li">
						<a class="link-nav dropdown-toggle glyphicon glyphicon-home" href="index.php"></a>
					</li>
					<!-- ACCUEIL -->
					<!-- ECOLE -->
					<li class="dropdown mega-dropdown">
						<a href="#" class="link-nav link-nav-ecole  dropdown-toggle" data-toggle="dropdown">ECOLE </a>
							<ul class="dropdown-menu mega-dropdown-menu row">
								<!-- SUBMENU 1 -->
								<li class="col-lg-3 col-md-6">
<?php wp_nav_menu( array('theme_location' => 'ecole-col1', 'fallback_cb' => false )); ?>
<!-- 								  <ul>
								  	<li><a class="dropdown-header" href="ecole.php">Accueil de l'école</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">L'établissement</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">L'équipe</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">Le projet</a></li>
									<li><a href="#">Vivre ensemble</a></li>
									<li><a href="#">Un enseignement de qualité et une culture humaniste</a></li>
									<li><a href="#">Accompagner l'élève dans son projet personnel</a></li>
									<li><a href="#">L'anglais pour tous</a></li>
									<li><a class="dropdown-header" href="#">L'actualité</a></li>
									<li class="divider"></li>
								  </ul>
 -->
								</li>
								<!-- SUBMENU 1 -->
								<!-- SUBMENU 2 -->
								<li class="col-lg-3 col-md-6">
<?php wp_nav_menu( array('theme_location' => 'ecole-col2', 'fallback_cb' => false)); ?>
<!-- 								  <ul>
									<li><a class="dropdown-header" href="#">Les classes</a></li>
									<li class="divider"></li>
									<li><a href="#">Cycle 1</a>
										<ul class="subnav list-inline">
											<li><a href="#">TPS</a></li>  
											<li><a href="#">PS</a></li>
											<li><a href="#">MS</a></li>
											<li><a href="#">GS</a></li>
										</ul>
									</li>
									<li><a href="#">Cycle 2</a>
										<ul class="subnav list-inline">
											<li><a href="#">GS/CP</a></li>
											<li><a href="#">CP</a></li>
											<li><a href="#">CP/CE1</a></li>
											<li><a href="#">CE1</a></li>
										</ul>
									</li>
									<li><a href="#">Cycle 3</a>
										<ul class="subnav list-inline">
											<li><a href="#">CE2</a></li>
											<li><a href="#">CE2/CM1</a></li>
											<li><a href="#">CM1</a></li>
											<li><a href="#">CM2 a</a></li>
											<li><a href="#">CM2 b</a></li>
										</ul>
									</li>
									<li><a href="#">La CLIS</a></li>
									<li><a class="dropdown-header" href="#">Albums photos</a></li>
									<li class="divider"></li>
								  </ul>
 -->
								</li>
								<!-- SUBMENU 2 -->
								<!-- SUBMENU 3 -->
								<li class="col-lg-3 col-md-6">
<?php wp_nav_menu( array('theme_location' => 'ecole-col3', 'fallback_cb' => false)); ?>
<!-- 								  <ul>
									<li><a class="dropdown-header" href="#">Informations pratiques</a></li>
									<li class="divider"></li>
									<li><a href="#">Téléchargements</a></li>
									<li><a href="#">Tarifs</a></li>
									<li><a href="#">Menu de la semaine</a></li>
									<li><a href="#">Règlement financier</a></li>
									<li><a class="dropdown-header" href="#">Nous Contacter</a></li>
									<li class="divider"></li>
								  </ul>
 -->
								</li>
								<!-- SUBMENU 3 -->
								<!-- SUBMENU 4 -->
								<li class="col-lg-3 col-md-6">
								  <ul class="header-directeur">
									<li><a class="dropdown-header" href="#">Le mot du directeur</a></li>
									<li class="divider"></li>
									<p class="text-info">
									<img class="img-thumbnail img-responsive header-directeur-img" src="<?php echo get_template_directory_uri(); ?>/img/header/tranin.png" alt="photo du directeur"/>
									Nous sommes heureux de vous accueillir sur le site de l'Institution Notre Dame/Saint Ferdinand. Nous espérons qu'il répondra à vos attentes concernant les informations que vous recherchez.Notre groupe scolaire n'est pas seulement une structure moderne et dynamique. Toute l'équipe éducative place l'élève au cœur de son quotidien en essayant de le faire grandir non seulement sur le plan intellectuel mais également dans ses dimensions physique, sociale, artistique, morale et spirituelle. En résumé, nous cherchons à faire en sorte que l'élève s'épanouisse dans toutes ses dimensions.C'est tout le sens de notre projet éducatif.<br/>
									<strong id="dirstrong">Bonne visite !</strong>
									</p>
								  </ul>
								</li>
								<!-- SUBMENU 4 -->
							</ul>
					</li>
					<!-- COLLEGE -->
					<li class="dropdown mega-dropdown">
						<a href="#" class="link-nav link-nav-college dropdown-toggle" data-toggle="dropdown">COLLÈGE </a>
							<ul class="dropdown-menu mega-dropdown-menu row">
								<!-- SUBMENU 1 -->
								<li class="col-lg-2">
								  <ul>
								  	<li><a class="dropdown-header" href="#">L'établissement</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">Enseignement</a></li>
									<li class="divider"></li>
									<li><a href="#">Filière générale</a></li>
									<li><a href="#">3ème prépa PRO</a></li>
									<li><a href="#">SEGPA</a></li>
									<li><a href="#">6ème Bi-langues</a></li>
									<li><a href="#">Ouverture à l'international</a></li>
									<li><a href="#">Classe patrimoine</a></li>
									<li><a href="#">Les options</a></li>	
									<li><a class="dropdown-header" href="#">Le CDI</a></li>
									<li class="divider"></li>
								  </ul>
								</li>
								<!-- SUBMENU 1 -->
								<!-- SUBMENU 2 -->
								<li class="col-lg-2">
								  <ul>
									<li><a class="dropdown-header" href="#">Vie au collège</a></li>
									<li class="divider"></li>
									<li><a href="#">Activités</a></li>
									<li><a href="#">La pastorale</a></li>
									<li><a href="#">L'infirmerie</a></li>
									<li><a class="dropdown-header" href="#">L'actualité</a></li>
									<li class="divider"></li>
								  </ul>
								</li>
								<!-- SUBMENU 2 -->
								<!-- SUBMENU 3 -->
								<li class="col-lg-2">
								  <ul>
									<li><a class="dropdown-header" href="#">Informations pratiques</a></li>
									<li class="divider"></li>
									<li><a href="#">Téléchargements</a></li>
									<li><a href="#">Tarifs</a></li>
									<li><a href="#">Menu de la semaine</a></li>
									<li><a href="#">Règlement financier</a></li>
									<li><a href="#">Radio grand ciel</a></li>
									<li><a class="dropdown-header" href="#">Nous Contacter</a></li>
									<li class="divider"></li>
								  </ul>
								</li>
								<!-- SUBMENU 3 -->
								<!-- SUBMENU 4 -->
								<li class="col-lg-6">
								  <ul class="header-directeur">
									<li><a class="dropdown-header" href="#">Le mot du directeur</a></li>
									<li class="divider"></li>
									<p class="text-info">
									<img class="img-thumbnail img-responsive header-directeur-img" src="<?php echo get_template_directory_uri(); ?>/img/header/buttin.png" alt="photo du directeur"/>
									Après plusieurs décennies à accueillir des générations de collégiens à l’ombre de la cathédrale, rue des Lisses, le collège Notre Dame dispose aujourd’hui de structures modernes, qui nous permettent d’accompagner 500 élèves.
									De la sixième jusqu’au lycée, nos enseignants visent l’excellence. Nous proposons à nos élèves de nombreuses options. Les possibilités sont multiples :
									Ouverture à l’international avec des classes européennes, le choix d’une deuxième ou troisième langue et préparation au PET (diplôme de Cambridge), en Anglais.
									Des options offertes, allant du domaine artistique au domaine informatique, en passant par le sport (section foot) ou une approche du monde professionnel.
									Des activités périscolaires, des séjours thématiques, clubs…..
									Certains jeunes réussiront en suivant des enseignements différents : technologique  à vocation professionnelle ou adapté en  SEGPA. Tous sont accueillis avec leur personnalité et leur différence.
									La dimension chrétienne au collège prend tout son sens. Elle est présente dans notre proposition de la Foi, elle transparaît aussi dans notre capacité à écouter nos élèves.
									Former les adolescents, à cet âge où tant se joue, leur donner le goût d’apprendre, les conduire vers la réussite et les aider à s’épanouir sont nos objectifs : « transmettre, accompagner et rassembler ».<br/> 
									Mathieu BUTTIN<br/>
									<strong id="dirstrong">Directeur Adjoint</strong>
									</p>
								  </ul>
								</li>
								<!-- SUBMENU 4 -->
							</ul>
					</li>
					<!-- LYCEE -->
					<li class="dropdown mega-dropdown">
						<a href="#" class="link-nav link-nav-lycee dropdown-toggle" data-toggle="dropdown">LYCÉES </a>
							<ul class="dropdown-menu mega-dropdown-menu row">
								<!-- SUBMENU 1 -->
								<li class="col-lg-2">
								 	<ul>
									  	<li><a class="dropdown-header" href="#">Lycée général</a></li>
										<li class="divider"></li>
										<li><a href="#">Seconde</a></li>
										<li><a href="#">Série L</a></li>
										<li><a href="#">Série S</a></li>
										<li><a href="#">Série ES</a></li>
										<li><a href="#">Options</a></li>
										<li><a href="#">Resultats</a></li>
										<li><a class="dropdown-header" href="#">International</a></li>
										<li class="divider"></li>
										<li><a class="dropdown-header" href="#">Vie culturelle</a></li>
									</ul>	
								</li>
								<!-- SUBMENU 1 -->
								<!-- SUBMENU 2 -->
								<li class="col-lg-2">
									<ul>
										<li><a class="dropdown-header" href="#">Lycée technologique</a></li>
										<li class="divider"></li>
										<li><a href="#">Série STMG</a></li>
										<li><a href="#">Série STL</a></li>
										<li><a href="#">Les options</a></li>
										<li><a href="#">Résultats</a></li>
										<li><a class="dropdown-header" href="#">Le CDI</a></li>
										<li class="divider"></li>
									</ul>	
								</li>
								</li>
								<!-- SUBMENU 2 -->
								<!-- SUBMENU 3 -->
								<li class="col-lg-2">
								  <ul>
									<li><a class="dropdown-header" href="#">Lycée professionnel</a></li>
									<li class="divider"></li>
									<li><a href="#">3ème Prépa Pro</a></li>
									<li><a href="#">Série Bac Pro</a></li>
									<li><a href="#">Résultats</a></li>
									<li><a class="dropdown-header" href="#">Informations pratiques</a></li>
									<li class="divider"></li>
									<li><a href="#">Téléchargements</a></li>
									<li><a href="#">Tarifs</a></li>
									<li><a href="#">Menu de la semaine</a></li>
									<li><a href="#">Règlement financier</a></li>
									<li><a href="#">Radio grand ciel</a></li>
									<li><a class="dropdown-header" href="#">Nous Contacter</a></li>
									<li class="divider"></li>	
								  </ul>
								</li>
								<!-- SUBMENU 3 -->
								<!-- SUBMENU 4 -->
								<li class="col-lg-3">
								  <ul class="header-directeur">
									<li><a class="dropdown-header" href="#">Le mot du directeur</a></li>
									<li class="divider"></li>
									<p class="text-info">
									<img class="img-thumbnail img-responsive header-directeur-img" src="<?php echo get_template_directory_uri(); ?>/img/header/maillard.png" alt="photo du directeur"/>
									Chers Parents, chers élèves,
									C’est avec plaisir que nous vous accueillons sur le site du lycée Général Notre Dame. Comme vous allez pouvoir le constater, nous donnons l’opportunité à nos jeunes de choisir parmi un large éventail de séries, d’enseignements ainsi que parmi un grand choix d’options.
									Les activités extra-scolaires sont aussi un élément essentiel au développement personnel et culturel de chaque jeune et grâce à une équipe éducative dynamique et engagée, des clubs, activités, voyages et échanges se déroulent tout au long de l'année scolaire.
									L’exigence, la rigueur et la discipline sont des éléments chers à l’institution et l’expérience montre qu’ils sont essentiels à la réussite. Ceci a été illustré, une fois encore, à travers les résultats brillants de nos élèves en juillet.
									Dans un souci de bienveillance, notre mission est d’encourager l’épanouissement de la personnalité de l’élève, de contribuer à sa socialisation mais aussi de l’aider à donner du sens à sa vie. Tout cela, bien-sûr, afin de donner au jeune les outils nécessaires pour préparer son avenir sereinement.
									La pastorale a bien-sûr une place importante dans la vie de l’Institution et nos élèves du lycée général ne tarissent pas d’éloges quant au dynamisme de cet accompagnement. Entre retraite, célébrations hebdomadaires, pèlerinages et sacrements, les opportunités se bousculent.
									Promouvoir et encourager l’esprit de communauté et de fraternité est une autre mission importante pour l’Institution. Toute l’équipe d’enseignants, d’éducateurs et de personnels fait preuve d’un engagement exceptionnel dans l’accompagnement individuel des élèves et des familles à travers des moments de dialogue et d’écoute afin d’assurer une harmonie collective indispensable au bien-être et la bonne entente de chacun.
									Nous vous souhaitons une belle visite et espérons vous rencontrer très vite.<br/>
									Directeur Adjoint Lycée Général<br/>
									<strong id="dirstrong">Frédéric Maillard</strong>
									</p>
								  </ul>
								</li>
								<!-- SUBMENU 4 -->
								<!-- SUBMENU 5 -->
								<li class="col-lg-3">
								  <ul class="header-directeur">
									<li><a class="dropdown-header" href="#">Le mot du directeur</a></li>
									<li class="divider"></li>
									<p class="text-info">
									<img class="img-thumbnail img-responsive header-directeur-img" src="<?php echo get_template_directory_uri(); ?>/img/header/maillard.png" alt="photo du directeur"/>
									Chers Parents, chers élèves,
									C’est avec plaisir que nous vous accueillons sur le site du lycée Général Notre Dame. Comme vous allez pouvoir le constater, nous donnons l’opportunité à nos jeunes de choisir parmi un large éventail de séries, d’enseignements ainsi que parmi un grand choix d’options.
									Les activités extra-scolaires sont aussi un élément essentiel au développement personnel et culturel de chaque jeune et grâce à une équipe éducative dynamique et engagée, des clubs, activités, voyages et échanges se déroulent tout au long de l'année scolaire.
									L’exigence, la rigueur et la discipline sont des éléments chers à l’institution et l’expérience montre qu’ils sont essentiels à la réussite. Ceci a été illustré, une fois encore, à travers les résultats brillants de nos élèves en juillet.
									Dans un souci de bienveillance, notre mission est d’encourager l’épanouissement de la personnalité de l’élève, de contribuer à sa socialisation mais aussi de l’aider à donner du sens à sa vie. Tout cela, bien-sûr, afin de donner au jeune les outils nécessaires pour préparer son avenir sereinement.
									La pastorale a bien-sûr une place importante dans la vie de l’Institution et nos élèves du lycée général ne tarissent pas d’éloges quant au dynamisme de cet accompagnement. Entre retraite, célébrations hebdomadaires, pèlerinages et sacrements, les opportunités se bousculent.
									Promouvoir et encourager l’esprit de communauté et de fraternité est une autre mission importante pour l’Institution. Toute l’équipe d’enseignants, d’éducateurs et de personnels fait preuve d’un engagement exceptionnel dans l’accompagnement individuel des élèves et des familles à travers des moments de dialogue et d’écoute afin d’assurer une harmonie collective indispensable au bien-être et la bonne entente de chacun.
									Nous vous souhaitons une belle visite et espérons vous rencontrer très vite.<br/>
									Directeur Adjoint Lycée Général<br/>
									<strong id="dirstrong">Frédéric Maillard</strong>
									</p>
								  </ul>
								</li>
								<!-- SUBMENU 5 -->
							</ul>
					</li>
					<!-- ESCC SUPERIEUR -->
					<li class="dropdown mega-dropdown">
						<a href="#" class="link-nav link-nav-escc dropdown-toggle" data-toggle="dropdown">ESCC SUPERIEUR </a>
							<ul class="dropdown-menu mega-dropdown-menu row">
								<!-- SUBMENU 1 -->
								<li class="col-lg-3">
								  <ul>
									<li><a class="dropdown-header" href="#">BTS Chimie</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">BTS Métiers de la Chimie</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">BTS Assistant de Gestion</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">BTS Tourisme</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">BTS Profession Immo</a></li>
									<li class="divider"></li>
									<li><a class="dropdown-header" href="#">BTS Comptabilité</a></li>
									<li class="divider"></li>
								  </ul>
								</li>
								<!-- SUBMENU 1 -->
								<!-- SUBMENU 2 -->
								<li class="col-lg-3">
								  <ul>
									<li><a class="dropdown-header" href="#">Informations pratiques</a></li>
									<li class="divider"></li>
									<li><a href="#">Nous contacter</a></li>
									<li><a href="#">Tarifs</a></li>
									<li><a href="#">Téléchargements</a></li>
									<li><a href="#">Règlement financier</a></li>
									<li><a class="dropdown-header" href="#">Votre vie d'étudiant</a></li>
									<li class="divider"></li>
									<li><a href="#">Activité</a></li>
									<li><a href="#">L'infirmerie</a></li>
								  </ul>
								</li>
								<!-- SUBMENU 2 -->
								<!-- SUBMENU 3 -->
								<li class="col-lg-6">
								  <ul class="header-directeur">
									<li><a class="dropdown-header" href="#">Le mot de la directeur</a></li>
									<li class="divider"></li>
									<p class="text-info">
									<img class="img-thumbnail img-responsive header-directeur-img" src="<?php echo get_template_directory_uri(); ?>/img/header/Vermeren-bacles.png" alt="photo du directeur"/>
									<strong>L’ESCC, 7 formations et 200 étudiants…</strong>
									Depuis septembre 2015, le lycée EFAGRIR et le lycée NOTRE DAME, se sont réunis sur le site de l’IND pour proposer leurs 7 formations supérieures. Une nouvelle dénomination commune à ces deux établissements s’est naturellement imposée et le choix s’est porté sur ESCC, Enseignement Catholique de Chartres.<br/>
									<strong>L’ESCC</strong> permet désormais aux futurs bacheliers d’avoir accès à sept formations, 3 BTS en formation initiale (BTS Assistant de Gestion, BTS Communication et BTS Métiers de la Chimie), 3 BTS en contrat d’apprentissage (BTS Comptabilité Gestion, BTS Professions Immobilières, BTS Tourisme) et une formation au Diplôme de Comptabilité et de Gestion.<br>
									<strong>L’ESCC</strong>, situé au cœur de la ville de Chartres, s’oriente vers un accompagnement personnalisé, une volonté de proposer des sections à effectif réduit, des équipements adaptés et performants, en particulier pour le BTS Communication et des Métiers de la Chimie. Des partenariats avec des professionnels sont régulièrement mis en place afin de permettre à nos étudiants de découvrir l’environnement professionnel dans lequel ils évolueront.<br/>
									<strong>L’ESCC</strong> c’est aussi une équipe pédagogique engagée et  disponible prenant en compte les attentes des étudiants et des professionnels.<br/>
									<strong>L’ESCC</strong> c’est la préparation au TOIEC, systématiquement proposée à tous nos étudiants. Il s’agit là de proposer aux jeunes une véritable opportunité d’obtenir un certificat qui est la référence mondiale pour l’évaluation des niveaux d’anglais utilisé dans un contexte professionnel. Quels que soient le domaine d’étude et les choix de carrière professionnelle, les compétences linguistiques sont des critères déterminants pour les recruteurs.<br/>
									<strong>L’ESCC</strong> s’implante et prend son point d’ancrage dans une ville où l’enseignement supérieur catholique a sa place et répond aux attentes de nombreux jeunes et de parents. Un premier pas vers une nouvelle orientation, de nouveaux projets à venir.<br/>
									Nous sommes donc heureuses de prendre une part active à cette aventure !<br/>
									<strong id="dirstrong">Catherine Bacle, </strong><br/>
									Responsable pédagogique BTS Tertiaires (Assistant de Gestion PME-PMI et Communication).<br/>
									<strong id="dirstrong">Agnès Vermeren </strong><br/>
									Responsable pédagogique BTS Chimistes.
									</p>
								  </ul>
								</li>
								<!-- SUBMENU 3 -->
							</ul>
					</li>
					<!-- APEL -->
					<li class="dropdown mega-dropdown ">
						<a href="https://sites.google.com/site/apelsaintbenoitv2/" target="_blank" class="link-nav dropdown-toggle">APEL </a>
					</li>
					<!-- PRONOTE -->
					<li class="dropdown mega-dropdown">
						<a href="https://0280665w.index-education.net/pronote/" target="_blank" class="link-nav btn-pronote dropdown-toggle">PRONOTE </a>
					</li>
					<!-- CONTACT -->
					<li class="dropdown mega-dropdown">
						<a href="#" class="link-nav dropdown-toggle">CONTACT </a>
					</li>
					<!-- SEARCH BAR -->
					<?php include(TEMPLATEPATH . '/searchform.php'); ?>
	        		<!-- SEARCH BAR -->
				</ul>
			</div>
		</nav>
		<!-- END MENU -->