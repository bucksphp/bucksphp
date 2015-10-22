<?php

// include template library
require 'includes/template.php';

$result = null;

// if form was submitted, build and send email
if ( isset($_POST['message']) ) {
	$to = 'bucksphp@gmail.com';
	$subject = 'Cattitude84 Contact Form';
	$body = $_POST['message'];
	$headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">";
	
	// I assure you, this usually works
	$result = mail($to, $subject, $body);
}

// set page title for header template to use
$page_title = "Contact Us";

// render contact template
$tpl = new Template('contact');
$tpl->vars = array(
	'page_title' => $page_title,
	'result' => $result
);
$tpl->render();

?>