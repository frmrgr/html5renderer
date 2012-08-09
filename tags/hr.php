<?php

	/**
	 * Defines a thematic change in the content
	 * Supported by all known browsers.
	 **/
	class Hr extends EventAndGlobalAttributes {

		/**
		 * Tag 'hr'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;hr /&gt</code>,
		 *    <code>&lt;hr&gt;</code>
		 *    <code>&lt;/hr&gt;</code> and
		 *    <code>&lt;hr&gt;&lt;/hr&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;hr&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/hr&gt;</code> or
		 *    <code>&lt;hr&gt;$value&lt;/hr&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('hr', in_array($type, array(1,2,3)) ?
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
