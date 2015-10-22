<?php

// include template library
require 'includes/template.php';

$tpl = new Template('about');
$tpl->vars = array(
  'page_title' => 'About Us'
);
$tpl->render();

?>