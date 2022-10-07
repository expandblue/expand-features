<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Invalid request.' );
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Expand Blue - Accordion Feature using ACF</title>
<link type="text/css" href="css/accordion-style.css"> 
</head>

<body>
<?php if(get_sub_field('select_addons_element') =='Accordion') : ?> 
<div class="fullwidth-blocks">
    
    <div class="project-description">        
        <?php if(get_sub_field('enable_project_description') =='enable') : ?>
        <?php if(get_sub_field('adnproj_title_position') =='adnproj_left') : ?>
        <h2>
            <?php the_sub_field('adn_mainproject_title'); ?>       
        </h2>
        <?php endif; ?> 
        
        <?php if(get_sub_field('adnproj_title_position') =='adnproj_center') : ?>
        <h2 style="text-align:center;">
            <?php the_sub_field('adn_mainproject_title'); ?>       
        </h2>
        <?php endif; endif; ?>      
    
        <?php if ( have_rows( 'accordion_contents' ) ):
        while ( have_rows( 'accordion_contents' ) ): the_row();  ?>

        <div class="accordion" data-expander="my-class" style="overflow:hidden"> 
            <div class="accordion__head" data-toggle>
                <?php the_sub_field('accordion_header'); ?>
            </div>
            <div class="accordion__body" data-body>
                <div>
                    <?php the_sub_field('accordion_content'); ?>
                </div>
            </div>
        </div>    
        <?php endwhile; endif; ?>
    </div>
</div>
<?php 
/* -------
* Please note that tis is a very simplify version of the accordion feature. 
* This current feature will not work without the appropriate jQuery function
*--------
*/ ?>
<?php include 'css/accordion-style.php';?>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/accordion.js"></script>
</body>
</html>