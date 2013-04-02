<?php

function view($path, $data = null) 
{
	if ( $data ) {
		extract($data);
	}

	$path .= '.view.php';

	include "views/layout.php";
};

function head(){
	return "
	<head>
	<meta charset='utf-8'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
	<link rel='icon' href='images/favicons/favicon.ico' type='image/x-icon'>

	<meta name='keywords' content='keywords, here'>
	<meta name='description' content='Description'>
	<meta name='author' content='Author'>
	<meta name='copyright' content='Copyright (c) 2012'>

	<title>Genesis: The Front-end Framework from LXII</title>

	<!-- Included CSS Files -->
	<link rel='stylesheet/less' href='public/css/style.less'>
	<link rel='stylesheet/less' href='libs/user/base.less'>
	<link rel='stylesheet/less' href='libs/font-icon/less/font-awesome.less'>
	<link rel='stylesheet/less' href='libs/font-icon/less/font-awesome-ie7.less'>
	<link rel='stylesheet/less' href='libs/foundation/foundation.less'>
	<link rel='stylesheet' href='libs/foundation/normalize.css'>


	<!-- Responsive Slides -->
	<link rel='stylesheet' href='libs/r-slides/responsiveslides.css'>


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script>
	<![endif]-->

	</head>
	";
};

function javascripts(){
	return "
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
	<script type='text/javascript' src='libs/foundation/less-1.3.3.min.js'></script>

	<!-- Responsive Slides -->
	<script type='text/javascript' src='libs/r-slides/responsiveslides.min.js'></script>
	<script>
	$(window).load(function() {

		$('#slider2').responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			maxwidth: 1000,
			namespace: 'transparent-btns'
		});

});
</script>
";
};