<!-- page-title-area start -->
<div class="page-title-area">
		<div class="breadcrumb-wrapper" data-background="<?php 
                                                            if ( has_post_thumbnail() ) :
                                                                __(the_post_thumbnail_url()); 
                                                            else : 
                                                                _e(bloginfo('template_directory') . '/assets/img/blog/blog-image.webp');
                                                            endif; 
                                                        ?>">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h2 class="breadcrumb-title">
						<?php 
							if( is_search() ) :
								_e( 'Search Results' );
							else :
								the_title();
							endif;  
						?>
					</h2>
					<ul class="breadcrumb-menu">
						<li><a href="<?php _e(get_home_url()); ?>">Home</a></li>
						<li>
							<a href="">
								<?php
									if( is_search() ) :
										_e( 'Search Results: ' . get_search_query(), '' );
									else :
										the_title();
									endif; 
								?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- page-title-area end -->