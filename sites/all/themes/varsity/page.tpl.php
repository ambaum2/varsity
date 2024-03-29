<?php

/**
 * @file
 * Varsity's theme implementation to display a single Drupal page.
 * Obviously cloned off of bartik
 * 
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 * jQuery('body').before("<div style='color:white;font-size:18px;position:absolute;'>Your Screen Height: " + height + "px & Width: " + width + "px</div>");
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<?php if($is_front) : ?>
<div id="frontpageContainer">
	<a href="About-Us"><div id="frontpageMasthead"></div></a><!--make the theatre jpg seperate from the menue background jpg. Create a taxonomy for nav links
		with an image field then create another div that goes up against the masthead and prints out oru taxonomy-->
	<div id="NavigationMenuInside"><?php print render($page['main_menu_taxonomy']); ?></div>
<?php else : ?>
<div id="inside_container">
	<div id="left_banner">
		<!--[if lte IE 7]><a class="dwg_hidden_login" style="position:absolute;" href="user"></a><![endif]-->
		<!--[if gte IE 7]><a class="dwg_hidden_login"  href="user"></a><![endif]-->
		<![if !IE]><a class="dwg_hidden_login" href="user"></a><![endif]></div>
	<div id="inside_content">
		<a href="<?php print $base_path ?>"><div id="header"></div></a>
		<div id="NavigationMenuInside">
		      <div id="main-menu" class="navigation">
		        <?php print render($page['main_menu_taxonomy']); ?>
		      </div> <!-- /#main-menu -->
		</div>
		<?php if ($page['content']) : ?>
		<div id="content_middle">
			  
			  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
				<div class="scroll-bar"></div>
			    <?php if ($breadcrumb): ?>
			      <div id="breadcrumb"><?php //print $breadcrumb; //not sure yet if they want it ?></div>
			    <?php endif; ?>
	
			    <div id="content" class="column"><div class="section">
			      <a id="main-content"></a>
			      <?php print render($title_prefix); ?>
			      <?php if ($title && (arg(0) != "node")): //let node page tpls determine title layout ?>
			        <h1 class="title" id="page-title">
			          <?php print $title; ?>
			        </h1>
			      <?php endif; ?>
			      <div id="content_right_image"><?php print render($page['content_right_image'])?></div>
			      <?php print render($title_suffix); ?>
			      <?php if ($tabs): ?>
			        <div class="tabs">
			          <?php print render($tabs); ?>
			        </div>
			      <?php endif; ?>
			      <?php print render($page['help']); ?>
			      <?php if ($action_links): ?>
			        <ul class="action-links">
			          <?php print render($action_links); ?>
			        </ul>
			      <?php endif; ?>
			      <?php print render($page['content']); ?>
			      <?php print $feed_icons; ?>
	
	    		</div></div> <!-- /.section, /#content -->
	    	</div>
	   		</div>
		</div>
		<div id="content_footer">
			<div id="footer_left_content"><?php print render($page['footer_tagline_image']) ?></div>
			<div id="footer_right_content"><?php print render($page['footer_right_image']) ?></div>
		</div>
		<div id="footer_nav">
			<!--footer navigation links if needed here (login for sure) -->
			<?php print render($page['footer_varsity']) ?>
		</div>
	</div>
<?php endif; ?>
<!-- right now no content should show up on frontpage except main menu if that changes just put the content snippet here -->
</div> <!--end page container -->
<?php endif; ?>
