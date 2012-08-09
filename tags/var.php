<?php

	/**
	 * Defines a variable
	 * Supported by all known browsers.
	 **/
	class Var_ extends EventAndGlobalAttributes {

		/**
		 * Tag 'var'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;var /&gt</code>,
		 *    <code>&lt;var&gt;</code>
		 *    <code>&lt;/var&gt;</code> and
		 *    <code>&lt;var&gt;&lt;/var&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;var&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/var&gt;</code> or
		 *    <code>&lt;var&gt;$value&lt;/var&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('var', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Adding a new inner tag
		 * @param type $tag The adding inner tag
		 * @return void
		 **/
		function addTag($tag) {
			$this->addLines($tag->getLines());
		}

		/**
		 * Output
		 * @return string Outputs the tag as a string
		 **/
		function __toString() {
			return parent::__toString();
		}
	}

?>
