<?php

/** 
asdkasasvdgasasdash
asdsadsa

 * Template Name: Events Page Template

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
<div class="events_wrapper">
<div id="page_sidebar">
<div class="container">
	<div class="row">
	<div class="span12">
	<div class="event_sydney">
		<?php echo the_field('sydney_chambers');?>
		</div>
		<center style="padding:20px 0;"><h3><?php echo the_field('dont_miss_the_event_title');?></h3></center>
	</div></div>
	<div class="row">
	<div class="span9">
	<div class="ulli">
		<?php echo the_field('event_left_side_content'); ?>
	</div></div>
	<div class="span3">
	<div class="even_right_img">
	<img src="<?php echo the_field('event_right_side_image'); ?>">
		</div></div>
		
	</div>
	<center><div class="enquire_now">
		<a href="mailto:janine@100mums.com.au"> ENQUIRE NOW  </a></div>
	</center>
	<div class="row">
	<div class="span12">
	<center style="padding:20px 0;"><h3><?php echo the_field('future_topics_title'); ?></center></h3>
	<div class="ulli">
	<?php echo the_field('future_topics'); ?>
		</div>
	</div>
	</div>
	<center><div class="enquire_now">
		<a href="mailto:janine@100mums.com.au"> ENQUIRE NOW  </a></div>
	</center>
	<div class="row">
	<div class="span12">
	<div class="recent_event1">
		<?php echo the_field('recent_events_content'); ?>
		</div>
		</div>
		<div class="recent_events1_image_wrapper">
		<div class="span4">
			<img src="<?php echo the_field('image_1'); ?>">
		</div>
		<div class="span4">
			<img src="<?php echo the_field('image_2'); ?>">
		</div>
		<div class="span4">
		<img src="<?php echo the_field('developer_image_3'); ?>">
		</div>
	</div>
	</div>
	<div class="recent_event2">
	
		<?php echo the_field('recent_events_section_2'); ?>
	</div>
	<div class="row">
	
		<div class="span4 event2_image">
			<img src="<?php echo the_field('event_2_image_1'); ?>">
		</div>
		<div class="span4 event2_image">
			<img src="<?php echo the_field('event_2_image_2'); ?>">
		</div>
		<div class="span4 event2_image">
		<img src="<?php echo the_field('event_2_image_3'); ?>">
		</div>
		
	</div>
	<div class="row">
	<div class="second_event_wrp">
		<div class="span4 event2_image">
		<img src="<?php echo the_field('event_2_image_4'); ?>">
		</div>
		<div class="span4 event2_image">
		<img src="<?php echo the_field('event_2_image_5'); ?>">
		</div></div>
	</div>
</div>
</div></div>
<?php 

get_footer();

?>