<?php /* Post Format: Video */ ?>

	<header class="entry-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

		<div title="<?php the_title(); ?>" class="entry-image">

		<?php if ( get_post_meta( get_the_ID(), '_mighty_video-url', true ) ) : ?>
			
			<?php if ( has_post_thumbnail() ) : ?>

				<?php
					$poster = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'm' );
					$url = $poster['0'];
				?>

				<?php echo do_shortcode( '[video src="' . get_post_meta( get_the_ID(), '_mighty_video-url', true ) . '" poster="' . $url . '" width="640"]' ); ?>

			<?php else : ?>

				<?php echo do_shortcode( '[video src="' . get_post_meta( get_the_ID(), '_mighty_video-url', true ) . '" width="640"]' ); ?>
				
			<?php endif; ?>

		<?php elseif ( get_post_meta( get_the_ID(), '_mighty_video-embed', true ) ) : ?>

			<?php
				$wp_embed = new WP_Embed();
				$post_embed = $wp_embed->run_shortcode('[embed width="640"]' . get_post_meta( get_the_ID(), '_mighty_video-embed', true ) . '[/embed]');
			?>

			<?php echo $post_embed; ?>

		<?php else : ?>

			<?php if ( has_post_thumbnail() ) : ?>

				<?php the_post_thumbnail( 'm' ); ?>

			<?php endif; ?>

		<?php endif; ?>

		</div>

		<?php if ( !is_single() ) { ?>

			<h2 class="entry-title" itemprop="headline">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>

		<?php } ?>

		<p class="entry-meta">
			<time class="entry-time" itemprop="datePublished" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>
			<?php _e( ' by ', 'encase' ); ?>
			<span class="entry-author vcard" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" itemprop="url" rel="author"><?php echo get_the_author(); ?></a></span>
			<?php _e( ' with ', 'encase' ); ?>
			<span class="entry-comments"><?php comments_popup_link( __( '0 Comments', 'encase' ), __( '1 Comment', 'encase' ), __( '% Comments', 'encase' ) ); ?></span>
		</p>
		
	</header>

	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
	</div>

	<?php if ( is_single() ) : ?>

	<?php wp_link_pages( 'before=<div class="entry-links">&after=</div>' ); ?>
	
	<footer class="entry-footer">
		<p class="entry-meta">
			<span><?php _e( 'Posted in', 'encase' ); ?>: <?php the_category( ', ', '<br>' ); ?></span>
			<?php if ( has_tag() ) : ?>
				<span><?php _e( 'Tagged with', 'encase' ); ?>: <?php the_tags( ', ' ); ?></span>
			<?php endif; ?>
		</p>
	</footer>

	<?php endif; ?>
