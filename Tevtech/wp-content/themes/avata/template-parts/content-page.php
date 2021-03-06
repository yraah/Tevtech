<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (  has_post_thumbnail() ) : ?>
  
  <div class="feature-img-box">
    <div class="img-box figcaption-middle text-center from-top fade-in">
      <?php the_post_thumbnail(); ?>
      <div class="img-overlay">
        <div class="img-overlay-container">
          <div class="img-overlay-content"> <i class="fa fa-plus"></i> </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif;?>
  <div class="entry-content">
  <?php do_action('avata_before_page');?>
    <?php the_content(); ?>
    <?php
	
	$args  = array(
		'before'           => '<p>' . __( 'Pages:', 'avata' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'avata' ),
		'previouspagelink' => __( 'Previous page', 'avata' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
 
        wp_link_pages( $args  );
		?>
       <?php do_action('avata_after_page');?>
    <div class="comments-area text-left">
      <?php
		  if ( comments_open() ) :
			  comments_template();
		  endif;
	  ?>
    </div>
    <!--Comments End-->
  </div>
  <!-- .entry-content -->
</article>
<!-- #post-## -->
