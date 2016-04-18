		        		<form method="get" action="<?php bloginfo('home'); ?>/" id="searchform" class="navbar-form navbar-right nav-form-bottom hidden-sm " role="search">
							<div class="input-group form-mg-l-r">
								<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Recherche"/>
								<div class="input-group-btn">
									<button class="btn btn-blue" id="searchsubmit" type="submit">
										<i class="glyphicon glyphicon-search gly-white"></i>
									</button>
								</div>
							</div>
		        		</form>