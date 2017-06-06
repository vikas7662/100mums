<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>



<div id="service_section">
      <div class="left_service">
          <div class="banner_logo">
          			<?php $home_service_logo=get_field('home_service_logo'); ?>
                       <a href="<?php bloginfo('url')?>/home"><img src="<?php echo $home_service_logo; ?>" title="Landing Logo" alt="logo" /></a>
            </div>
		  <div class="title_service">
              <?php                     
                    $home_service_title=get_field('home_service_title'); 
				?>
              <h1><?php echo $home_service_title;  ?></h1>
            </div>
      </div>
      <div class="right_service">
          <?php	
    			$home_service_image=get_field('home_service_image');
    		?>
          <img src="<?php echo $home_service_image; ?>" title="<?php the_title(); ?>" /> 
      </div>
      
</div>
<div id="mid_content">
  <div class="container">
    <div class="row">
      <div class="span6">
        <div class="mid_left_image">
          <?php $service_left_image=get_field('service_left_image'); ?>
          <img src="<?php echo $service_left_image; ?>" title="Service Image" alt="image" /> </div>
      </div>
      <div class="span6">
        <div class="mid_right_content">
          <?php $service_right_content=get_field('service_right_content'); 
						echo $service_right_content;
		?>
        </div>
        <div class="mid_link">
          <?php  $service_right_button=get_field('service_right_button');
						  $service_right_link=get_field('service_right_link');
					?>
          <a href="<?php echo $service_right_link; ?>"><?php echo $service_right_button; ?></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="testimonials">
  <div class="container">
    <div class="testimonial_list">
      <?php dynamic_sidebar('testimonials'); ?>
    </div>
  </div>
</div>
<div id="join_program">
  <div class="container">
    <div class="join_program_inner">
      <?php 
				$join_our_program_content=get_field('join_our_program_content');
				$join_our_program_button_text=get_field('join_our_program_button_text');
				$join_our_program_button_link=get_field('join_our_program_button_link');
			?>
      <div class="join_program_content"> <?php echo $join_our_program_content; ?> </div>
      <div class="join_progarm_link"> <a href="<?php echo $join_our_program_button_link; ?>"><?php echo $join_our_program_button_text; ?></a> </div>
    </div>
  </div>
