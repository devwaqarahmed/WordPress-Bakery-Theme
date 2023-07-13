<?php
/*
Template Name: Testimonials
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
                <div class="single_post_content">
                                <!--THE CONTENT START-->
                                    <div class="thn_post_wrap">
                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                                    	<h1 class="page-title"><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                         <?php endwhile; endif;?>  
                                        <?php wp_reset_query(); ?>
                                        <div class="testimonialrow">
                                        <?php 	 $args = array( 'post_type' => 'testimonials', 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		$companyname = esc_html( get_post_meta( get_the_ID(), 'companyname', true ) );
		$possition = esc_html( get_post_meta( get_the_ID(), 'possition', true ) );?>
                                     
                     <div class="tstcols2"><div class="testimonial-box alltstimonial"><?php if( has_post_thumbnail() ) { the_post_thumbnail('full'); } ?> 
					 <em><?php the_content(); ?></em>
                     </div>
                     <div class="testimonial-inforarea">
                     	<i class="fa fa-user"></i>
<h3><?php the_title(); ?>,</h3>(<?php echo $companyname; ?>,<?php echo $possition; ?>)
                     </div>
				</div>
				  
				  
                                    
                                    <?php endwhile; endif;?>    
                                        </div> 
                                    </div>
                                        <div style="clear:both"></div>
                                    <div class="thn_post_wrap wp_link_pages">
                                        <?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'complete').'</strong> ', '</p>', 'number'); ?>
                                    </div>
                                <!--THE CONTENT END-->
                        </div>
              </div><!--single_wrap class END-->
            </div>
        </div>
   </div><!--layer_wrapper class END-->
<?php get_footer(); ?>