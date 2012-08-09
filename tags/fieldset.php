<?php

	/**
	 * Groups related elements in a form
	 * Supported by all known browsers.
	 **/
	class Fieldset extends EventAndGlobalAttributes {

		/**
		 * Tag 'fieldset'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;fieldset /&gt</code>,
		 *    <code>&lt;fieldset&gt;</code>
		 *    <code>&lt;/fieldset&gt;</code> and
		 *    <code>&lt;fieldset&gt;&lt;/fieldset&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;fieldset&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/fieldset&gt;</code> or
		 *    <code>&lt;fieldset&gt;$value&lt;/fieldset&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('fieldset', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute disabled
		 *  - Warning Not supported in Internet Explorer, Google Ghrome and Safari.
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
		 * Attribute form
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrForm($value) {
			if (RendererConf::developing &&
					!RendererValidators::isFormId($value)) {
				throw new Exception($this->attrExc('form', $value));
			} else {
				$this->setAttr('form', $value);
			}
		}

		/**
		 * Attribute name
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrName($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
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
