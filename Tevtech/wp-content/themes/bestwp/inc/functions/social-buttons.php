<?php
/**
* Social buttons
*
* @package BestWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function bestwp_header_social_buttons() { ?>

<div class='bestwp-top-social-icons'>
    <?php if ( bestwp_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('twitterlink') ); ?>" target="_blank" class="bestwp-social-icon-twitter" title="<?php esc_attr_e('Twitter','bestwp'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('facebooklink') ); ?>" target="_blank" class="bestwp-social-icon-facebook" title="<?php esc_attr_e('Facebook','bestwp'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('googlelink') ); ?>" target="_blank" class="bestwp-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','bestwp'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('pinterestlink') ); ?>" target="_blank" class="bestwp-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','bestwp'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('linkedinlink') ); ?>" target="_blank" class="bestwp-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','bestwp'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('instagramlink') ); ?>" target="_blank" class="bestwp-social-icon-instagram" title="<?php esc_attr_e('Instagram','bestwp'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('flickrlink') ); ?>" target="_blank" class="bestwp-social-icon-flickr" title="<?php esc_attr_e('Flickr','bestwp'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('youtubelink') ); ?>" target="_blank" class="bestwp-social-icon-youtube" title="<?php esc_attr_e('Youtube','bestwp'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('vimeolink') ); ?>" target="_blank" class="bestwp-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','bestwp'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('soundcloudlink') ); ?>" target="_blank" class="bestwp-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','bestwp'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('lastfmlink') ); ?>" target="_blank" class="bestwp-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','bestwp'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('githublink') ); ?>" target="_blank" class="bestwp-social-icon-github" title="<?php esc_attr_e('Github','bestwp'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('bitbucketlink') ); ?>" target="_blank" class="bestwp-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','bestwp'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('tumblrlink') ); ?>" target="_blank" class="bestwp-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','bestwp'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('digglink') ); ?>" target="_blank" class="bestwp-social-icon-digg" title="<?php esc_attr_e('Digg','bestwp'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('deliciouslink') ); ?>" target="_blank" class="bestwp-social-icon-delicious" title="<?php esc_attr_e('Delicious','bestwp'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('stumblelink') ); ?>" target="_blank" class="bestwp-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','bestwp'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('redditlink') ); ?>" target="_blank" class="bestwp-social-icon-reddit" title="<?php esc_attr_e('Reddit','bestwp'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('dribbblelink') ); ?>" target="_blank" class="bestwp-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','bestwp'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('behancelink') ); ?>" target="_blank" class="bestwp-social-icon-behance" title="<?php esc_attr_e('Behance','bestwp'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('vklink') ); ?>" target="_blank" class="bestwp-social-icon-vk" title="<?php esc_attr_e('VK','bestwp'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('codepenlink') ); ?>" target="_blank" class="bestwp-social-icon-codepen" title="<?php esc_attr_e('Codepen','bestwp'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('jsfiddlelink') ); ?>" target="_blank" class="bestwp-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','bestwp'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('stackoverflowlink') ); ?>" target="_blank" class="bestwp-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','bestwp'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('stackexchangelink') ); ?>" target="_blank" class="bestwp-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','bestwp'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('bsalink') ); ?>" target="_blank" class="bestwp-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','bestwp'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('slidesharelink') ); ?>" target="_blank" class="bestwp-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','bestwp'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( bestwp_get_option('skypeusername') ); ?>?chat" class="bestwp-social-icon-skype" title="<?php esc_attr_e('Skype','bestwp'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( bestwp_get_option('emailaddress') ); ?>" class="bestwp-social-icon-email" title="<?php esc_attr_e('Email Us','bestwp'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( bestwp_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( bestwp_get_option('rsslink') ); ?>" target="_blank" class="bestwp-social-icon-rss" title="<?php esc_attr_e('RSS','bestwp'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
    <a href="<?php echo esc_url( '#' ); ?>" title="<?php esc_attr_e('Search','bestwp'); ?>" class="bestwp-social-icon-search"><i class="fa fa-search"></i></a>
</div>

<?php }