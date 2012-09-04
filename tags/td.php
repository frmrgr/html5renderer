<?php

	/**
	 * Defines a cell in a table
	 * Supported by all known browsers.
	 **/
	class Td extends EventAndGlobalAttributes {

		/**
		 * Tag 'td'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;td /&gt</code>,
		 *    <code>&lt;td&gt;</code>
		 *    <code>&lt;/td&gt;</code> and
		 *    <code>&lt;td&gt;&lt;/td&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;td&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/td&gt;</code> or
		 *    <code>&lt;td&gt;$value&lt;/td&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('td', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute colspan
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Td
		 **/
		function setAttrColspan($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('colspan', $value));
			} else {
				$this->setAttr('colspan', $value);
			}
			return $this;
		}

		/**
		 * Attribute headers
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Td
		 **/
		function setAttrHeaders($value) {
			if (H5R_DEV &&
					!RendererValidators::isHeaderId($value)) {
				throw new Exception($this->attrExc('headers', $value));
			} else {
				$this->setAttr('headers', $value);
			}
			return $this;
		}

		/**
		 * Attribute rowspan
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Td
		 **/
		function setAttrRowspan($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('rowspan', $value));
			} else {
				$this->setAttr('rowspan', $value);
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
		 * @return Td
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return Td
		 **/
		function addText($text) {
			parent::addText($text);
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
