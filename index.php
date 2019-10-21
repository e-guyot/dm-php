<?php

$requestedPage = '/';
$serverRequest = $_SERVER['REQUESTED_URI'];

if (isset($serverRequest)) {
	$requestedPage = explode('?', $serverRequest);
}

switch ($requestedPage[0]) {
	case '/commentaire':
		include_once(__DIR__.'/Controller/index.php');
		break;
	
	default:
		include_once(__DIR__.'/Views/404.php');
		break;
}