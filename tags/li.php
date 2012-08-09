<?php

	/**
	 * Defines a list item
	 * Supported by all known browsers.
	 **/
	class Li extends EventAndGlobalAttributes {

		/**
		 * Tag 'li'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;li /&gt</code>,
		 *    <code>&lt;li&gt;</code>
		 *    <code>&lt;/li&gt;</code> and
		 *    <code>&lt;li&gt;&lt;/li&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;li&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/li&gt;</code> or
		 *    <code>&lt;li&gt;$value&lt;/li&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('li', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute value
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrValue($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('value', $value));
			} else {
				$this->setAttr('value', $value);
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
