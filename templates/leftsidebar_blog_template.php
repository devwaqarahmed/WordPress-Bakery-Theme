<?php
/*
Template Name: Blog Left Sidebar
*/
?>
<?php global $complete;?>
<?php get_header(); ?>

<div class="page_leftsidebar_wrap layer_wrapper">

    	<?php if (!is_home() && !is_front_page()) { ?>
        <!--CUSTOM PAGE HEADER STARTS-->
			<?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php } ?>

  <?php  
  		
		if(!empty($complete['blog_cat_id'])){
			$blogcat = $complete['blog_cat_id'];
			$blogcats =implode(',', $blogcat);
			}else{$blogcats = '';}
       $args = array(
                     'post_type' => 'post',
                     'cat' => ''.$blogcats.'',
                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                     'posts_per_page' => ''.absint($complete['blog_num_id']).'');
      $the_query = new WP_Query( $args );
   ?>
                 
    <div class="lay4">
        <div class="center">
        
            <div class="lay4_wrap left_sidebar">
                <div class="lay4_inner">

                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                     
                <!--POST THUMBNAIL START-->
                <?php if(!empty($complete['show_blog_thumb']) ) { ?>
                        <div class="post_image">
                             <!--CALL TO POST IMAGE-->
                            <?php if ( has_post_thumbnail() ) : ?>
                            <div class="imgwrap">
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a></div>
                            
                            <?php elseif(!complete_gallery_thumb() == ''): ?>
            
                            <div class="imgwrap">
                            <a href="<?php the_permalink();?>"><img alt="<?php the_title(); ?>" src="<?php echo complete_gallery_thumb(); ?>" /></a></div>
                            
                            <?php elseif(!complete_first_image() == ''): ?>
            
                            <div class="imgwrap">
                            <a href="<?php the_permalink();?>"><img alt="<?php the_title(); ?>" src="<?php echo complete_first_image(); ?>" /></a></div>
                        
<?php /*?>                            <?php else : ?>
                            
                            <div class="imgwrap">
                            <a href="<?php the_permalink();?>"><img src="<?php echo complete_placeholder_image();?>" alt="<?php the_title_attribute(); ?>" class="complete_thumbnail"/></a></div> <?php */?>  
                                     
                            <?php endif; ?>
                        </div>
                 <?php } ?>
                 <!--POST THUMBNAIL END-->

                    
                    <!--POST CONTENT START-->
                        <div class="post_content">
                            <h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            
                         <!--META INFO START-->   
                            <?php if (!empty ($complete['post_info_id'])) { ?>
                            <div class="single_metainfo">
                            	<!--DATE-->
                                <i class="fa-calendar"></i><a class="comm_date"><?php the_time( get_option('date_format') ); ?></a>
                                <!--AUTHOR-->
                                <i class="fa-user"></i><?php global $authordata; 

                                if (!empty($authordata)) {
                                  $post_author = "<a class='auth_meta' href=\"".get_author_posts_url( $authordata->ID, $authordata->user_nicename )."\">".get_the_author()."</a>\r\n"; echo $post_author; 
                                }?>
                            	<!--CATEGORY-->
                              	<i class="fa-th-list"></i><div class="catag_list"><?php the_category(', '); ?></div>
                                <!--COMMENTS COUNT-->
                                <i class="fa-comments"></i><?php if (!empty($post->post_password)) { ?>
                            <?php } else { ?><div class="meta_comm"><?php comments_popup_link( __('0 Comment', 'complete'), __('1 Comment', 'complete'), __('% Comments', 'complete'), '', __('Off' , 'complete')); ?></div><?php } ?>
                            </div>
                            <?php } ?>
                         <!--META INFO START-->  

							<?php complete_excerpt('complete_excerptlength_teaser', 'complete_excerptmore'); ?>

                        </div>
                    <!--POST CONTENT END-->
					<!--Read More Button-->
                    <div class="blog_mo"><a href="<?php the_permalink();?>">+ <?php _e('Read More', 'complete'); ?></a></div>
                    
                </div>
                <?php endwhile ?> 
                
                <?php wp_reset_postdata(); ?>
                </div><!--lay4_inner class END-->
            
            <!--PAGINATION START-->
                <div class="ast_pagenav">
                    <?php
                        global $the_query;
                        $big = 999999999; // need an unlikely integer
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $the_query->max_num_pages,
                                'show_all'     => true,
                                'prev_next'    => false
                            
                            ) );
                    ?>
                </div>
            <!--PAGINATION END-->
            
            </div><!--lay4_wrap class END-->
            

                <!--SIDEBAR START--> 
                    <?php get_sidebar('blog'); ?>
                <!--SIDEBAR END--> 

        
		</div><!--center class END-->
	  </div><!--lay4 class END-->
</div><!--layer_wrapper class END-->
<?php get_footer(); ?>