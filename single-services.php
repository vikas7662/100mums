<?php

/**

 * The Template for displaying all single posts

 *

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
            
            <div class="banner_logo" style="display:none; ">
				<a href="<?php bloginfo('url')?>/home"><img src="<?php echo $page_logo; ?>" title="Landing Logo" alt="logo" /></a>
			</div>
            
            <div class="banner_text" style="width:100%;">
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
        <div class="top_right">
        	<?php 
				$page_image=get_field('page_image');
			?>
            
				<img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $page_image; ?>&w=874px&h=270px&zc=0" title="<?php the_title(); ?>" />

        </div>
</div>

<div id="page_sidebar">
	<div class="container">
    	<div class="row">
        	<div class="span9">
            	<div class="page_info">
                	<div class="page_banner" style="display:none;">
                    <?php if(has_post_thumbnail()) { ?>
												<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                                                $url = $thumb['0']; ?>
                                                <img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $url; ?>&w=874px&h=360px&zc=0" title="<?php the_title(); ?>" />
                                                <?php  } else {?>
                                                <img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php bloginfo('template_directory'); ?>/images/meet_team.jpg&w=874px&h=360px&zc=0" title="<?php the_title(); ?>" alt="service-image" />
                                                <?php } ?>
                    	
                    </div>
                    <div class="page_title">
                    	<h2><?php the_title(); ?></h2>
                        <?php dynamic_sidebar('service_link'); ?>
                    </div>
                    <div class="page_details">
                    	<?php if(have_posts('')) : while(have_posts()) : the_post(); ?>
                        	<?php the_content(); ?>
                        <?php endwhile; endif;?>
                        
                        <?php /* if(have_rows('project_work_list')): ?> 
                        	<div class="project_list">
                        <?php  while(have_rows('project_work_list')): the_row('project_work_list');
									
									$project_image=get_sub_field('project_image');
									$project_name=get_sub_field('project_name');
						
						 ?>
                        	<div class="project_work">
                            	<div class="project_image">
                                	<img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $project_image; ?>&w=250px&h=250px" title="<?php echo $project_name;  ?>" />
                                </div>
                                <div class="project_title">
                                	<span><?php echo $project_name;  ?></span>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <?php endif; */ ?>
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

//get_sidebar( 'content' );

//get_sidebar();

get_footer();



