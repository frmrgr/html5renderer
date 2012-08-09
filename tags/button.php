<?php

	/**
	 * Defines a clickable button
	 * Supported by all known browsers.
	 **/
	class Button extends EventAndGlobalAttributes {

		/**
		 * Tag 'button'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;button /&gt</code>,
		 *    <code>&lt;button&gt;</code>
		 *    <code>&lt;/button&gt;</code> and
		 *    <code>&lt;button&gt;&lt;/button&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;button&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/button&gt;</code> or
		 *    <code>&lt;button&gt;$value&lt;/button&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('button', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute autofocus
		 *  - Warning Not supported in Internet Explorer and Opera.
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
		 * Attribute formaction
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrFormaction($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('formaction', $value));
			} else {
				$this->setAttr('formaction', $value);
			}
		}

		/**
		 * Attribute formenctype
		 *  - Warning Not supported in Internet Explorer, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"application/x-www-form-urlencoded"
		 *        , "multipart/form-data", "text/plain"}
		 * @return void
		 **/
		function setAttrFormenctype($value) {
			if (RendererConf::developing &&
					!in_array($value, array('application/x-www-form-urlencoded', 'multipart/form-data'
							, 'text/plain'))) {
				throw new Exception($this->attrExc('formenctype', $value));
			} else {
				$this->setAttr('formenctype', $value);
			}
		}

		/**
		 * Attribute formmethod
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"get"
		 *        , "post"}
		 * @return void
		 **/
		function setAttrFormmethod($value) {
			if (RendererConf::developing &&
					!in_array($value, array('get', 'post'))) {
				throw new Exception($this->attrExc('formmethod', $value));
			} else {
				$this->setAttr('formmethod', $value);
			}
		}

		/**
		 * Attribute formnovalidate
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"formnovalidate"
		 *        , ""}
		 * @return void
		 **/
		function setAttrFormnovalidate($value) {
			if (RendererConf::developing &&
					!in_array($value, array('formnovalidate', ''))) {
				throw new Exception($this->attrExc('formnovalidate', $value));
			} else {
				$this->setAttr('formnovalidate', $value);
			}
		}

		/**
		 * Attribute formtarget
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"_blank"
		 *        , "_self", "_parent", "_top", "framename"
		 *        }
		 * @return void
		 **/
		function setAttrFormtarget($value) {
			if (RendererConf::developing &&
					!in_array($value, array('_blank', '_self'
							, '_parent', '_top', 'framename'))) {
				throw new Exception($this->attrExc('formtarget', $value));
			} else {
				$this->setAttr('formtarget', $value);
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
					!RendererValidators::isName($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
			}
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"button"
		 *        , "reset", "submit "}
		 * @return void
		 **/
		function setAttrType($value) {
			if (RendererConf::developing &&
					!in_array($value, array('button', 'reset'
							, 'submit '))) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
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
