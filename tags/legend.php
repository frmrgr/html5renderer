<?php

	/**
	 * Defines a caption for a <fieldset>, <figure>, or <details> element
	 * Supported by all known browsers.
	 **/
	class Legend extends EventAndGlobalAttributes {

		/**
		 * Tag 'legend'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;legend /&gt</code>,
		 *    <code>&lt;legend&gt;</code>
		 *    <code>&lt;/legend&gt;</code> and
		 *    <code>&lt;legend&gt;&lt;/legend&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;legend&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/legend&gt;</code> or
		 *    <code>&lt;legend&gt;$value&lt;/legend&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('legend', in_array($type, array(1,2,3)) ?
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
