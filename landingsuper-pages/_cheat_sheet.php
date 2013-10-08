<!-- ************************* Plug-in Variables ************************* -->
<!--Logo-->
<?php echo get_post_meta($thePostID, '_lp_logo', true); ?>
		

<!--Program Title-->
<?php echo get_post_meta($thePostID, '_lp_program', true); ?>	


<!--Slogan-->
<?php echo get_post_meta($thePostID, '_lp_slogan_text', true); ?>
		

<!--Hero Image-->
<?php echo get_post_meta($thePostID, '_lp_hero_img', true); ?>
		

<!--Main Content-->
<?php
	$pos=strpos($post->post_content, '<!--more-->');
	if($pos) : 
		echo do_shortcode(substr($post->post_content,0, $pos)); 
	else : 
		the_content(); 
	endif;
?>


<!--More Content-->
<?php if($pos) : ?>
   	<?php echo do_shortcode(substr($post->post_content, $pos)); ?>
<?php endif; ?>


<!--Section 1-->
<?php echo get_post_meta($thePostID, '_section1-title', true); ?>
<?php echo get_post_meta($thePostID, '_section1-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section1-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section1-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section1-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section1-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section1-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section1-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section1-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section1-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section1-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section1-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section1-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section1-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section1-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section1-image4', true); ?>

<!--Section 2-->
<?php echo get_post_meta($thePostID, '_section2-title', true); ?>
<?php echo get_post_meta($thePostID, '_section2-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section2-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section2-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section2-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section2-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section2-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section2-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section2-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section2-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section2-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section2-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section2-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section2-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section2-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section2-image4', true); ?>

<!--Section 3-->
<?php echo get_post_meta($thePostID, '_section3-title', true); ?>
<?php echo get_post_meta($thePostID, '_section3-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section3-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section3-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section3-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section3-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section3-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section3-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section3-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section3-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section3-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section3-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section3-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section3-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section3-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section3-image4', true); ?>

<!--Section 4-->
<?php echo get_post_meta($thePostID, '_section4-title', true); ?>
<?php echo get_post_meta($thePostID, '_section4-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section4-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section4-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section4-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section4-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section4-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section4-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section4-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section4-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section4-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section4-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section4-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section4-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section4-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section4-image4', true); ?>

<!--Section 5-->
<?php echo get_post_meta($thePostID, '_section5-title', true); ?>
<?php echo get_post_meta($thePostID, '_section5-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section5-link1', true)); ?>
<?php echo get_post_meta($thePostID, '_section5-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section5-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section5-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section5-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section5-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section5-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section5-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section5-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section5-image3', true); ?
<!--sub-->
<?php echo get_post_meta($thePostID, '_section5-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section5-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section5-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section5-image4', true); ?>

<!--Section 6-->
<?php echo get_post_meta($thePostID, '_section6-title', true); ?>
<?php echo get_post_meta($thePostID, '_section6-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section6-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section6-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section6-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section6-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section6-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section6-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section6-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section6-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section6-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section6-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section6-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section6-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section6-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section6-image4', true); ?>

<!--Section 7-->
<?php echo get_post_meta($thePostID, '_section7-title', true); ?>
<?php echo get_post_meta($thePostID, '_section7-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section7-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section7-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section7-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section7-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section7-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section7-image2', true); ?>
v
<?php echo get_post_meta($thePostID, '_section7-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section7-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section7-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section7-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section7-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section7-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section7-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section7-image4', true); ?>

<!--Section 8-->
<?php echo get_post_meta($thePostID, '_section8-title', true); ?>
<?php echo get_post_meta($thePostID, '_section8-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section8-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section8-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section8-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section8-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section8-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section8-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section8-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section8-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section8-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section8-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section8-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section8-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section8-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section8-image4', true); ?>

<!--Section 9-->
<?php echo get_post_meta($thePostID, '_section9-title', true); ?>
<?php echo get_post_meta($thePostID, '_section9-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section9-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section9-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section9-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section9-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section9-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section9-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section9-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section9-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section9-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section9-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section9-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section9-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section9-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section9-image4', true); ?>

