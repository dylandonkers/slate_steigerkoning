<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.xml");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "steigerkoning", 
		  "vijfhuizen 121 4708 AJ Roosendaal", 
		  "08002929927", 
		  "info@ladderensteigerkoning.nl");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
}


$args = array(
	'name'          => __( 'Filter area', 'theme_text_domain' ),
	'id'            => 'filter',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);


include_once('includes/antispam.php');

?>
