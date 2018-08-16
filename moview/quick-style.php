<?php
header('Content-type: text/css');

$parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
$wp_load = $parse_uri[0].'wp-load.php';
require_once($wp_load);


$output = '';

$headerbg = moview_options('header-bg');
if(isset($headerbg)){
	$output .= '.header{ background: '.esc_attr(moview_options('header-bg')) .'; }';
}


if (moview_options('header-fixed')){

	if(isset($headerbg)){
		$output .= '#masthead.sticky{ background-color: rgba(255,255,255,.97); }';
	}
	$output .= 'header.sticky{ position:fixed;top:0; z-index:99;margin:0 auto 30px; width:100%;box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.22);}';
	$output .= 'header.sticky #header-container{ padding:0;transition: padding 200ms linear; -webkit-transition:padding 200ms linear;}';
	$output .= 'header.sticky .navbar.navbar-default{ background: rgba(255,255,255,.95); border-bottom:1px solid #f5f5f5}';
}


if( moview_options('header-padding-top') ){
	$output .= '.site-header{ padding-top: '. (int) esc_attr( moview_options('header-padding-top')) .'px; }';
}

if(moview_options('header-height')){
	$output .= '.site-header{ min-height: '. (int) esc_attr(moview_options('header-height')) .'px; }';
}

if(moview_options('header-padding-bottom')){
	$output .= '.site-header{ padding-bottom: '. (int) esc_attr( moview_options('header-padding-bottom') ) .'px; }';
}

if(moview_options('footer-bg')){
	$output .= '#footer{ background: '.esc_attr(moview_options('footer-bg')) .'; }';
}

if (moview_options('comingsoon-en')) {
	$output .= "body {
		background: #fff;
		display: table;
		width: 100%;
		height: 100%;
		min-height: 100%;
	}";
}


if ( moview_options('errorbg') ) {
	$output .= "body.error404,BODY.page-template-404{
	    width: 100%;
	    height: 100%;
	    min-height: 100%;
	    background: url(./images/404-bg.png);
	    background-size: cover;
	}";
}

echo $output;