<?php

	/**
	 * Defines a multiline input control (text area)
	 * Supported by all known browsers.
	 **/
	class Textarea extends EventAndGlobalAttributes {

		/**
		 * Tag 'textarea'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;textarea /&gt</code>,
		 *    <code>&lt;textarea&gt;</code>
		 *    <code>&lt;/textarea&gt;</code> and
		 *    <code>&lt;textarea&gt;&lt;/textarea&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;textarea&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/textarea&gt;</code> or
		 *    <code>&lt;textarea&gt;$value&lt;/textarea&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('textarea', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute autofocus
		 *  - Warning Not supported in Internet Explorer.
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
		 * Attribute cols
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrCols($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('cols', $value));
			} else {
				$this->setAttr('cols', $value);
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
		 * Attribute maxlength
		 *  - Warning Not supported in Internet Explorer and Opera.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrMaxlength($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('maxlength', $value));
			} else {
				$this->setAttr('maxlength', $value);
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
		 * Attribute placeholder
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrPlaceholder($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('placeholder', $value));
			} else {
				$this->setAttr('placeholder', $value);
			}
		}

		/**
		 * Attribute readonly
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"readonly"
		 *        , ""}
		 * @return void
		 **/
		function setAttrReadonly($value) {
			if (RendererConf::developing &&
					!in_array($value, array('readonly', ''))) {
				throw new Exception($this->attrExc('readonly', $value));
			} else {
				$this->setAttr('readonly', $value);
			}
		}

		/**
		 * Attribute required
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"required"
		 *        , ""}
		 * @return void
		 **/
		function setAttrRequired($value) {
			if (RendererConf::developing &&
					!in_array($value, array('required', ''))) {
				throw new Exception($this->attrExc('required', $value));
			} else {
				$this->setAttr('required', $value);
			}
		}

		/**
		 * Attribute rows
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrRows($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('rows', $value));
			} else {
				$this->setAttr('rows', $value);
			}
		}

		/**
		 * Attribute wrap
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"hard"
		 *        , "soft"}
		 * @return void
		 **/
		function setAttrWrap($value) {
			if (RendererConf::developing &&
					!in_array($value, array('hard', 'soft'))) {
				throw new Exception($this->attrExc('wrap', $value));
			} else {
				$this->setAttr('wrap', $value);
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
