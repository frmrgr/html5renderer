<?php

	/**
	 * Defines a caption for a <figure> element
	 * Supported by all known browsers.
	 **/
	class Figcaption extends EventAndGlobalAttributes {

		/**
		 * Tag 'figcaption'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;figcaption /&gt</code>,
		 *    <code>&lt;figcaption&gt;</code>
		 *    <code>&lt;/figcaption&gt;</code> and
		 *    <code>&lt;figcaption&gt;&lt;/figcaption&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;figcaption&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/figcaption&gt;</code> or
		 *    <code>&lt;figcaption&gt;$value&lt;/figcaption&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('figcaption', in_array($type, array(1,2,3)) ?
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
