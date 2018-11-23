<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

<?php news_x_the_breadcrumb(); ?>
<div class="container category-title">
	<h1><?php echo single_cat_title(); ?></h1>	
</div><!-- /.container -->

<div class="container section-five">

    <!-- /.section-title-red -->
    <div class="row">
    	<div class="eight columns masonry">
        <?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>
		<div class="cols shadow">
            <div class="fullwidth-post-section">
                <?php
                	if ( has_post_thumbnail() ):
						the_post_thumbnail( 'full' );
					endif;
				?> 
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                <p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><span class="author"><?php the_author(); ?></span></a></a> <?php echo esc_html( get_the_date() ); ?></p>

                <?php
					$trim_excerpt = get_the_excerpt();
					$short_excerpt = wp_trim_words( $trim_excerpt, $num_words = 15, $more = '... ' );
				?>
                <p class="post-excerpt"><?php echo esc_html( $short_excerpt ); ?></p>
            </div><!-- /.big-cat-section -->
        </div>
		<?php
				endwhile;
			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;
		?>
		</div><!-- /.eight columns -->
		<?php get_sidebar(); ?>
    </div><!-- /.row -->
</div>

<?php get_footer(); ?>