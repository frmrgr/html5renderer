<?php

	/**
	 * Groups the body content in a table
	 * Supported by all known browsers.
	 **/
	class Tbody extends EventAndGlobalAttributes {

		/**
		 * Tag 'tbody'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;tbody /&gt</code>,
		 *    <code>&lt;tbody&gt;</code>
		 *    <code>&lt;/tbody&gt;</code> and
		 *    <code>&lt;tbody&gt;&lt;/tbody&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;tbody&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/tbody&gt;</code> or
		 *    <code>&lt;tbody&gt;$value&lt;/tbody&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('tbody', in_array($type, array(1,2,3)) ?
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
