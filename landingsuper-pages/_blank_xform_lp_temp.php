<?php
global $post;
$thePostID = $post->ID;
// Get xForms Variables
$xml_file = get_post_meta($thePostID, '_lp_xml_form', true);
$form_step_js  = get_post_meta($thePostID, '_lp_form_step_js', true);
$form_success_js  = get_post_meta($thePostID, '_lp_form_form_js', true);
$form_ty  = get_post_meta($thePostID, '_lp_form_ty', true);
// dual
$xml_file2 = get_post_meta($thePostID, '_lp_xml_form2', true);
$form_step_js2  = get_post_meta($thePostID, '_lp_form_step_js2', true);
$form_success_js2  = get_post_meta($thePostID, '_lp_form_form_js2', true);

$thank_you = "<div id='ty'>" .htmlspecialchars_decode($form_ty ,ENT_QUOTES). "</div>";
$step_success = htmlspecialchars_decode($form_step_js ,ENT_QUOTES);
$form_success = htmlspecialchars_decode($form_success_js ,ENT_QUOTES);
$path = TEMPLATEPATH.DIRECTORY_SEPARATOR.'xforms'.DIRECTORY_SEPARATOR.$xml_file;
//dual
$step_success2 = htmlspecialchars_decode($form_step_js2 ,ENT_QUOTES);
$form_success2 = htmlspecialchars_decode($form_success_js2 ,ENT_QUOTES);
$path2 = TEMPLATEPATH.DIRECTORY_SEPARATOR.'xforms'.DIRECTORY_SEPARATOR.$xml_file2;
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








	</body>
</html>