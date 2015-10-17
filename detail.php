<?php

// Include $shirts data array
include 'includes/data.php';

// Include template handler library
include 'includes/template.php';

// id is passed in as a GET param via the URL (?id=)
$id = $_GET['id'];

// select the relevant shirt from our data array
$shirt = $shirts[$id];

// set a page title for the header template to use
$page_title = $shirt['name'];

// create new instance of template handler for detail template
$tpl = new Template('detail');

// pass these variables to our template
$tpl->vars = array(
	'page_title' => $page_title,
	'shirt' => $shirt
);

// compile and print template
$tpl->render();

?>