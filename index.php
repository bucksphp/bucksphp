<?php

// Include $shirts data array
include 'includes/data.php';

// include template handler
include 'includes/template.php';

// create new instance of template handler for index template
$tpl = new Template('index');

// pass $shirts variable to our template
$tpl->vars = array(
	'shirts' => $shirts
);

// compile and print template
$tpl->render();

?>