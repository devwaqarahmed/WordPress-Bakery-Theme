<?php
/*
Template Name: Contact Layout 2
*/
?>
<?php global $complete;?>
<?php get_header(); ?>
    <div class="page_fullwidth_wrap layer_wrapper">
    	<?php if (!is_home() && !is_front_page()) { ?>
        <!--CUSTOM PAGE HEADER STARTS-->
			<?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php } ?>
    <div id="content">
        <div class="center">
            <div class="single_wrap no_sidebar">
                <div class="single_post">
					  <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  
                        <!--EDIT BUTTON START-->
                            <?php if ( is_user_logged_in() || is_admin() ) { ?>
                                    <div class="edit_wrap">
                            			<a href="<?php echo get_edit_post_link(); ?>">
                            				<?php _e('Edit','complete'); ?>
                                		</a>
                            		</div>
                            <?php } ?>
                        <!--EDIT BUTTON END-->
                        <!--PAGE CONTENT START--> 
                        <div class="single_post_content">
                                <!--THE CONTENT START-->
                                    <div class="contact-layout1-area">
                                    	<h1 class="page-title"><?php the_title(); ?></h1>
                                        <div class="clear"></div>
                                        <div class="contact-layout1-left contact-layout2">
                                        	<?php the_content(); ?>
                                        </div>
                                        <div class="contact-layout1-right">
                                        	<?php if(!empty($complete['contact_title'])){   ?>
                                        	<h3><?php echo $complete['contact_title']; ?></h3>
                                            <?php } ?>
                                            <?php if(!empty($complete['contact_address'])){   ?>
                                            <p><?php echo $complete['contact_address']; ?></p>
                                            <?php } ?>
                                            <?php if(!empty($complete['contact_phone'])){   ?>
                                            <p><?php echo $complete['contact_phone']; ?></p>
                                            <?php } ?>   
                                            <?php if(!empty($complete['contact_email'])){   ?>
                                            <p><a href="mailto:<?php echo $complete['contact_email']; ?>"><?php echo $complete['contact_email']; ?></a></p>
                                            <?php } ?>
                                            <?php if(!empty($complete['contact_company_url'])){   ?>
                                            <p><a href="<?php echo $complete['contact_company_url']; ?>" target="_blank"><?php echo $complete['contact_company_url']; ?></a></p>
                                            <?php } ?>                                                                                                                                 
                                            
                                        </div>
                                        <div class="clear"></div>
                                    </div>
 
                                     
                                <!--THE CONTENT END-->
                        </div>
                        <!--PAGE CONTENT END-->                       
                  </div>
                  <?php endwhile ?> 
                  </div><!--single_post class END-->
              <?php endif ?>
              </div><!--single_wrap class END-->
            </div>
        </div>
   </div><!--layer_wrapper class END-->
<?php get_footer(); ?>