<!--Section 10-->
<?php echo get_post_meta($thePostID, '_section10-title', true); ?>
<?php echo get_post_meta($thePostID, '_section10-text', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section10-link', true)); ?>
<?php echo get_post_meta($thePostID, '_section10-image', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section10-title2', true); ?>
<?php echo get_post_meta($thePostID, '_section10-text2', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section10-link2', true)); ?>
<?php echo get_post_meta($thePostID, '_section10-image2', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section10-title3', true); ?>
<?php echo get_post_meta($thePostID, '_section10-text3', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section10-link3', true)); ?>
<?php echo get_post_meta($thePostID, '_section10-image3', true); ?>
<!--sub-->
<?php echo get_post_meta($thePostID, '_section10-title4', true); ?>
<?php echo get_post_meta($thePostID, '_section10-text4', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_section10-link4', true)); ?>
<?php echo get_post_meta($thePostID, '_section10-image4', true); ?>


<!--Link Boxes-->
<?php echo get_post_meta($thePostID, '_link_box1-title', true); ?>
<?php echo get_post_meta($thePostID, '_link_box1-text', true); ?>
<?php echo get_post_meta($thePostID, '_link_box1-image', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_link_box1-link', true)); ?>

<?php echo get_post_meta($thePostID, '_link_box2-title', true); ?>
<?php echo get_post_meta($thePostID, '_link_box2-text', true); ?>
<?php echo get_post_meta($thePostID, '_link_box2-image', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_link_box2-link', true)); ?>

<?php echo get_post_meta($thePostID, '_link_box3-title', true); ?>
<?php echo get_post_meta($thePostID, '_link_box3-text', true); ?>
<?php echo get_post_meta($thePostID, '_link_box3-image', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_link_box3-link', true)); ?>

<?php echo get_post_meta($thePostID, '_link_box4-title', true); ?>
<?php echo get_post_meta($thePostID, '_link_box4-text', true); ?>
<?php echo get_post_meta($thePostID, '_link_box4-image', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_link_box4-link', true)); ?>

<?php echo get_post_meta($thePostID, '_link_box5-title', true); ?>
<?php echo get_post_meta($thePostID, '_link_box5-text', true); ?>
<?php echo get_post_meta($thePostID, '_link_box5-image', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_link_box5-link', true)); ?>

<?php echo get_post_meta($thePostID, '_link_box6-title', true); ?>
<?php echo get_post_meta($thePostID, '_link_box6-text', true); ?>
<?php echo get_post_meta($thePostID, '_link_box6-image', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_link_box6-link', true)); ?>

<?php echo get_post_meta($thePostID, '_link_box7-title', true); ?>
<?php echo get_post_meta($thePostID, '_link_box7-text', true); ?>
<?php echo get_post_meta($thePostID, '_link_box7-image', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_link_box7-link', true)); ?>

<?php echo get_post_meta($thePostID, '_link_box8-title', true); ?>
<?php echo get_post_meta($thePostID, '_link_box8-text', true); ?>
<?php echo get_post_meta($thePostID, '_link_box8-image', true); ?>
<?php echo get_permalink(get_post_meta($thePostID, '_link_box8-link', true)); ?>


<!--Quote-->
<?php echo get_post_meta($thePostID, '_lp_quote_text', true); ?>


<!--Form Headline-->
<?php echo get_post_meta($thePostID, '_lp_form_header', true); ?>
		

<!--Form Copy-->
<?php echo get_post_meta($thePostID, '_lp_form_copy', true); ?>
		

<!--ini Form-->
<?php
	if(function_exists('make_lead_form')):
		$lead_form = make_lead_form($form_ini);
	endif;
	if(is_object($lead_form)):
		echo $lead_form->renderForm();
	endif;
?>
	<!--Dual-->
	<?php
		if(function_exists('make_lead_form2')):
			$lead_form2 = make_lead_form2($form_ini2);
		endif;
		if(is_object($lead_form2)):
			echo $lead_form2->renderForm();
		endif;
	?>


<!-- xforms -->     
<? echo $xfp->init($path,$step_success,$form_success,$thank_you); ?>
	<!-- Dual -->     
	<? echo $xfp->init($path2,$step_success2,$form_success2,$thank_you); ?>


<!--footer-->
<?php echo get_post_meta($thePostID, '_lp_footer', true); ?>










<!-- ************************* If Example ************************* -->

<?php if(get_post_meta($thePostID, '_link_box1-text', true)): ?>
    <?php echo get_post_meta($thePostID, '_link_box1-title', true); ?>
    <?php echo get_post_meta($thePostID, '_link_box1-text', true); ?>
    <?php echo get_post_meta($thePostID, '_link_box1-image', true); ?>
    <?php echo get_permalink(get_post_meta($thePostID, '_link_box1-link', true)); ?>
<?php endif; ?>



<?php if(get_post_meta($thePostID, '_section10-title', true)): ?>
	<?php echo get_post_meta($thePostID, '_section10-title', true); ?>
	<?php echo get_post_meta($thePostID, '_section10-text', true); ?>
	<?php echo get_permalink(get_post_meta($thePostID, '_section10-link', true)); ?>
	<?php echo get_post_meta($thePostID, '_section10-image', true); ?>
<?php endif; ?>












<!-- ************************* Should already be in blank templates ************************* -->



<!--ini page head-->
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


<!--ini Thank You-->
<?php echo get_post_meta($post->ID, '_lp_form_ty', true); ?>







<!--xform page head-->
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