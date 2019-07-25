<?php
/*
=================================================
ENCASE THEME CUSTOMIZER
=================================================
*/
add_action('customize_register', 'encase_theme_customize');
    function encase_theme_customize($wp_customize) {
	    $wp_customize->remove_section( 'colors');
	
    
	function encase_customize_register( $wp_customize ) {
    	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	}
	add_action( 'customize_register', 'encase_customize_register' );

/*
=================================================
MOVE TO TOP
=================================================
*/

	$wp_customize->add_section( 'move_top_top', array(
        'title'          => __( 'Move To Top', 'encase' ),
        'priority'       => 3,
    ) );

    $wp_customize->add_setting( 'movetotop', array(
		'default'        => 1,
		'sanitize_callback' => 'encase_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'movetotop', array(
		'label'    => __( 'Enable Move To Top', 'encase' ),
		'section'  => 'move_top_top',		
		'type'     => 'checkbox',
		'priority' => 14,
	) );

	

/*
=================================================
LOGO SETUp
=================================================
*/
$wp_customize->get_section('title_tagline')->panel = 'site_title_and_taglines';
	
	$wp_customize->add_panel( 'site_title_and_taglines', array(// Header Panel
	    'priority'       => 2,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Site Title & Taglines', 'encase'),
	    'description'    => __('Deals with the Site Title settings of your theme', 'encase'),
	));
	
    $wp_customize->add_setting( 'logo_style', array(
            'sanitize_callback' => 'encase_sanitize_checkbox',
	) );
			
	$wp_customize->add_control( 'logo_style', array(
            'label'     => __( 'Check this box if you would like to use a plain text logo.
', 'encase' ),
            'section'   => 'title_tagline',
            'priority'  => 10,
            'type'      => 'checkbox',
            ));
	
    // Setting group for uploading logo
        $wp_customize->add_setting('custom_my_logo', array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'encase_sanitize_upload',
        ));
	
        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'custom_my_logo', array(
            'label'    => __('Upload Custom Logo', 'encase'),
            'section'  => 'title_tagline',
            'settings' => 'custom_my_logo',
            'priority' => 11,
        ))); 


/*
=================================================
COLOR SECTION
=================================================
*/
	
	$wp_customize->add_section( 'colors', array(
		'title'          => __( 'Colors', 'encase' ),
		'priority'       => 4,
	) );
        
    // link color
	$wp_customize->add_setting( 'link_accent_color', array(
		'default'        => '#3A9AD9',
		'sanitize_callback' => 'encase_sanitize_hex_color'
	));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_accent_color', array(
		'label'   => __( 'Link & Accent Color', 'encase' ),
		'description' => __('This changes both the link and accent color used in the theme.
', 'encase'),
		'section' => 'colors',
		'settings'   => 'link_accent_color',
		'priority' => 2			
	) ) );
    
    $wp_customize->add_setting( 'link_accent_color_bg', array(
    	'default'        => '#505050',
    	'sanitize_callback' => 'encase_sanitize_hex_color'
    ) );
	
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_accent_color_bg', array(
    	'label'   => __( 'Link & Accent Background Color', 'encase' ),
    	'description' => __('This changes both the link and accent background color used in the theme.
    ', 'encase'),
    	'section' => 'colors',
    	'settings'   => 'link_accent_color_bg',
    	'priority' => 2			
    ) ) );


/*
=================================================
BASIC SETTING
=================================================
*/    
	$wp_customize->add_section( 'encase_basic_setting', array(
        'title'          => __( 'Basic Setting', 'encase' ),
        'description'    => __(' ', 'encase'),  
        'priority'       => 5,
        
    ) );

    $wp_customize->add_setting( 'encase_hide_author_meta', array(
        'default' => '',
        'sanitize_callback' => 'encase_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'encase_hide_author_meta', array(
        'label'   => __( 'Hide Author Information', 'encase' ),
        'section' => 'encase_basic_setting',
        'type'    => 'checkbox',
       'priority'       => 1,  
    ));
	
