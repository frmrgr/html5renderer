<?php

	/**
	 * Defines an unordered list
	 * Supported by all known browsers.
	 **/
	class Ul extends EventAndGlobalAttributes {

		/**
		 * Tag 'ul'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;ul /&gt</code>,
		 *    <code>&lt;ul&gt;</code>
		 *    <code>&lt;/ul&gt;</code> and
		 *    <code>&lt;ul&gt;&lt;/ul&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;ul&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/ul&gt;</code> or
		 *    <code>&lt;ul&gt;$value&lt;/ul&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('ul', in_array($type, array(1,2,3)) ?
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
		 * Output
		 * @return string Outputs the tag as a string
		 **/
		function __toString() {
			return parent::__toString();
		}
	}

?>
