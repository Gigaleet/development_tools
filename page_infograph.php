<?php
/* Template Name: Infographic Page */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title>
            <?php bloginfo('name'); ?>
            <?php wp_title('&raquo;', true, 'left'); ?>
        </title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
        <?php wp_head(); ?>
        <style type="text/css">
            /**************************************************************************/
            /*****************       Infographic Template Styles      *****************/
            /*****************                                        *****************/
            /***************** Please do NOT edit the styles below!!! *****************/
            /**************************************************************************/
            /* Reset */
            html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video { margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline; }
            article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
            html { height: 100%; width: 100%; }
            body { line-height: 1; height: 100%; width: 100%; }
            ol, ul { list-style: none; }
            blockquote, q { quotes: none; }
            blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
            strong, b { font-weight: bold; }
            em, i { font-style: italic; }
            table { border-collapse: collapse; border-spacing: 0; }
            /* Template Styles */
            body.info { color: #333333; font-size: 12px; line-height: 16px; }
            a { font-weight: bold; text-decoration: underline; }
                a:hover { font-weight: bold; text-decoration: none; }
            body.info #header { width: 1000px; max-height: 150px; display: block; margin: 0 auto; }
                body.info #header #logo { float: left; }
                    body.info #header #logo a {}
                body.info #header h2#tagline { float: right; }
            .infoContent { width: 950px; margin: 0 auto; display: block; padding: 40px 25px 40px 25px; background:#ffffff; }
                .infoContent h1, .infoContent h2, .infoContent h3, .infoContent h4 { font-weight: bold; margin: 0 0 10px 0; }
                .infoContent h1 { font-size: 20px; line-height: 24px; }
                .infoContent h2 { font-size: 18px; line-height: 22px; }
                .infoContent h3 { font-size: 16px; line-height: 20px; }
                .infoContent h4 { font-size: 14px; line-height: 18px; }
                .infoContent p { margin: 0 0 15px 0; }
                .infoContent ul { margin: 0 0 25px 35px; }
                    .infoContent ul li { list-style: none; margin: 0 0 6px 0; }
                        .infoContent ul li:before { color:#333333; content:"\2022"; font-size: 22px; padding-right: 10px; margin-left: -25px; position: relative; top: 4px; }
                .infoContent img { margin: 0 -25px; }
            body.info #footer {}
                body.info #footer #footer-inner { width: 1000px; max-height: 100px; margin: 20px auto; font-size: 11px; }
                    body.info #footer #footer-inner p {}
                    body.info #footer #footer-inner ul {}
                        body.info #footer #footer-inner ul li {}
            /**************************************************************************/
            /*****************   Infographic Template Custom Styles   *****************/
            /*****************       Place custom styles below        *****************/
            /*****************         or in custom_style.css         *****************/
            /*****************                                        *****************/
            /***************** Please do NOT edit the styles Above!!! *****************/
            /**************************************************************************/
            body.info div.info-wrap {  }
            div.info-wrap a {  }
                div.info-wrap a:hover {  }
            /* Header Styles */
            body.info div.info-wrap #header {  }
            body.info div.info-wrap #header:before {  } 
                body.info div.info-wrap #header #logo {  }
                    body.info div.info-wrap #header #logo a {  }
                body.info div.info-wrap #header h2#tagline {  }
            /* Content Styles */
            div.info-wrap .infoContent {  }
                div.info-wrap .infoContent h1, div.info-wrap .infoContent h2, div.info-wrap .infoContent h3, div.info-wrap .infoContent h4 {  }
                div.info-wrap .infoContent h1 {  }
                div.info-wrap .infoContent h2 {  }
                div.info-wrap .infoContent h3 {  }
                div.info-wrap .infoContent h4 {  }
                div.info-wrap .infoContent p {  }
                div.info-wrap .infoContent ul {  }
                    div.info-wrap .infoContent ul li {  }
                        div.info-wrap .infoContent ul li:before {  }
            /* Footer Styles */
            body.info div.info-wrap #footer {  }
                body.info div.info-wrap #footer #footer-inner { }
                    body.info div.info-wrap #footer #footer-inner p {  }
                    body.info div.info-wrap #footer #footer-inner ul {  }
                        body.info div.info-wrap #footer #footer-inner ul li {  }
        </style>
    </head>
    <body <?php body_class('info'); ?>>
        <?php if (have_posts ()) : while (have_posts ()) : the_post(); ?>
        <div class="info-wrap">
             <div id="header">
                <h2 id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h2>
                <h2 id="tagline"><?php bloginfo('description'); ?></h2>
            </div>
            <div class="infoContent">
                <?php the_content(); ?>
            </div>
            <div id="footer">
                <div id="footer-inner">
                    <?php
                    if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) :
                        if (function_exists("wp_nav_menu"))
                            wp_nav_menu();
                    endif;
                    ?>
                </div>
            </div>
        </div>    
        <?php
            endwhile;
            endif;
        ?>
        <?php wp_footer(); ?>
        <script type="text/javascript">stLight.options({publisher: "ur-a74ed52b-20f4-6a11-7b18-f4212d85c5de", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
        <script>
            var options={ "publisher": "ur-a74ed52b-20f4-6a11-7b18-f4212d85c5de", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "googleplus", "linkedin", "reddit", "tumblr", "pinterest", "email", "sharethis"]}};
            var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
        </script>
    </body>
</html>
