<?php

/**
 * Template handler library
 *
 **/
class Template {
	// this array will hold all variables we pass to our templates
	public $vars = array();

	// the base name of our template file
	public $template;

	// the layout file our template will be wrapped in
	public $layout = 'default';

	// the absolute path to our templates directory
	public $templateDir;

	// initialize Template instance
	public function __construct($template) {
		// set template file
		$this->template = $template;

		// build path to template directory
		$this->templateDir = realpath(dirname(__FILE__)) . '/../templates/';
	}

	// compile and print template
	public function render() {
		// extract variables into function scope
		extract($this->vars);

		// turn on output buffering
		ob_start();

		// include template file
		require $this->templateDir . $this->template . '.tpl.php';

		// store buffer contents and stop buffering
		$page_content = ob_get_contents();
		ob_end_clean();

		// a layout template is specified, render it
		if ( $this->layout ) {
			require $this->templateDir . 'layouts/' . $this->layout . '.tpl.php';
		}
		// if no layout is specified, just print the page content
		else {
			echo $page_content;
		}
	}
}

?>