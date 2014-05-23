<?php

class Plugin_killwhite extends Plugin {

	var $meta = array(
		'name'       => 'Leading and trailing whitespace remover',
		'version'    => '0.9',
		'author'     => 'Matt Stein',
		'author_url' => 'http://workingconcept.com'
	);

	function index()
	{
		$content = Parse::contextualTemplate($this->content, array(), $this->context);
		return trim(preg_replace('/\s+/', ' ',$content), " \t\n");
	}

}