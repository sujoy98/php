<?php
// create a server array(associative)
$server = [
	'Host Server Name' => $_SERVER['SERVER_NAME'],
	'Host Header'      => $_SERVER['HTTP_SERVER'],
	'Server Software'  => $_SERVER['SERVER_SOFTWARE'],
	'Document Root'    => $_SERVER['DOCUMENT_ROOT'],
	'Current Page'     => $_SERVER['PHP_SELF'],
	'Script Name'      => $_SERVER['SCRIPT_NAME'],
	'Absolute path'    => $_SERVER['SCRIPT_FILENAME']
];
//print_r($server);
$client = [
	'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
	'Client Ip'          => $_SERVER['REMOTE_ADDR'],
	'Remote Port'        => $_SERVER['REMOTE_PORT']
];
//print_r($client);
?>
