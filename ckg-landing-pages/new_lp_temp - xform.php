<?php
global $post;
$thePostID = $post->ID;
// Get xForms Variables
$xml_file = get_post_meta($thePostID, '_lp_form_xml', true);
$form_step_js  = get_post_meta($thePostID, '_lp_form_step_js', true);
$form_success_js  = get_post_meta($thePostID, '_lp_form_form_js', true);
$form_ty  = get_post_meta($thePostID, '_lp_form_thankyous', true);
//
$thank_you = "<div id='ty'>" .htmlspecialchars_decode($form_ty ,ENT_QUOTES). "</div>";
$step_success = htmlspecialchars_decode($form_step_js ,ENT_QUOTES);
$form_success = htmlspecialchars_decode($form_success_js ,ENT_QUOTES);
$path = TEMPLATEPATH.DIRECTORY_SEPARATOR.'xforms'.DIRECTORY_SEPARATOR.$xml_file;
?>
<? $xfp = new xforms_core(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom/***CSS FILE NAME***.css" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
        <?php echo get_post_meta($thePostID, '_lp_form_head', true); ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){
            	$('#custom-style-css').detach();
				$('#footer a').attr('rel', 'pop');              
                $('a[rel="pop"]').click( function() {
                    window.open( $(this).attr('href'),'name','height=660,width=620, toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes' );
                    return false;
                });
            });
        </script>
        <!--[if IE]>
        <![endif]-->
    </head>
	<body class="landing_page" id="lp-<?php echo $thePostID; ?>">
        <?php the_post(); ?>






		<!-- Logo -->
        	<?php echo get_post_meta($thePostID, '_lp_logo_image', true); ?>
		

		<!-- Program Title -->
		<?php echo get_post_meta($thePostID, '_lp_program_title', true); ?>	


		<!-- Slogan -->
		<?php echo get_post_meta($thePostID, '_lp_slogan', true); ?>


		<!-- Hero Image -->		
		<?php echo get_post_meta($thePostID, '_lp_header_image', true); ?>

		
		<!-- Content -->
	    	<?php
			$pos=strpos($post->post_content, '<!--more-->');
		    if($pos) : 
		        echo do_shortcode(substr($post->post_content,0, $pos)); 
		    else : 
		        the_content(); 
		    endif;
		?>

		<!-- More Content -->
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

	    	<!-- IF Example -->
	    	<?php if(get_post_meta($thePostID, '_link_bx7-text', true)): ?>
			<?php echo get_post_meta($thePostID, '_link_bx7-title', true); ?>
			<?php echo get_post_meta($thePostID, '_link_bx7-text', true); ?>
			<?php echo get_post_meta($thePostID, '_link_bx7-image', true); ?>
			<?php echo get_permalink(get_post_meta($thePostID, '_link_bx7-link', true)); ?>
		<?php endif; ?>


		<!-- Quote -->
		<?php echo get_post_meta($thePostID, '_lp_quote', true); ?>		


		<!-- Form Title -->
        	<?php echo get_post_meta($thePostID, '_lp_form_title', true); ?>
		
        
        	<!-- Form Copy -->
		<?php echo get_post_meta($thePostID, '_lp_form_text', true); ?>
	    

	    	<!-- xforms -->     
	    	<? echo $xfp->init($path,$step_success,$form_success,$thank_you); ?>
		

		<!-- Footer -->
		<?php echo get_post_meta($thePostID, '_lp_footer_text', true); ?>
		
		
		
		
		
		
		
		<!-- WP Footer -->
		<?php wp_footer(); ?>
		<!-- /END WP Footer -->
	</body>
</html>
