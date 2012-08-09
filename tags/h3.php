<?php

	/**
	 * Defines HTML headings
	 * Supported by all known browsers.
	 **/
	class H3 extends EventAndGlobalAttributes {

		/**
		 * Tag 'h3'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h3 /&gt</code>,
		 *    <code>&lt;h3&gt;</code>
		 *    <code>&lt;/h3&gt;</code> and
		 *    <code>&lt;h3&gt;&lt;/h3&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h3&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h3&gt;</code> or
		 *    <code>&lt;h3&gt;$value&lt;/h3&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('h3', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
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
