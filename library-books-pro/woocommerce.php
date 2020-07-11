<?php 
/**
 * The Default Woocommerce Template for Library Books Pro
 *
 * Displays the Woocommerce pages.
 *
 * @package Library Books Pro
 * 
 * @since Library Books Pro 1.0
 */
global $complete;?>

<?php get_header(); ?>

    <div class="page_wrap layer_wrapper">
    	<?php if(!is_singular()) { ?>
        <!--CUSTOM PAGE HEADER STARTS-->
            <?php get_template_part('ptframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php } ?>
        <div id="content">
            <div class="center">
                <div class="single_wrap">
                    
                    <div class="single_post">

                          <div class="layerbread"><?php woocommerce_breadcrumb(); ?></div>

 						<?php woocommerce_content(); ?>
                    </div>
                
                    </div>
               
                <!--PAGE END-->
            
            
                <!--SIDEBAR START--> 
                    <?php get_sidebar('page'); ?>
                <!--SIDEBAR END--> 
            
                    </div>
            </div>
    </div><!--layer_wrapper class END-->

<?php get_footer(); ?>