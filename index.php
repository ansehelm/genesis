<?php
require 'config.php';
require 'controller/functions.php';

$key = (isset($_GET["key"]) ? $_GET["key"] : false);

// Retrieve Data from DB

	$samples  = Samples::all();

	$data     = array(
	
	'key'     => $key,
	'samples' => $samples
	);

switch ($key) {

	default:
	$view='index';
	break;

}

view($view, $data);
