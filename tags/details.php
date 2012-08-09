<?php

	/**
	 * Defines additional details that the user can view or hide
	 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera and Safari.
	 **/
	class Details extends EventAndGlobalAttributes {

		/**
		 * Tag 'details'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;details /&gt</code>,
		 *    <code>&lt;details&gt;</code>
		 *    <code>&lt;/details&gt;</code> and
		 *    <code>&lt;details&gt;&lt;/details&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;details&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/details&gt;</code> or
		 *    <code>&lt;details&gt;$value&lt;/details&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('details', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute open
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera and Safari.
		 * @param string $value value of the attribute in set {"open"
		 *        , ""}
		 * @return void
		 **/
		function setAttrOpen($value) {
			if (RendererConf::developing &&
					!in_array($value, array('open', ''))) {
				throw new Exception($this->attrExc('open', $value));
			} else {
				$this->setAttr('open', $value);
			}
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
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return void
		 **/
		function addText($text) {
			parent::addText($text);
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
