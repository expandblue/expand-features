<?php
if ( ! defined( 'ABSPATH' ) ) {
    die();
}
function accordion_css(){ ?>
<style type="text/css">
    .fullwidth-blocks{
        background: <?php the_sub_field('accproj_bgroundcolour'); ?>; 
        width: <?php the_sub_field('accproj_blockwidth'); ?>%; 
        min-height: <?php the_sub_field('accproj_blockheight'); ?>px; 
        margin-right: <?php the_sub_field('accproj_marginright'); ?>%; 
        margin-bottom:<?php the_sub_field('accproj_marginbot'); ?>px !important; 
        border-radius:<?php the_sub_field('accproj_border_radius'); ?>px;  
        transition: 0.5s; 
        border:<?php the_sub_field('accproj_borderheight'); ?>px solid <?php the_sub_field('accproj_border_colour'); ?>; 
        box-shadow:<?php the_sub_field('accproj_shadow_lr'); ?>px <?php the_sub_field('accproj_shadow_tb'); ?>px <?php the_sub_field('accproj_shadow_all'); ?>px <?php the_sub_field('accproj_shadow_spread'); ?>px <?php the_sub_field('accproj_box_shadow'); ?>;
    }    
    .project-description{
        padding:<?php the_sub_field('accproj_paddingtop'); ?>px <?php the_sub_field('accproj_paddinglr'); ?>px <?php the_sub_field('accproj_paddingbot'); ?>px;
    }
    .project-description h2 {
        margin-top:<?php the_sub_field('adnproj_margin_top'); ?>px; 
        margin-bottom:<?php the_sub_field('adnproj_margin_bot'); ?>px; 
        font-size: <?php the_sub_field('adnproj_titlesize');?>px; 
        color: <?php the_sub_field('adnproj_titlecolour'); ?>;!important;
    }    
    .accordion__head {
        background: <?php the_sub_field('acchead_bgroundcolour'); ?>; 
        color: <?php the_sub_field('accheader_txtcolor'); ?>; 
        font-size: <?php the_sub_field('acchead_txtsize'); ?>px;
        border-bottom: <?php the_sub_field('acchead_borderheight'); ?>px solid <?php the_sub_field('acchead_bordercolor'); ?>;
    }
    .accordion__body > div{
        color:<?php the_sub_field('accalternative_textcolour'); ?>;
    }
<?php }

add_action( 'wp_head','accordion_css');