</div>
<div id="service">
  <div class="container">
    <div class="service_top">
      <?php 
				$service_title=get_field('service_title');
				$service_content=get_field('service_content');
			?>
      <div class="service_title">
        <h2><?php echo $service_title; ?></h2>
      </div>
      <div class="service_content"> <?php echo $service_content;  ?> </div>
    </div>
    <div class="service_bottom">
      <div class="service_inner">
        <div class="row">
          <?php 
                            $argst = array(
                            'post_type' => 'services',
                            'order'     => 'ASC',
							'posts_per_page' => 4,
                            );
                            //query_posts( $argst );
                            $lastposts = get_posts( $argst );
                            foreach ( $lastposts as $post ) :
                            setup_postdata( $post ); ?>
          <div class="span3">
            <div class="service">
              <div class="service_icon">
                <?php $service_icon=get_field('service_icon'); 
					 $service_title=get_field('service_title'); 
				?>
                <img src="<?php echo $service_icon; ?>" title="<?php  the_title(); ?>" alt="Service Icon" /> </div>
              <div class="service_hover_icon">
                <?php $service_hover=get_field('service_hover'); ?>
                <img src="<?php echo $service_hover; ?>" title="<?php  the_title(); ?>" alt="Service Icon" /> </div>
              <div class="service_text"> <a href="<?php the_permalink(); ?>">
                <?php echo $service_title; ?>
                </a> </div>
              <div class="read_more"> <a href="<?php the_permalink(); ?>">Read More</a> </div>
            </div>
          </div>
          <?php 
							endforeach; 
                            wp_reset_postdata();
                            ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="support_service">
  <?php 
		$support_service_image=get_field('support_service_image');
	?>
  <img src="<?php echo $support_service_image;  ?>" title="Support Image" alt="supprt service" />
  <div class="container">
    <div class="support_inner">
      <div class="row">
        <div class="span9">
          <div class="support_text">
            <?php 
						$support_text=get_field('support_text');
					?>
            <h2><?php echo $support_text; ?></h2>
          </div>
        </div>
        <div class="span3">
          <div class="support_link">
            <?php 
						$contact_button_text=get_field('contact_button_text');
						$contact_button_link=get_field('contact_button_link');
				?>
            <a href="<?php echo $contact_button_link; ?>"><?php echo $contact_button_text; ?></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="recent_post">
      <div class="container">
           <div class="post_top">
				<?php 
                $recent_post_title=get_field('recent_post_title');
                $recent_post_content=get_field('recent_post_content');
                ?>
                  <div class="post_top_title">
                    <h2><?php echo $recent_post_title;  ?></h2>
                  </div>
                  
                  <div class="post_top_content"> 
                        <?php echo $recent_post_content;  ?> 
                   </div>
            </div>
            <div class="post_bottom">
                  <div class="row">
                    <div class="list_post">
                      <?php	
						$type = 'post';
						$args=array(
						'post_type' => $type,
						'post_status' => 'publish',
						'category_name'=>'uncategorized',
						'posts_per_page' => 5,
						'order'=>'ASC');
						$my_query = null;
						$my_query = new WP_Query($args);
            			?>
                      <?php
						if( $my_query->have_posts() ) { $i=0;
						while ($my_query->have_posts()) : $my_query->the_post(); 
						?>
                              <div class="span6">
                                <?php if($i%2 == 1){ ?>
                                    <div class="post even_post">
                                    
                                          <div class="post_text">
                                            <div class="post_info"> 
                                                <span>Published</span>
                                                <span class="post_date">
                                                 <?php the_time('F-j-Y'); ?>
                                                  </span><span class="post_author">
                                                  <?php the_author(); ?>
                                                  </span>
                                              </div>
                                            <div class="post_title"> 
                                                <a href="<?php the_permalink(); ?>">
                                                  <?php the_title(); ?>
                                                  </a> 
                                              </div>
                                            <div class="post_details">
                                             	<?php the_excerpt(); ?>
                                            </div>
                                          </div>
                                          
                                          <div class="post_image">
                                            <?php if(has_post_thumbnail()) { ?>
												<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                                                $url = $thumb['0']; ?>
                                                <img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $url; ?>&w=470px&h=200px" title="<?php the_title(); ?>" />
                                                <?php  } else {?>
                                               <img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php bloginfo('template_directory'); ?>/images/dummy.jpg&w=470px&h=200px&zc=0" alt="service-image" />
                                                <?php } ?>
                                          </div>
                                      </div>
								</div>
									<?php } else {
                                     ?>
                                        <div class="post odd_post">
                                          <div class="post_image">
												<?php if(has_post_thumbnail()) { ?>
                                                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                                                $url = $thumb['0']; ?>
                                                <img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $url; ?>&w=470px&h=200px" title="<?php the_title(); ?>" />
                                                <?php  } else {?>
                                               <img src="<?php  bloginfo('template_url'); ?>/timthumb.php?src=<?php bloginfo('template_directory'); ?>/images/dummy.jpg&w=470px&h=200px&zc=0" alt="service-image" />
                                                <?php } ?>
                                          </div>
                                          <div class="post_text">
                                                <div class="post_info"> <span>Published</span>
                                                <span class="post_date">
                                                  <?php  the_date('F-d-Y');  ?>
                                                  </span><span class="post_author">
                                                  <?php the_author(); ?>
                                                  </span> </div>
                                                <div class="post_title"> <a href="<?php the_permalink(); ?>">
                                                  <?php the_title(); ?>
                                                  </a> </div>
                                                <div class="post_details">
                                                 <?php the_excerpt(); ?>
                                                </div>
                                          </div>
                                        </div>
                        </div>
                      <?php  } $i++; endwhile; } wp_reset_query();  // Restore global post data stomped by the_post()
            			?>
                    </div>
              </div>
        </div>
</div>
</div>
<div id="contact">
  <div class="container">
    <div class="contact_top">
      <?php dynamic_sidebar('home-contact'); ?>
    </div>
    <div class="contact_bottom">
      <?php dynamic_sidebar('home-contact-form'); ?>
    </div>
  </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Download Report</h4>
        </div>
        <div class="modal-body">
          <?php echo do_shortcode('[email-download download_id="1" contact_form_id="549"]'); ?>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal -->
<?php
get_footer();
?>