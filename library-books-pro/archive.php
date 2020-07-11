<?php 
/**
 * The Archive page for Library Books Pro
 *
 * Displays the Archive pages.
 *
 * @package Library Books Pro
 * 
 * @since Library Books Pro 1.0
 */
global $complete;?>
<?php get_header(); ?>
	<!--Category Posts-->
    <div class="category_wrap layer_wrapper">
        <!--CUSTOM PAGE HEADER STARTS-->
            <?php get_template_part('ptframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php get_template_part('templates/post','layout4'); ?>
    </div><!--layer_wrapper class END-->
<?php get_footer(); ?>