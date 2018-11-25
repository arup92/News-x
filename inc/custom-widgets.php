<?php
/**
 * Custom Widgets are declared here
 */

/**
 * Register widget area.
 */

if ( ! function_exists( 'ct_widgets_init' ) ) :

function ct_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Header Ad Section', 'news-x' ),
		'id'            => 'news-x-header-ad-right',
		'description'   => __( 'Add widgets here to appear on your post page sidebar section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s vartical-align header-main">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar For Single Post', 'news-x' ),
		'id'            => 'news-x-single-post-right',
		'description'   => __( 'Add widgets here to appear on your post page sidebar section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s sidebar-widget block shadow">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sticky Sidebar', 'news-x' ),
		'id'            => 'news-x-sticky-sidebar',
		'description'   => __( 'Add widgets here that will stay sticky on page scroll on your front page.', 'writer-blog' ),
		'before_widget' => '<div id="%1$s" class="%2$s sidebar-widget block shadow">',
		'after_widget'  => '</div><!-- /.block -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'news-x' ),
		'id'            => 'news-x-home-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar on front page of your website.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s sidebar-widget block shadow">',
		'after_widget'  => '</div><!-- /.block -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Left', 'news-x' ),
		'id'            => 'news-x-footer-left',
		'description'   => __( 'Add widgets here to appear on your left footer section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s four columns widget-footer-left">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Middle', 'news-x' ),
		'id'            => 'news-x-footer-middle',
		'description'   => __( 'Add widgets here to appear on your middle footer section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s four columns">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Right', 'news-x' ),
		'id'            => 'news-x-footer-right',
		'description'   => __( 'Add widgets here to appear on your right footer section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s four columns">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );
}

endif;

add_action( 'widgets_init', 'ct_widgets_init' );

/*************************************************************************************************************************
 * Adds "News X: Category Posts" widget.
 ************************************************************************************************************************/
class News_X_Category_Posts_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'news_x_category_posts_widget', // Base ID
			esc_html__( 'News X: Category Posts', 'news-x' ), // Name
			array( 'description' => esc_html__( 'This widget displays category wise posts with thumbnail in your website.', 'news-x' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ( !empty( $instance['title'] ) ) ? $instance['title'] : '';
		$category_slug = ( !empty( $instance['slug'] ) ) ? $instance['slug'] : '';
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'slug' ) ); ?>"><?php esc_attr_e( 'Category Slug:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'slug' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'slug' ) ); ?>" type="text" value="<?php echo esc_attr( $category_slug ); ?>">
		<small><?php esc_html_e( 'Note: The slug can be found under Posts->Categories', 'news-x' ); ?></small>
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['slug'] = ( ! empty( $new_instance['slug'] ) ) ? sanitize_text_field( $new_instance['slug'] ) : '';

		return $instance;
	}


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {

		$category_slug = esc_html( $instance['slug'] );

		// if category exists
		if ( term_exists( $category_slug ) ) {
			$cate = get_category_by_slug( $category_slug );
			$cate_id = $cate->term_id;

			// if category has contents
			if ( get_category( $cate_id )->category_count > 0 ) {
				
				$widget_id = $args['widget_id'];

				$query_args = array(
					'post_type'			=>	'post',
					'posts_per_page'	=>	5,
					'category_name'		=>	$category_slug,
					'order'				=>	'DESC',
				);

				$category_post  = new WP_Query( $query_args );
					
					if ( $category_post->have_posts() ) :
						?>
						<div class="sidebar-widget block shadow list-<?php echo esc_attr( $widget_id ); ?>">
							<div class="section-title-blue">
								<span class="title"><?php echo esc_html( $instance['title'] ); ?></span>
							</div>
								<div class="category-list">
								<?php
								while ( $category_post->have_posts() ) : $category_post->the_post();
									?>
										
										<div class="list-item">
											<div class="left-content">
												<?php if ( has_post_thumbnail() ) : ?>
													<img src="<?php echo esc_url( the_post_thumbnail_url( 'full' ) ); ?>" class="full-image" alt="blog post">
												<?php endif; ?>
											</div><!-- /.left-content -->
											<div class="right-contents">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
												<p><span class="author">arup</span> -  Apr 22, 2015</p>
											</div><!-- /.right-content -->
										</div><!-- /.list-item -->
									<?php
								endwhile;
								?>
								</div><!-- /.category-list -->
							</div><!-- /.sidebar /.widget -->
							<?php
						endif;
						wp_reset_postdata();
					
			} else {
				echo $args['before_widget'];
				echo esc_html_e( 'Sorry, no posts matching in', 'news-x' ) . ' <b>' . esc_html( $category_slug ) . '</b>' . esc_html_e( 'category', 'news-x' );
				echo $args['after_widget'];
			}
			
		} else {
			echo $args['before_widget'];
			echo esc_html_e('Sorry, there is no category named', 'news-x') . ' <b>' . esc_html( $category_slug ) . '</b>';
			echo $args['after_widget'];
		}
	}

} // class News_X_Category_Posts_Widget

