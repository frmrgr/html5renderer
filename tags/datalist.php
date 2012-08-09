<?php

	/**
	 * Specifies a list of pre-defined options for input controls
	 *  - Warning Not supported in Internet Explorer and Safari.
	 **/
	class Datalist extends EventAndGlobalAttributes {

		/**
		 * Tag 'datalist'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;datalist /&gt</code>,
		 *    <code>&lt;datalist&gt;</code>
		 *    <code>&lt;/datalist&gt;</code> and
		 *    <code>&lt;datalist&gt;&lt;/datalist&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;datalist&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/datalist&gt;</code> or
		 *    <code>&lt;datalist&gt;$value&lt;/datalist&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('datalist', in_array($type, array(1,2,3)) ?
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
