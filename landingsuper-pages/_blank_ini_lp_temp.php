<?php
    global $post;
    $thePostID = $post->ID;
    $form_position = get_post_meta($thePostID, '_lp_template', true);
    $form_ini = get_post_meta($thePostID, '_lp_ini_form', true);
    if(function_exists('make_lead_form')):
        $lead_form = make_lead_form($form_ini);
    endif;
    //dual
    $form_ini2 = get_post_meta($thePostID, '_lp_ini_form2', true);
    if(function_exists('make_lead_form2')):
        $lead_form2 = make_lead_form2($form_ini2);
    endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom/***A New Custom Style Sheet***.css" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('#custom-style-css').detach();
				$('#footer a').attr('rel', 'pop');              
                $('a[rel="pop"]').click( function() {
                    window.open( $(this).attr('href'),'name','height=660,width=620, toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes' );
                    return false;
                });
                $('#custom-style-css').remove();
				useStages("<?php echo get_post_meta($thePostID, '_lp_ini_form', true); ?>");
  				toggleFieldValues("<?php echo get_post_meta($thePostID, '_lp_ini_form', true); ?>");
                <?php
		        if(is_object($lead_form)):
		            $lead_form->printFormJS();
		        endif;
		        ?>
            });
        </script>
        <!--[if IE]>
        <![endif]-->
    </head>
	<body class="landing_page" id="lp-<?php echo $thePostID; ?>">
        <?php the_post(); ?>



		<div id="thankyoudivs" style="display: none">
            <div id="default_thankyou">
				<div id="ty">
					<?php echo get_post_meta($post->ID, '_lp_form_ty', true); ?>
				</div>
			</div>
		</div>
	</body>
</html>