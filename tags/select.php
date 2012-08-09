<?php

	/**
	 * Defines a drop-down list
	 * Supported by all known browsers.
	 **/
	class Select extends EventAndGlobalAttributes {

		/**
		 * Tag 'select'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;select /&gt</code>,
		 *    <code>&lt;select&gt;</code>
		 *    <code>&lt;/select&gt;</code> and
		 *    <code>&lt;select&gt;&lt;/select&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;select&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/select&gt;</code> or
		 *    <code>&lt;select&gt;$value&lt;/select&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('select', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute autofocus
		 *  - Warning Not supported in Internet Explorer and Mozilla Firefox.
		 * @param string $value value of the attribute in set {"autofocus"
		 *        , ""}
		 * @return void
		 **/
		function setAttrAutofocus($value) {
			if (RendererConf::developing &&
					!in_array($value, array('autofocus', ''))) {
				throw new Exception($this->attrExc('autofocus', $value));
			} else {
				$this->setAttr('autofocus', $value);
			}
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
		 * Attribute form
		 *  - Warning Not supported in Internet Explorer.
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
		 * Attribute multiple
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"multiple"
		 *        , ""}
		 * @return void
		 **/
		function setAttrMultiple($value) {
			if (RendererConf::developing &&
					!in_array($value, array('multiple', ''))) {
				throw new Exception($this->attrExc('multiple', $value));
			} else {
				$this->setAttr('multiple', $value);
			}
		}

		/**
		 * Attribute name
		 * Supported by all known browsers.
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
		 * Attribute size
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrSize($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('size', $value));
			} else {
				$this->setAttr('size', $value);
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