function news_x_category_posts_widget_register() {
	register_widget( 'News_X_Category_Posts_Widget' );
}

add_action( 'widgets_init', 'news_x_category_posts_widget_register' );

/*************************************************************************************************************************
 * Adds "News X: Posts Slider" widget.
 ************************************************************************************************************************/
class News_X_Posts_Slider_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'news_x_posts_slider_widget', // Base ID
			esc_html__( 'News X: Posts Slider', 'news-x' ), // Name
			array( 'description' => esc_html__( 'This widget displays post slider in your website.', 'news-x' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ( !empty( $instance['title'] ) ) ? $instance['title'] : '';
		$category_slug = ( !empty( $instance['slug'] ) ) ? $instance['slug'] : '';
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'slug' ) ); ?>"><?php esc_attr_e( 'Category Slug:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'slug' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'slug' ) ); ?>" type="text" value="<?php echo esc_attr( $category_slug ); ?>">
		<small><?php esc_html_e( 'Note: The slug can be found under Posts->Categories', 'news-x' ); ?></small>
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['slug'] = ( ! empty( $new_instance['slug'] ) ) ? sanitize_text_field( $new_instance['slug'] ) : '';

		return $instance;
	}


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {

		$category_slug = esc_html( $instance['slug'] );

		// if category exists
		if ( term_exists( $category_slug ) ) {
			$cate = get_category_by_slug( $category_slug );
			$cate_id = $cate->term_id;

			// if category has contents
			if ( get_category( $cate_id )->category_count > 0 ) {
				
				$widget_id = $args['widget_id'];

				$query_args = array(
					'post_type'			=>	'post',
					'posts_per_page'	=>	5,
					'category_name'		=>	$category_slug,
					'order'				=>	'DESC',
				);

				$category_post  = new WP_Query( $query_args );
					
					if ( $category_post->have_posts() ) :
						?>
						<div class="sidebar-widget block shadow widget-slider-<?php echo esc_attr( $widget_id ); ?>">
							<div class="section-title-blue">
								<span class="title"><?php echo esc_html( $instance['title'] ); ?></span>
							</div>
							<div class="widget-nav clearfix green">
								<div class="slide-prev"></div><!-- /.slide-prev -->
								<div class="slide-next"></div><!-- /.slide-next -->
							</div><!-- /.slide -->
							<div class="widget-slider">
							<?php
								while ( $category_post->have_posts() ) : $category_post->the_post();
									?>
									<div class="post-overlay zoom">
										<div class="overlay"></div><!-- /.overlay -->
										<img src="<?php echo esc_url( the_post_thumbnail_url( 'full' ) ); ?>" alt="slider background image" style="width: 100%; height: 100%;">
										<div class="post-content">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
										</div><!-- /.post-content -->
									</div>
									<?php
								endwhile;
								?>
							</div><!-- /.widget-slider -->
						</div><!-- /.sidebar-widget -->
					<?php
					endif;
					wp_reset_postdata();
			} else {
				echo $args['before_widget'];
				echo esc_html_e( 'Sorry, no posts matching in', 'news-x' ) . ' <b>' . esc_html( $category_slug ) . '</b>' . esc_html_e( 'category', 'news-x' );
				echo $args['after_widget'];
			}
			
		} else {
			echo $args['before_widget'];
			echo esc_html_e('Sorry, there is no category named', 'news-x') . ' <b>' . esc_html( $category_slug ) . '</b>';
			echo $args['after_widget'];
		}
	}

} // class News_X_Posts_Slider_Widget

function news_x_posts_slider_widget_register() {
	register_widget( 'News_X_Posts_Slider_Widget' );
}

add_action( 'widgets_init', 'news_x_posts_slider_widget_register' );

/*************************************************************************************************************************
 * Adds "News X: Social" widget.
 ************************************************************************************************************************/
