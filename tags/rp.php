<?php

	/**
	 * Defines what to show in browsers that do not support ruby annotations
	 * Supported by all known browsers.
	 **/
	class Rp extends EventAndGlobalAttributes {

		/**
		 * Tag 'rp'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;rp /&gt</code>,
		 *    <code>&lt;rp&gt;</code>
		 *    <code>&lt;/rp&gt;</code> and
		 *    <code>&lt;rp&gt;&lt;/rp&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;rp&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/rp&gt;</code> or
		 *    <code>&lt;rp&gt;$value&lt;/rp&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('rp', in_array($type, array(1,2,3)) ?
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
