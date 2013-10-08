<?php
	global $post;
	$thePostID = $post->ID;
	$form_position = get_post_meta($thePostID, '_lp_form_position', true);
	$form_ini = get_post_meta($thePostID, '_lp_form_ini', true);
	if(function_exists('make_lead_form')):
    	$lead_form = make_lead_form($form_ini);
	endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom/****CSS-FILE****.css" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
        <?php
        if(is_object($lead_form)):
            $lead_form->printFormJS();
        endif;
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){
            	$('#custom-style-css').detach();
				$('#footer a').attr('rel', 'pop');              
                $('a[rel="pop"]').click( function() {
                    window.open( $(this).attr('href'),'name','height=660,width=620, toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes' );
                    return false;
                });
				$(document).bind("formSuccess", function(){

                });
            });
        </script>
        <!--[if IE]>
        <![endif]-->
    </head>
	<body class="landing_page" id="lp-<?php echo $thePostID; ?>">
        <?php the_post(); ?>










        <!-- Start - template var's -->
	        <?php echo get_post_meta($thePostID, '_lp_logo_image', true); ?>
			
			<?php echo get_post_meta($thePostID, '_lp_program_title', true); ?>	

			<?php echo get_post_meta($thePostID, '_lp_slogan', true); ?>
			
			<?php echo get_post_meta($thePostID, '_lp_header_image', true); ?>
			
			<!-- main content -->
		    <?php
				$pos=strpos($post->post_content, '<!--more-->');
			    if($pos) : 
			        echo do_shortcode(substr($post->post_content,0, $pos)); 
			    else : 
			        the_content(); 
			    endif;
			?>
			<!-- more content -->
			<?php if($pos) : ?>
	        	<?php echo do_shortcode(substr($post->post_content, $pos)); ?>
			<?php endif; ?>


			<!-- Link Boxes -->
		    <?php echo get_post_meta($thePostID, '_link_bx1-title', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx1-text', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx1-image', true); ?>
		    <?php echo get_permalink(get_post_meta($thePostID, '_link_bx1-link', true)); ?>

		    <?php echo get_post_meta($thePostID, '_link_bx2-title', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx2-text', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx2-image', true); ?>
		    <?php echo get_permalink(get_post_meta($thePostID, '_link_bx2-link', true)); ?>

		    <?php echo get_post_meta($thePostID, '_link_bx3-title', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx3-text', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx3-image', true); ?>
		    <?php echo get_permalink(get_post_meta($thePostID, '_link_bx3-link', true)); ?>

		    <?php echo get_post_meta($thePostID, '_link_bx4-title', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx4-text', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx4-image', true); ?>
		    <?php echo get_permalink(get_post_meta($thePostID, '_link_bx4-link', true)); ?>

		    <?php echo get_post_meta($thePostID, '_link_bx5-title', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx5-text', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx5-image', true); ?>
		    <?php echo get_permalink(get_post_meta($thePostID, '_link_bx5-link', true)); ?>

		    <?php echo get_post_meta($thePostID, '_link_bx6-title', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx6-text', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx6-image', true); ?>
		    <?php echo get_permalink(get_post_meta($thePostID, '_link_bx6-link', true)); ?>

		    <?php echo get_post_meta($thePostID, '_link_bx7-title', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx7-text', true); ?>
		    <?php echo get_post_meta($thePostID, '_link_bx7-image', true); ?>
		    <?php echo get_permalink(get_post_meta($thePostID, '_link_bx7-link', true)); ?>
				    <!-- if statment example -->
				    <?php if(get_post_meta($thePostID, '_link_bx1-text', true)): ?>
					    <?php echo get_post_meta($thePostID, '_link_bx1-title', true); ?>
					    <?php echo get_post_meta($thePostID, '_link_bx1-image', true); ?>
			    	<?php endif; ?>


			<!-- quote -->
			<?php echo get_post_meta($thePostID, '_lp_quote', true); ?>

			<!-- lead form title -->
	        <?php echo get_post_meta($thePostID, '_lp_form_title', true); ?>
			
			<!-- lead form text/intro -->
			<?php echo get_post_meta($thePostID, '_lp_form_text', true); ?>
			
			<!-- lead form -->
			<?php
				if(function_exists('make_lead_form')):
					$lead_form = make_lead_form($form_ini);
					endif;
				if(is_object($lead_form)):
					echo $lead_form->renderForm();
				endif;
			?>
			<!-- footer -->
			<?php echo get_post_meta($thePostID, '_lp_footer_text', true); ?>
		<!-- end - template var's -->


		<div id="thankyoudivs" style="display: none">
            <div id="default_thankyou">
				<div id="ty">
					<?php echo get_post_meta($post->ID, '_lp_form_thankyous', true); ?>
				</div>
			</div>
		</div>
	</body>
</html>