<?php

	/**
	 * Defines a header for a document or section
	 * Supported by all known browsers.
	 **/
	class Header extends EventAndGlobalAttributes {

		/**
		 * Tag 'header'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;header /&gt</code>,
		 *    <code>&lt;header&gt;</code>
		 *    <code>&lt;/header&gt;</code> and
		 *    <code>&lt;header&gt;&lt;/header&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;header&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/header&gt;</code> or
		 *    <code>&lt;header&gt;$value&lt;/header&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('header', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
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
