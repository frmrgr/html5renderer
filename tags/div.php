<?php

	/**
	 * Defines a section in a document
	 * Supported by all known browsers.
	 **/
	class Div extends EventAndGlobalAttributes {

		/**
		 * Tag 'div'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;div /&gt</code>,
		 *    <code>&lt;div&gt;</code>
		 *    <code>&lt;/div&gt;</code> and
		 *    <code>&lt;div&gt;&lt;/div&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;div&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/div&gt;</code> or
		 *    <code>&lt;div&gt;$value&lt;/div&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('div', in_array($type, array(1,2,3)) ?
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
