<?php

	/**
	 * Defines important text
	 * Supported by all known browsers.
	 **/
	class Strong extends EventAndGlobalAttributes {

		/**
		 * Tag 'strong'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;strong /&gt</code>,
		 *    <code>&lt;strong&gt;</code>
		 *    <code>&lt;/strong&gt;</code> and
		 *    <code>&lt;strong&gt;&lt;/strong&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;strong&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/strong&gt;</code> or
		 *    <code>&lt;strong&gt;$value&lt;/strong&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('strong', in_array($type, array(1,2,3)) ?
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