class News_X_Author_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'ct-author-widget', // Base ID
			esc_html__( 'News X: Social Widget', 'news-x' ), // Name
			array( 'description' => esc_html__( 'This widget displays author information to your website.', 'news-x' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ( !empty( $instance['title'] ) ) ? $instance['title'] : '';
		$facebook_link = ( !empty( $instance['facebook'] ) ) ? $instance['facebook'] : '';
		$twitter_link = ( !empty( $instance['twitter'] ) ) ? $instance['twitter'] : '';
		$youtube_link = ( !empty( $instance['youtube'] ) ) ? $instance['youtube'] : '';
		$gplus_link = ( !empty( $instance['gplus'] ) ) ? $instance['gplus'] : '';
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_attr_e( 'Facebook link:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $facebook_link ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_attr_e( 'Twitter link:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php echo esc_attr( $twitter_link ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'gplus' ) ); ?>"><?php esc_attr_e( 'Google+ link:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'gplus' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'gplus' ) ); ?>" type="text" value="<?php echo esc_attr( $gplus_link ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_attr_e( 'YouTube link:', 'news-x' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" type="text" value="<?php echo esc_attr( $youtube_link ); ?>">
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? $new_instance['facebook']  : '';
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? $new_instance['twitter']  : '';
		$instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? $new_instance['youtube']  : '';
		$instance['gplus'] = ( ! empty( $new_instance['gplus'] ) ) ? $new_instance['gplus']  : '';

		return $instance;
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		?>
		<div class="widget-social-links">
			<?php
				if ( ! empty( $instance['title'] ) ) {
					echo '<div class="section-title-blue"><span class="title">' . esc_html( apply_filters( 'writer_blog_author_widget_title', $instance['title'] ) ) . '</span></div>';
				}
			?>
			<div class="social-list follow">

				<?php if ( ! empty( $instance['facebook'] ) ) { ?>
				<div class="social-box-section fb-icon shadow clearfix">
						<div class="widget-social-icon">
							<div class="part">
								<div class="fa fa-facebook"></div><!-- /.fa -->
							</div><!-- /.part -->
						</div><!-- /.widget-social-icon -->
						<div class="follow-count">
							<div class="part">
								<span class="social_info"><?php echo esc_html__( 'Facebook', 'news-x' ); ?></span>
							</div><!-- /.part -->
						</div><!-- /.follow-count -->
						<div class="like-button">
							<div class="part">
								<a href="<?php echo esc_url( $instance['facebook'] ); ?>" target="_blank"><?php echo esc_html__( 'Like', 'news-x' ); ?></a>
							</div><!-- /.part -->
						</div><!-- /.like-button -->
				</div><!-- /.social -->
				<?php } ?>

				<?php if ( ! empty( $instance['twitter'] ) ) { ?>
				<div class="social-box-section twitter-icon shadow clearfix">
					<div class="widget-social-icon fb-icon">
						<div class="part">
							<div class="fa fa-twitter"></div><!-- /.fa -->
						</div><!-- /.part -->
					</div><!-- /.social-icon -->
					<div class="follow-count">
						<div class="part">
							<span class="social_info"><?php echo esc_html__( 'Twitter', 'news-x' ); ?></span>
						</div><!-- /.part -->
					</div><!-- /.follow-count -->	
					<div class="like-button">
						<div class="part">
							<a href="<?php echo esc_url( $instance['twitter'] ); ?>" target="_blank"><?php echo esc_html__( 'Follow', 'news-x' ); ?></a>
						</div><!-- /.part -->
					</div><!-- /.like-button -->
				</div><!-- /.social -->
				<?php } ?>

				<?php if ( ! empty( $instance['gplus'] ) ) { ?>
				<div class="social-box-section gp-icon shadow clearfix">
					<div class="widget-social-icon">
						<div class="part">
							<div class="fa fa-google-plus"></div><!-- /.fa -->
						</div><!-- /.part -->
					</div><!-- /.social-icon -->
					<div class="follow-count">
						<div class="part">
							<span class="social_info"><?php echo esc_html__( 'Google Plus', 'news-x' ); ?></span>
						</div><!-- /.part -->
					</div><!-- /.follow-count -->	
					<div class="like-button">
						<div class="part">
							<a href="<?php echo esc_url( $instance['gplus'] ); ?>" target="_blank"><?php echo esc_html__( 'Follow', 'news-x' ); ?></a>
						</div><!-- /.part -->
					</div><!-- /.like-button -->
				</div><!-- /.social -->
				<?php } ?>

				<?php if ( ! empty( $instance['youtube'] ) ) { ?>
				<div class="social-box-section youtube-icon shadow clearfix">
					<div class="widget-social-icon fb-icon">
						<div class="part">
							<div class="fa fa-youtube-play"></div><!-- /.fa -->
						</div><!-- /.part -->
					</div><!-- /.social-icon -->
					<div class="follow-count">
						<div class="part">
							<span class="social_info"><?php echo esc_html__( 'YouTube', 'news-x' ); ?></span>
						</div><!-- /.part -->
					</div><!-- /.follow-count -->	
					<div class="like-button">
						<div class="part">
							<a href="<?php echo esc_url( $instance['youtube'] ); ?>" target="_blank"><?php echo esc_html__( 'Subscribe', 'news-x' ); ?></a>
						</div><!-- /.part -->
					</div><!-- /.like-button -->
				</div><!-- /.social -->
				<?php } ?>
			
			</div><!-- /.social-link --> 
		</div><!-- /.widget-social-links -->
		<?php
	}

} // class News_X_Author_Widget

function news_x_author_widget_register() {
	register_widget( 'News_X_Author_Widget' );
}

add_action( 'widgets_init', 'news_x_author_widget_register' );