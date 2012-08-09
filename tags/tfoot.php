<?php

	/**
	 * Groups the footer content in a table
	 * Supported by all known browsers.
	 **/
	class Tfoot extends EventAndGlobalAttributes {

		/**
		 * Tag 'tfoot'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;tfoot /&gt</code>,
		 *    <code>&lt;tfoot&gt;</code>
		 *    <code>&lt;/tfoot&gt;</code> and
		 *    <code>&lt;tfoot&gt;&lt;/tfoot&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;tfoot&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/tfoot&gt;</code> or
		 *    <code>&lt;tfoot&gt;$value&lt;/tfoot&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('tfoot', in_array($type, array(1,2,3)) ?
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
