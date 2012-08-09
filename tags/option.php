<?php

	/**
	 * Defines an option in a drop-down list
	 * Supported by all known browsers.
	 **/
	class Option extends EventAndGlobalAttributes {

		/**
		 * Tag 'option'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;option /&gt</code>,
		 *    <code>&lt;option&gt;</code>
		 *    <code>&lt;/option&gt;</code> and
		 *    <code>&lt;option&gt;&lt;/option&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;option&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/option&gt;</code> or
		 *    <code>&lt;option&gt;$value&lt;/option&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('option', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute disabled
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"disabled"
		 *        , ""}
		 * @return void
		 **/
		function setAttrDisabled($value) {
			if (RendererConf::developing &&
					!in_array($value, array('disabled', ''))) {
				throw new Exception($this->attrExc('disabled', $value));
			} else {
				$this->setAttr('disabled', $value);
			}
		}

		/**
		 * Attribute label
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrLabel($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('label', $value));
			} else {
				$this->setAttr('label', $value);
			}
		}

		/**
		 * Attribute selected
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"selected"
		 *        , ""}
		 * @return void
		 **/
		function setAttrSelected($value) {
			if (RendererConf::developing &&
					!in_array($value, array('selected', ''))) {
				throw new Exception($this->attrExc('selected', $value));
			} else {
				$this->setAttr('selected', $value);
			}
		}

		/**
		 * Attribute value
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrValue($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
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
