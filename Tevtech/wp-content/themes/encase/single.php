<?php get_header(); ?>

	<div class="wrap clearfix">

		<main id="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

					<?php 
						$format = get_post_format(); 
						get_template_part( 'content', $format );
					?>

				</article>
		  <?php if( get_theme_mod( 'encase_hide_author_meta' ) == '') { ?>
					<!-- Author -->
					<section class="author-bio clearfix" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
						<h3 id="author-title"><?php _e( 'About the Author', 'encase' ); ?></h3>
						<?php echo get_avatar( get_the_author_meta( 'email' ), '80', get_the_author() ); ?>
						<h1 class="author-name" itemprop="name">
							<?php the_author_posts_link(); ?>
						</h1>
						<p class="author-description" itemprop="description">
							<?php the_author_meta( 'description' ); ?>
						</p>
					</section> <?php
				}
				// Comments
				comments_template(); ?>

			<?php endwhile; ?>

			<?php else : ?>

				<!-- Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h1><?php _e( 'Sorry, nothing to display', 'encase' ); ?></h1>
					</header>

				</article>

			<?php endif; ?>
		
		</main>

		<!--Sidebar-->
		<?php get_sidebar(); ?>

	</div>
			
<?php get_footer(); ?>
