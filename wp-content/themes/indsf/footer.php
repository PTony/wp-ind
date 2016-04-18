		<div class="row cont-footer">
			<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="footer_container col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="footer_top col-lg-12 col-md-12  col-sm-12 col-xs-12">
								<div class="footer_left col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="footer_map">
										<h4><b>Ecole Saint-Ferdinand</b></h4>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.8224185589397!2d1.4840701508049532!3d48.44074793787453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e40c456f32e20f%3A0xc9904916ab660570!2s15+Rue+Chanzy%2C+28000+Chartres!5e0!3m2!1sfr!2sfr!4v1459691790099" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
										<p>Tel: 02 37 28 09 49</p>
									</div>
								</div>
								<div class="footer_midle_left col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="footer_map">
										<h4><b>Collège / Lycée Notre Dame</b></h4>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.2967829904087!2d1.4909483508053205!3d48.45083493716866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e40c35d85b3fe3%3A0x567f06123f89f086!2s2+Avenue+Bethouart%2C+28000+Chartres!5e0!3m2!1sfr!2sfr!4v1459691947899" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
										<p>Tel: 02 37 34 61 55</p>
									</div>
								</div>
								<div class="footer_midle_right col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<?php wp_nav_menu( array('theme_location' => 'footer-col1', 'fallback_cb' => false,
'menu_class' => "", )); ?>
									<!-- <ul>
										<li class="footer_contact_titre"><span><b>Entrer en contact avec :</b></span></li></br>
										<li><a href="./contact_ecole.php"><span>L'école Saint-Ferdinand</span></a></li>
										<li><a href="./contact_college.php"><span>Le collège Notre-Dame</span></a></li>
										<li><a href="./contact_lycee.php"><span>Le Lycée Notre-Dame</span></a></li>
										<li><a href="./contact_escc.php"><span>L'enseignement supérieur</span></a></li>
									</ul> -->
								</div>
								<div class="footer_right col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<?php wp_nav_menu( array('theme_location' => 'footer-col2', 'fallback_cb' => false,
'menu_class' => "", )); ?>
						<!-- 			<ul>
										<li><span><b>Retrouvez également :</b></span></li></br>
										<li><a href="*">Plan du site</a></li>
										<li><a href="*"><span>Espace privé</span></a></li>
										<li><a href="*"><span>Crédits</span></a></li>
										<li><a href="*"><span>Mentions légales</span></a></li>
									</ul> -->
							</div>				
							<div class="footer_bottom col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
								<p>
									Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?>
									<br/>Site propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://www.wildcodeschool.fr">La Wild Code School</a>
									<br/><?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?> secondes.
								</p>
							</div>
						</div>
					</div>	
				</div>	
			</footer>
		</div>	

	