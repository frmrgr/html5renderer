<?php

	/**
	 * Defines HTML headings
	 * Supported by all known browsers.
	 **/
	class H4 extends EventAndGlobalAttributes {

		/**
		 * Tag 'h4'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h4 /&gt</code>,
		 *    <code>&lt;h4&gt;</code>
		 *    <code>&lt;/h4&gt;</code> and
		 *    <code>&lt;h4&gt;&lt;/h4&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h4&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h4&gt;</code> or
		 *    <code>&lt;h4&gt;$value&lt;/h4&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('h4', in_array($type, array(1,2,3)) ?
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