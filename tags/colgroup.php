<?php

	/**
	 * Specifies a group of one or more columns in a table for formatting
	 * Supported by all known browsers.
	 **/
	class Colgroup extends EventAndGlobalAttributes {

		/**
		 * Tag 'colgroup'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;colgroup /&gt</code>,
		 *    <code>&lt;colgroup&gt;</code>
		 *    <code>&lt;/colgroup&gt;</code> and
		 *    <code>&lt;colgroup&gt;&lt;/colgroup&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;colgroup&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/colgroup&gt;</code> or
		 *    <code>&lt;colgroup&gt;$value&lt;/colgroup&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('colgroup', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute span
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrSpan($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('span', $value));
			} else {
				$this->setAttr('span', $value);
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
		 * Output
		 * @return string Outputs the tag as a string
		 **/
		function __toString() {
			return parent::__toString();
		}
	}

?>
