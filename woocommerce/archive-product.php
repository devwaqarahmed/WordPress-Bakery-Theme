<?php 
global $complete; 
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 */

defined( 'ABSPATH' ) || exit;

get_header();
$wooshoptype = $complete['woo_shop_page_layout_id']; 
?>

<div class="page_wrap layer_wrapper">
  <?php if(!is_singular()) { ?>
  <!--CUSTOM PAGE HEADER STARTS-->
  <?php get_template_part('sktframe/core','pageheader'); ?>
  <!--CUSTOM PAGE HEADER ENDS-->
  <?php } ?>
  <?php /* Shop Page Left Sidebar*/ ?>
  <?php if( $wooshoptype == 'wooshop_layout1'){ ?>
  <div id="content">
    <div class="center">
      <div class="single_wrap">
        <div class="single_post">
          <header class="woocommerce-products-header">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <h1 class="woocommerce-products-header__title page-title">
              <?php woocommerce_page_title(); ?>
            </h1>
            <?php endif; 
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
          </header>
          <?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}
?>
        </div>
      </div>
      <?php
get_sidebar('woo');
?>
      <div class="clear"></div>
    </div>
  </div>
  <?php
			}
  ?>
  <?php /* Shop Page Left Sidebar*/ ?>	 
  
  <?php /* Shop Page Right Sidebar*/ ?> 			
  <?php if( $wooshoptype == 'wooshop_layout2'){ ?>
  <div id="content">
    <div class="center">
      <div class="single_wrap right_side">
        <div class="single_post">
          <header class="woocommerce-products-header">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <h1 class="woocommerce-products-header__title page-title">
              <?php woocommerce_page_title(); ?>
            </h1>
            <?php endif;  
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
          </header>
          <?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}
?>
        </div>
      </div>
      <?php
get_sidebar('woo');
?>
      <div class="clear"></div>
    </div>
  </div>
  <?php
	}
  ?>
  <?php /* Shop Page Right Sidebar*/ ?>
  
  <?php /* Shop Page Full Width */ ?>
  <?php if( $wooshoptype == 'wooshop_layout3'){ ?>
  <div id="content">
    <div class="center"> 
      <!--POST START-->
      <div class="no_sidebar">
        <?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
        <header class="woocommerce-products-header">
          <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
          <h1 class="woocommerce-products-header__title page-title">
            <?php woocommerce_page_title(); ?>
          </h1>
          <?php endif; 
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
        </header>
        <?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>
      </div>
    </div>
    <!--center class END--> 
  </div>
  <?php
			} ?>
  <?php /* Shop Page Full Width */ ?>          
</div>
<!--layer_wrapper class END-->
<?php    
get_footer();