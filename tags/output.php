<?php

	/**
	 * Defines the result of a calculation
	 *  - Warning Not supported in Internet Explorer.
	 **/
	class Output extends EventAndGlobalAttributes {

		/**
		 * Tag 'output'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;output /&gt</code>,
		 *    <code>&lt;output&gt;</code>
		 *    <code>&lt;/output&gt;</code> and
		 *    <code>&lt;output&gt;&lt;/output&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;output&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/output&gt;</code> or
		 *    <code>&lt;output&gt;$value&lt;/output&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('output', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute for
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrFor($value) {
			if (RendererConf::developing &&
					!RendererValidators::isElementId($value)) {
				throw new Exception($this->attrExc('for', $value));
			} else {
				$this->setAttr('for', $value);
			}
		}

		/**
		 * Attribute form
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
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
					!RendererValidators::isName($value)) {
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
		 * Output
		 * @return string Outputs the tag as a string
		 **/
		function __toString() {
			return parent::__toString();
		}
	}

?>
