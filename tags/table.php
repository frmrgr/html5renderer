<?php

	/**
	 * Defines a table
	 * Supported by all known browsers.
	 **/
	class Table extends EventAndGlobalAttributes {

		/**
		 * Tag 'table'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;table /&gt</code>,
		 *    <code>&lt;table&gt;</code>
		 *    <code>&lt;/table&gt;</code> and
		 *    <code>&lt;table&gt;&lt;/table&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;table&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/table&gt;</code> or
		 *    <code>&lt;table&gt;$value&lt;/table&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('table', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute border
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {""""
		 *        , "1"}
		 * @return void
		 **/
		function setAttrBorder($value) {
			if (RendererConf::developing &&
					!in_array($value, array('""', '1'))) {
				throw new Exception($this->attrExc('border', $value));
			} else {
				$this->setAttr('border', $value);
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
