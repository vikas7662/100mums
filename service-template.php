<?php
/** 
 * Template Name: Service Page Template
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
    <?php /*
				<img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $page_image; ?>&w=874px&h=270px&zc=0" title="<?php the_title(); ?>" />
				*/ ?>
        </div>
</div>
<div id="service_page">
	<div class="service_page_inner">
    	<div class="container">
        	<div class="service-mid">
                <div class="page_title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="page_content">
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                         <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                </div>
                <?php $service_video=get_field('service_video'); 
					if($service_video)
					{
				?>
                	
                <div class="service-video">
                	<?php echo $service_video; ?>
                </div>
                <?php } ?>
            </div>   
           	 <div class="service-post-list">
				<?php query_posts(array('post_type'=>'services', 'posts_per_page'=>-1, 'order' => 'ASC')); ?>
				<div class="accordion" id="accordion2">
                           <?php $i=1; ?>
                           <?php if(have_posts()) { while(have_posts()) {  the_post();?> 
                                <div class="service-post">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo get_the_ID();?>" aria-expanded="flase">
                                            <?php the_title(); ?>
                                          </a>
                                        </div>
										<?php $i++; ?>
                                        <div id="collapse<?php echo get_the_ID();?>" class="accordion-body collapse">
                                          <div class="accordion-inner">
                                          		<div class="accordion-content">
                                            		<?php the_content(); ?> 
                                                    <a href="<?php the_permalink(); ?>" class="blue-btn">Read More</a>
                                                </div>
                                                <div class="service_nav">
                                                	<?php 
														$page_link_1=get_field('page_link_1');
														$page_link_2=get_field('page_link_2');
														$page_text_1=get_field('page_text_1');
														$page_text_2=get_field('page_text_2');
													?>
                                                    	<div class="left_link">
                                                        	<a href="<?php echo $page_link_1 ?>"><?php echo $page_text_1; ?></a>
                                                        </div>
                                                        
                                                        <div class="right_link">
                                                        	<a href="<?php echo $page_link_2 ?>"><?php echo $page_text_2; ?></a>
                                                        </div>
                                                </div>
                                          </div>
                                        </div>
									</div>
                                </div>     
                            <?php }
                            }
                            wp_reset_query(); ?>
                 </div>
			</div>
		</div>  
    </div>
</div>
<?php 
get_footer();
?>