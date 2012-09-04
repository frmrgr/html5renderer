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
		 * @param string $value value of the attribute in set {"""",
		 *        "1" }
		 * @return Table
		 **/
		function setAttrBorder($value) {
			if (H5R_DEV &&
					!in_array($value, array('""', '1'))) {
				throw new Exception($this->attrExc('border', $value));
			} else {
				$this->setAttr('border', $value);
			}
			return $this;
		}

		/**
		 * Adding a new inner tag
		 * @param tag $tag The adding inner tag
		 * @param string $condition around the $tag with the $condition
		 *    '<!--[if '.$condition.']>'..'<![endif]-->'
		 *    if $condition != '', default is ''
		 * @param int $conditionType type of conditional (default=1):
		 *   <code>0</code> - '<![if '.$condition.']>' html '<![endif]>'
		 *   <code>1</code> - '<!--[if '.$condition.']>' html '<![endif]-->'
		 *   <code>2</code> - '<!--[if '.$condition.']>-->' html '<!--<![endif]-->'
		 *   <code>3</code> - '<!--[if '.$condition.']><!-->' html '<!--<![endif]-->'
		 * @return Table
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
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
