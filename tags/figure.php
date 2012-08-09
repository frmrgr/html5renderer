<?php

	/**
	 * Specifies self-contained content
	 * Supported by all known browsers.
	 **/
	class Figure extends EventAndGlobalAttributes {

		/**
		 * Tag 'figure'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;figure /&gt</code>,
		 *    <code>&lt;figure&gt;</code>
		 *    <code>&lt;/figure&gt;</code> and
		 *    <code>&lt;figure&gt;&lt;/figure&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;figure&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/figure&gt;</code> or
		 *    <code>&lt;figure&gt;$value&lt;/figure&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('figure', in_array($type, array(1,2,3)) ?
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