/*
=================================================
ENCASE FOOTER SETTINGS
=================================================
*/
	$wp_customize->add_panel( 'encase_footer_settings', array(
		'title'          => __( 'Encase Footer', 'encase' ),
		'description'   => __('Use to Create a Home Page using Homepage Template', 'encase'),
		'priority'       => 7,
	) );
	
	//Copyright Section
	$wp_customize->add_section( 'encase_footer_copyright', array(
		'title'          => __( 'Copyright', 'encase' ),
		'priority'       => 2,
		'panel'      => 'encase_footer_settings',
	) );


	$wp_customize->add_setting( 'copyright', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_text',
	) );

	$wp_customize->add_control( 'copyright', array(
		'settings' => 'copyright',
		'label'    => __( 'Copyright Text', 'encase' ),
		'section'  => 'encase_footer_copyright',
		'type'     => 'text',
		'priority' => 1,
	) );

	//Social Networking Links
	$wp_customize->add_section( 'social_networking', array(
		'title'          => __( 'Social Networking Links', 'encase' ),
		'priority'       => 3,
		'panel'          => 'encase_footer_settings',
	) );

	// Setting group for Twitter
	$wp_customize->add_setting( 'twitter_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'twitter_uid', array(
		'settings' => 'twitter_uid',
		'label'    => __( 'Twitter', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 2,
	) );	
	
// Setting group for Facebook
	$wp_customize->add_setting( 'facebook_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'facebook_uid', array(
		'settings' => 'facebook_uid',
		'label'    => __( 'Facebook', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 3,
	) );	
	
// Setting group for Google+
	$wp_customize->add_setting( 'google_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'google_uid', array(
		'settings' => 'google_uid',
		'label'    => __( 'Google+', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 4,
	) );	
	
// Setting group for Linkedin
	$wp_customize->add_setting( 'linkedin_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'linkedin_uid', array(
		'settings' => 'linkedin_uid',
		'label'    => __( 'Linkedin', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 5,
	) );	
	
// Setting group for Pinterest
	$wp_customize->add_setting( 'pinterest_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'pinterest_uid', array(
		'settings' => 'pinterest_uid',
		'label'    => __( 'Pinterest', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 6,
	) );

// Setting group for Flickr
	$wp_customize->add_setting( 'flickr_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'flickr_uid', array(
		'settings' => 'flickr_uid',
		'label'    => __( 'Flickr', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 7,
	) );
// Setting group for Youtube
	$wp_customize->add_setting( 'youtube_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'youtube_uid', array(
		'settings' => 'youtube_uid',
		'label'    => __( 'Youtube', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 8,
	) );	
// Setting group for Vimeo
	$wp_customize->add_setting( 'vimeo_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'vimeo_uid', array(
		'settings' => 'vimeo_uid',
		'label'    => __( 'Vimeo', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 9,
	) );
// Setting group for Instagram
	$wp_customize->add_setting( 'instagram_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'instagram_uid', array(
		'settings' => 'instagram_uid',
		'label'    => __( 'Instagram', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 10,
	) );	
	
	
// Setting group for Reddit
	$wp_customize->add_setting( 'reddit_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'reddit_uid', array(
		'settings' => 'reddit_uid',
		'label'    => __( 'Reddit', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 11,
	) );	
// Setting group for Picassa
	$wp_customize->add_setting( 'picassa_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'picassa_uid', array(
		'settings' => 'picassa_uid',
		'label'    => __( 'Picassa', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 12,
	) );	
// Setting group for Stumbleupon
	$wp_customize->add_setting( 'stumbleupon_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'stumbleupon_uid', array(
		'settings' => 'stumbleupon_uid',
		'label'    => __( 'Stubmleupon', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 13,
	) );	
// Setting group for WordPress
	$wp_customize->add_setting( 'wp_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'wp_uid', array(
		'settings' => 'wp_uid',
		'label'    => __( 'WordPress', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 14,
	) );
// Setting group forgithub
	$wp_customize->add_setting( 'github_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'github_uid', array(
		'settings' => 'github_uid',
		'label'    => __( 'Github', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 15,
	) );	
// Setting group dribbble
	$wp_customize->add_setting( 'dribbble_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'dribbble_uid', array(
		'settings' => 'dribbble_uid',
		'label'    => __( 'Dribbble', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 16,
	) );	
				
// Setting group for rss
	$wp_customize->add_setting( 'rss_uid', array(
		'default'        => '',
		'sanitize_callback' => 'encase_sanitize_url',
	) );

	$wp_customize->add_control( 'rss_uid', array(
		'settings' => 'rss_uid',
		'label'    => __( 'RSS', 'encase' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 17,
	) );
    


    }
/**
 * adds sanitization callback function : colors
 * @package encase 
*/
	function encase_sanitize_hex_color( $color ) {
	if ( $unhashed = sanitize_hex_color_no_hash( $color ) )
		return '#' . $unhashed;

	return $color;
}

/**
 * adds sanitization callback function : text
 * @package encase 
*/
function encase_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * adds sanitization callback function : url
 * @package encase 
