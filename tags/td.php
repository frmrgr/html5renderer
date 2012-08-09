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
		 * @return void
		 **/
		function setAttrColspan($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('colspan', $value));
			} else {
				$this->setAttr('colspan', $value);
			}
		}

		/**
		 * Attribute headers
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrHeaders($value) {
			if (RendererConf::developing &&
					!RendererValidators::isHeaderId($value)) {
				throw new Exception($this->attrExc('headers', $value));
			} else {
				$this->setAttr('headers', $value);
			}
		}

		/**
		 * Attribute rowspan
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrRowspan($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('rowspan', $value));
			} else {
				$this->setAttr('rowspan', $value);
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
