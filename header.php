<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screenxxxxxxx">

<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div id="page">
<div id="header">
	<div id="masthead">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div id="tagline"><?php bloginfo('description'); ?></div>
	</div>
	<?php
		# fetch all pages created in /wp-admin/edit-pages.php, ordered
		# manually. we'll iterate this a couple of times to create the nav
		$pages = get_pages('sort_column=menu_order');
		
		# i have no idea what this variable is for, but it seems to
		# contain a "1" for the home page, which is just what i need
		$home_klass = ($wp_query->is_home) ? ' class="active"' : '';
	?>
	<ul id="nav-tabs">
		<li<?php print $home_klass ?>><a href="<?php echo get_option('home'); ?>/">Home</a></li>
		
		<?php
			# list all top-level (parentless) pages
			# as tabs at the top of every page. the
			# "home" page is hard-coded first
			foreach ($pages as $p) {
				if ($p->post_parent == 0) {
					$klass = ($p->ID == $post->ID) ? ' class="active"' : '';
					print '<li'.$klass.'><a href="'.get_page_link($p->ID).'">'.$p->post_title.'</a>';
				}
			}
		?>
	</ul>
</div>
<div id="intro">
	<ul id="nav-links">
		<?php
			# list all sub-pages of the page we are
			# curently viewing as a row of links
			foreach ($pages as $p) {
				if ($p->post_parent == $post->ID) {
					print '<li><a href="' .get_page_link($p->ID). '">'.$p->post_title.'</a>';
				}
			}
		?>
	</ul>
</div>
