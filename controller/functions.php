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

	<meta name='viewport' content='width=device-width'>
	<link rel='icon' href='images/favicons/favicon.ico' type='image/x-icon'>

	<meta name='keywords' content='keywords, here'>
	<meta name='description' content='Description'>
	<meta name='author' content='Author'>
	<meta name='copyright' content='Copyright (c) 2012'>

	<title>Genesis: The Front-end Framework from LXII</title>

	<!-- Included CSS Files -->
	<link rel='stylesheet' href='public/css/style.less'>
	<link rel='stylesheet' href='libs/foundation/foundation.less'>
	<link rel='stylesheet' href='libs/foundation/normalize.css'>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script>
	<![endif]-->

	</head>
	";
};

function javascripts(){
	return "
	<script type='text/javascript' src='libs/foundation/less-1.3.3.min.js'></script>
	";
};