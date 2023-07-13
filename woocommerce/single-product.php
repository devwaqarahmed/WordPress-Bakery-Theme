<?php
global $complete;
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
$woosingletype = $complete['woo_single_product_layout_id']; 
?>
<div class="page_wrap layer_wrapper">
 <!--CUSTOM PAGE HEADER STARTS-->
  <?php get_template_part('sktframe/core','pageheader'); ?>
  <!--CUSTOM PAGE HEADER ENDS-->
 <?php /* Single Product With Left Sidebar*/ ?>
  <?php if( $woosingletype == 'woosingle_layout1'){ ?>	
  <div id="content">
    <div class="center">
      <div class="single_wrap">
        <div class="single_post">
        <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
		?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
		<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		?>
        </div>
      </div>
      <?php
		get_sidebar('woo');
	  ?>
      <div class="clear"></div>
    </div>
  </div>
  <?php } ?>
  <?php /* Single Product With Left Sidebar*/ ?>
  
  <?php /* Single Product With Right Sidebar*/ ?>
  <?php if( $woosingletype == 'woosingle_layout2'){ ?>	
  <div id="content">
    <div class="center">
      <div class="single_wrap right_side">
        <div class="single_post">
        <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
		?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
		<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		?>
        </div>
      </div>
      <?php
		get_sidebar('woo');
	  ?>
      <div class="clear"></div>
    </div>
  </div>
  <?php } ?>  
  <?php /* Single Product With Right Sidebar*/ ?>
  
  <?php /* Single Product Fullwidth */ ?>
  <?php if( $woosingletype == 'woosingle_layout3'){ ?>	
  <div id="content">
    <div class="center">
      <div class="no_sidebar">
        <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
		?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
		<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		?>
        </div>
      <div class="clear"></div>
    </div>
  </div>
  <?php } ?>  
  <?php /* Single Product Fullwidth */ ?>  
  
</div>
<!--layer_wrapper class END-->

<?php get_footer();