<?php 
/**
 * Header layout 1 for SKT Nutristore
 *
 * Displays The Header layout 1. This file is imported in header.php
 *
 * @package SKT Nutristore
 * 
 * @since SKT Nutristore 1.0
 */
global $complete;?>
<!--HEADER STARTS-->

<div class="header type4">
  <div class="centerlogo"> 
    <!--LOGO START-->
    <div class="logo">
      <?php if(!empty($complete['logo_image_id']['url'])){   ?>
      <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logo = $complete['logo_image_id']; echo $logo['url']; ?>" /></a> <span class="desc"><?php echo bloginfo('description'); ?></span>
      <?php }else{ ?>
      <?php if ( is_home() ) { ?>
      <h1><a href="<?php echo esc_url( home_url( '/' ) );?>">
        <?php bloginfo('name'); ?>
        </a></h1>
      <span class="desc"><?php echo bloginfo('description'); ?></span>
      <?php }else{ ?>
      <h2><a href="<?php echo esc_url( home_url( '/' ) );?>">
        <?php bloginfo('name'); ?>
        </a></h2>
      <span class="desc"><?php echo bloginfo('description'); ?></span>
      <?php } ?>
      <?php } ?>
    </div>
    <!--LOGO END--> 
  </div>
  <div class="center centerlogoarea">
    <div class="head_inner"> 
      <!--MENU START--> 
      <!--MOBILE MENU START--> 
      <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a> 
      <!--MOBILE MENU END-->
      <div id="topmenu" class="<?php if ('header' == $complete['social_bookmark_pos'] ) { ?> has_bookmark<?php } ?>">
        <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
      </div>
      <!--MENU END-->
      
      <div class="header-extras">
          <li>
            <div class="header-search-toggle" title="Search"><i class="fa fa-search" aria-hidden="true"></i></div>
          </li>
          <?php if ( class_exists( 'WooCommerce' ) ) { ?>
          <li><span class="wctotal-cart-value"><small><?php echo WC()->cart->get_cart_total(); ?></small>CART</span><a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="custom-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span> </a></li>
          <?php } ?>
          <div class="header-search-form">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" name="s" />
              <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
            </form>
          </div>
        </div>
      
    </div>
  </div>
</div>
<!--HEADER ENDS-->