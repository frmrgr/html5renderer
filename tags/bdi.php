<?php

	/**
	 * Isolates a part of text that might be formatted in a different direction from other text outside it
	 *  - Warning Not supported in Internet Explorer, Opera and Safari.
	 **/
	class Bdi extends EventAndGlobalAttributes {

		/**
		 * Tag 'bdi'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;bdi /&gt</code>,
		 *    <code>&lt;bdi&gt;</code>
		 *    <code>&lt;/bdi&gt;</code> and
		 *    <code>&lt;bdi&gt;&lt;/bdi&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;bdi&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/bdi&gt;</code> or
		 *    <code>&lt;bdi&gt;$value&lt;/bdi&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('bdi', in_array($type, array(1,2,3)) ?
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