*/
	function encase_sanitize_url( $value) {
		$value = esc_url( $value);
		return $value;
	}

/**
 * adds sanitization callback function : checkbox
 * @package encase 
*/
function encase_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}	



/**
 * adds sanitization callback function for the page width : radio
 * @package encase 
*/
function encase_sanitize_pagewidth( $input ) {
    $valid = array(
            'default' => __( 'Full Width', 'encase' ),
            'boxedmedium' => __( 'Boxed Medium', 'encase' ),
			'boxedsmall' => __( 'Boxed Small', 'encase' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
/**
 * adds sanitization callback function for the featured image : radio
 * @package encase 
*/
function encase_sanitize_featured_image( $input ) {
    $valid = array(
		'big' => __( 'Wide Featured Image', 'encase' ),
		'small' => __( 'Small Featured Image', 'encase' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the excerpt : radio
 * @package encase 
*/
function encase_sanitize_excerpt( $input ) {
    $valid = array(
		'content' => __( 'Content', 'encase' ),
        'excerpt' => __( 'Excerpt', 'encase' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the layout : radio
 * @package encase 
*/
function encase_sanitize_blogstyle( $input ) {
    $valid = array(
		'blogright' => __( 'Blog with Right Sidebar', 'encase' ),
		'blogleft' => __( 'Blog with Left Sidebar', 'encase' ),
		'blogleftright' => __( 'Blog with Left &amp; Right Sidebar', 'encase' ),
		'blogwide' => __( 'Blog with Full Width &amp; no Sidebars', 'encase' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the logo style : radio
 * @package encase 
*/
function encase_sanitize_logo_style( $input ) {
    $valid = array(
            'default' => __( 'Default Logo', 'encase' ),
            'custom' => __( 'Your Logo', 'encase' ),
            'logotext' => __( 'Logo with Title and Tagline', 'encase' ),
			'text' => __( 'Text Title', 'encase' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for numeric data : number
 * @package encase 
*/

function encase_sanitize_number( $value ) {
    $value = (int) $value; // Force the value into integer type.
    return ( 0 < $value ) ? $value : null;
}


/**
 * adds sanitization callback function for uploading : uploader
 * @package encase * Special thanks to: https://github.com/chrisakelley
 */
add_filter( 'encase_sanitize_image', 'encase_sanitize_upload' );
add_filter( 'encase_sanitize_file', 'encase_sanitize_upload' );
function encase_sanitize_upload( $input ) {
        
        $output = '';
        
        $filetype = wp_check_filetype($input);
        
        if ( $filetype["ext"] ) {
        
                $output = $input;
        
        }
        
        return $output;

}
/**
*adds css in load of page
*@package Encase
*@Description: It hooks the following css on page load
*/
add_action( 'customize_controls_print_styles', 'sleeky_customize_css');   
    function sleeky_customize_css()   {    ?>
        <style type="text/css">
            input[data-customize-setting-link="nav_position_scrolltop_val"] {
                 font-weight: bold;
            }
            li#customize-control-nav_position_scrolltop_val label span.customize-control-title {
                font-weight: bold;
            }
            li#customize-control-nav_position_scrolltop {
                margin-bottom: 20px !important;
            }
            li#customize-control-nav_position_scrolltop_val {
                margin-top: -10px !important;
            }
            input[data-customize-setting-link="nav_position_scrolltop_val"] {
                background: none !important;
                   
            }
        </style>
            
        <?php
    }

/**
*adds js in head section
*@package Encase
*@Description: It hooks the following js on head sectuib
*/

function encase_theme_customize_js() { ?>
	<script>
		jQuery(document).ready(function($) {
    		//make menu sticky
	  		var active = <?php  if ( get_theme_mod('nav_position_scrolltop')): echo "1"; else: echo "0"; endif; ?>;
	            if (active == 1 ) {
	                $(window).scroll(function() {
	                    if ($(window).scrollTop() > 180) {
	                      
	                        $( ".encase_sticks" ).css ({
	                            "position": "fixed",
							    "background": "#121212", 
							    "width": "100%",
							    "top":"0",
							    "z-index": "9999 !important"
	                        });

	                        $( "#header" ).css ({
	                            "background-color": "#121212",
	    						"padding-top": "0"
	                        });

	                    } else {

	                        $( ".encase_sticks" ).css ({
	                            "position":"relative"
	                        });
	                    }

	                });
	            }
		});

	</script>
<?php
}
add_action( 'wp_head', 'encase_theme_customize_js');
