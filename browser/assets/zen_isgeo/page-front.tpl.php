<?php
// $Id: page.tpl.php,v 1.14.2.6 2009/02/13 16:28:33 johnalbin Exp $

/**
 * @file page.tpl.php
 *
 * Theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the theme is located in, e.g. themes/garland or
 *   themes/garland/minelli.
 * - $is_front: TRUE if the current page is the front page. Used to toggle the mission statement.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags
 *   indicating the current layout (multiple columns, single column), the current
 *   path, whether the user is logged in, and so on.
 * - $body_classes_array: An array of the body classes. This is easier to
 *   manipulate then the string in $body_classes.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been disabled.
 * - $primary_links (array): An array containing primary navigation links for the
 *   site, if they have been configured.
 * - $secondary_links (array): An array containing secondary navigation links for
 *   the site, if they have been configured.
 *
 * Page content (in order of occurrance in the default page.tpl.php):
 * - $left: The HTML for the left sidebar.
 *
 * - $breadcrumb: The breadcrumb trail for the current page.
 * - $title: The page title, for use in the actual HTML content.
 * - $help: Dynamic help text, mostly for admin pages.
 * - $messages: HTML for status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the view
 *   and edit tabs when displaying a node).
 *
 * - $content: The main content of the current Drupal page.
 *
 * - $right: The HTML for the right sidebar.
 *
 * Footer/closing data:
 * - $feed_icons: A string of all feed icons for the current page.
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

    <head>
        <title><?php print $head_title; ?></title>
        <?php print $head; ?>
        <?php print $styles; ?>
        <?php print $scripts; ?>
        <link href="<?php print $res.'page-front.css' ?>" rel="stylesheet" type="text/css"/>
        <meta name="google-site-verification" content="rdPHiZOION6yht4SW9gctuANidIP8VezOmbh8cFUzp0" />
        <meta name='yandex-verification' content='6ff36f93f279f2c1' />
    </head>
    <body class="<?php print $body_classes; ?>">
        <div class="page" align="center">
            <div id="main_tematic">
                <div id="page_firstp" style="background-image: url(<?php echo $res ?>page_firstp.png);">
                    <div id="content_frontp">
                        <div id="panel_top">
                            <?php if ($panel_top_left): ?>
                            <div id="panel_top_left">
                                <?php print $panel_top_left; ?>
                            </div>
                            <?php endif; ?>
                            <?php if ($panel_top_right): ?>
                            <div id="panel_top_right">
                                <?php print $panel_top_right; ?>
                            </div>
                            <?php endif; ?>
                            <div class="clear"></div>
                        </div>

                        <?php if ($navbar): ?>
                        <div id="navbar">
                            <?php print $navbar; ?>
                        </div><!-- #navbar -->
                        <?php endif; ?>


                        <div id="middle">
                            <div id="middle_left">
                                <div class="banner_01_02"><img src="<?php echo $res ?>banner_01.png"/>
                                </div>
                                <?php if ($middle_left_top): ?>
                                <div id="middle_left_top">
                                    <?php print $middle_left_top; ?>
                                </div>
                                <?php endif; ?>

                                <?php if ($middle_left_center): ?>
                                <div class="banner_06_07"><img src="<?php echo $res ?>banner_06.png"/>
                                </div>
                                <div id="middle_left_center">
                                    <?php print $middle_left_center; ?>
                                </div>
                                <?php endif; ?>
                                <div class="banner_05_08"><img src="<?php echo $res ?>banner_05.png"/>
                                </div>
                                <?php if ($middle_left_bottom): ?>
                                <div id="middle_left_bottom">
                                    <?php print $middle_left_bottom; ?>
                                </div>
                                <?php endif; ?>
                            </div>

                            <div id="middle_center">
                                <div class="banner_01_02"><img src="<?php echo $res ?>banner_02.png"/>
                                </div>
                                <?php if ($middle_center_top): ?>
                                <div id="middle_center_top">
                                    <?php print $middle_center_top; ?>
                                </div>
                                <?php endif; ?>
                                <div class="banner_06_07"><img src="<?php echo $res ?>banner_07.png"/>
                                </div>
                                <?php if ($middle_center_center): ?>

                                <div id="middle_center_center">
                                    <?php print $middle_center_center; ?>
                                </div>
                                <?php endif; ?>
                                <div class="banner_05_08"><img src="<?php echo $res ?>banner_08.png"/>
                                </div>
                                <?php if ($middle_center_bottom): ?>
                                <div id="middle_center_bottom">
                                    <?php print $middle_center_bottom; ?>
                                </div>
                                <?php endif; ?>
                            </div>

                            <div id="middle_right">
                                <?php include("page-front.right-banner.".$lang.".tpl.php"); ?>
                            </div>
                        </div> <!-- /middle -->
                        <div class="clear"></div>

                    </div>
                </div> <!-- /page_firstp -->
                <div class="clear"></div>
            </div>
        </div>
    </body>
</html>
