<?php

	/**
	 * Defines an alternate content for users that do not support client-side scripts
	 * Supported by all known browsers.
	 **/
	class Noscript extends EventAttributes {

		/**
		 * Tag 'noscript'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;noscript /&gt</code>,
		 *    <code>&lt;noscript&gt;</code>
		 *    <code>&lt;/noscript&gt;</code> and
		 *    <code>&lt;noscript&gt;&lt;/noscript&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;noscript&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/noscript&gt;</code> or
		 *    <code>&lt;noscript&gt;$value&lt;/noscript&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('noscript', in_array($type, array(1,2,3)) ?
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
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return void
		 **/
		function addText($text) {
			parent::addText($text);
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
