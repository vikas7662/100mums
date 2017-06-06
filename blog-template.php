<?php
/** 
 * Template Name: Blog Page Template
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<div class="top-banner">
    	<div class="top_left">
        	<?php 
				$page_logo=get_field('page_logo');
				$page_text=get_field('page_text');
			?>
            <div class="banner_logo">
				<a href="<?php bloginfo('url')?>/home"><img src="<?php echo $page_logo; ?>" title="Landing Logo" alt="logo" /></a>
			</div>
            <div class="banner_text">
				<h3><?php  echo $page_text; ?></h3>
			</div>
            <div class="page_nav">
				<div class="breadcrumbs" typeof="BreadcrumbList" >
						<?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
				</div>
			</div>
        </div>
        <?php 
        $page_image=get_field('page_image');
        ?>
	<div class="top_right" style="background-image:url(<?php echo $page_image; ?>); ">
            
				<?php /* <img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $page_image; ?>&w=874px&h=270px&zc=0" title="<?php the_title(); ?>" />*/ ?>

        </div>
</div>
<div id="page_sidebar">
	<div class="container">
    	<div class="row">
        	<div class="span9">
            	<div class="page_info">
                    <div class="page_title">
                    	<h2><?php the_title(); ?></h2>
                        <div class="page_sitemap">
                        	<?php 
								$page_link_text_1=get_field('page_link_text_1');
								$page_link_2_text=get_field('page_link_2_text');
								$page_link_1=get_field('page_link_1');
								$page_link_2=get_field('page_link_2');
							?>
                            <span class="left_link"><a href="<?php echo $page_link_1; ?>"><?php echo $page_link_text_1; ?></a></span>
                            <span class="right_link"><a href="<?php echo $page_link_2; ?>"><?php echo $page_link_2_text; ?></a></span>
                        </div>
                    </div>
                    <div class="page_details">
						<?php
						if(is_page('blog')) 
						{
						   global $post;
						   $paged = 1;
						   if ( get_query_var('paged') ) $paged = get_query_var('paged');
						   if ( get_query_var('page') ) $paged = get_query_var('page');
						   $temp = $wp_query; 
						   $wp_query = null; 
						?>
                        
                        <?php query_posts(array('post_type'=>'post', 'posts_per_page'=>5,'category_name'=>'uncategorized','order' => 'DESC','paged' => $paged,));?>
						<?php	$count = 1; ?>
                        <?php if ( have_posts() ) { while( have_posts() ) { the_post(); ?>
                        	<div class="post_blog_list">
                                <div class="span8">
                                	<div class="blog_content">
                                    	<div class="blog_title">
                                        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="blog_details">
                                        	<?php the_excerpt(); ?>
                                        </div>
                                        <div class="blog_link">
                                        	<a href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                          	</div>
                            <?php } wp_pagenavi();  } 	wp_reset_query(); } else if(is_page('100-mums-video-archive')) { 
							
								global $post;
							   $paged = 1;
							   if ( get_query_var('paged') ) $paged = get_query_var('paged');
							   if ( get_query_var('page') ) $paged = get_query_var('page');
							   $temp = $wp_query; 
							   $wp_query = null; 
							?>
                            
                            <?php query_posts(array('post_type'=>'post', 'posts_per_page'=>5, 'category_name'=>'video', 'order' => 'DESC','paged' => $paged,));?>
						<?php	$count = 1; ?>
                        <?php if ( have_posts() ) { while( have_posts() ) { the_post(); ?>
                            
                            
                            <div class="video_blog_list">
                                <div class="span4">
                                	<div class="video_image">	
                                    	<?php the_field('video'); ?>
                                    </div>
                                </div>
                                <div class="span4">
                                	<div class="video_content">
                                    	<div class="video_title">
                                        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="video_details">
                                        	<?php the_excerpt(); ?>
                                        </div>
                                        <div class="video_link">
                                        	<a href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                          	</div>
                            
                            <?php } wp_pagenavi();  } 	wp_reset_query();  } ?>	
                    </div>
                </div>
            </div>
            <div class="span3">
            	<div class="sidebar">
                	<?php dynamic_sidebar('sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 

get_footer();

?>