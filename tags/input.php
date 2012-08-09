<?php

	/**
	 * Defines an input control
	 * Supported by all known browsers.
	 **/
	class Input extends EventAndGlobalAttributes {

		/**
		 * Tag 'input'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;input /&gt</code>,
		 *    <code>&lt;input&gt;</code>
		 *    <code>&lt;/input&gt;</code> and
		 *    <code>&lt;input&gt;&lt;/input&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;input&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/input&gt;</code> or
		 *    <code>&lt;input&gt;$value&lt;/input&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('input', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute accept
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"audio/*"
		 *        , "video/*", "image/*", "MIME_type"}
		 * @return void
		 **/
		function setAttrAccept($value) {
			if (RendererConf::developing &&
					!in_array($value, array('audio/*', 'video/*'
							, 'image/*', 'MIME_type'))) {
				throw new Exception($this->attrExc('accept', $value));
			} else {
				$this->setAttr('accept', $value);
			}
		}

		/**
		 * Attribute alt
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrAlt($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('alt', $value));
			} else {
				$this->setAttr('alt', $value);
			}
		}

		/**
		 * Attribute autocomplete
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"on"
		 *        , "off"}
		 * @return void
		 **/
		function setAttrAutocomplete($value) {
			if (RendererConf::developing &&
					!in_array($value, array('on', 'off'))) {
				throw new Exception($this->attrExc('autocomplete', $value));
			} else {
				$this->setAttr('autocomplete', $value);
			}
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
		 * Attribute checked
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"checked"
		 *        , ""}
		 * @return void
		 **/
		function setAttrChecked($value) {
			if (RendererConf::developing &&
					!in_array($value, array('checked', ''))) {
				throw new Exception($this->attrExc('checked', $value));
			} else {
				$this->setAttr('checked', $value);
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
		 *  - Warning Not supported in Internet Explorer.
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
		 * Attribute height
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrHeight($value) {
			if (RendererConf::developing &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('height', $value));
			} else {
				$this->setAttr('height', $value);
			}
		}

		/**
		 * Attribute list
		 *  - Warning Not supported in Internet Explorer, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrList($value) {
			if (RendererConf::developing &&
					!RendererValidators::isDatalistId($value)) {
				throw new Exception($this->attrExc('list', $value));
			} else {
				$this->setAttr('list', $value);
			}
		}

		/**
		 * Attribute max
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute in set {"number"
		 *        , "date"}
		 * @return void
		 **/
		function setAttrMax($value) {
			if (RendererConf::developing &&
					!in_array($value, array('number', 'date'))) {
				throw new Exception($this->attrExc('max', $value));
			} else {
				$this->setAttr('max', $value);
			}
		}

		/**
		 * Attribute maxlength
		 * Supported by all known browsers.
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
		 * Attribute min
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute in set {"number"
		 *        , "date"}
		 * @return void
		 **/
		function setAttrMin($value) {
			if (RendererConf::developing &&
					!in_array($value, array('number', 'date'))) {
				throw new Exception($this->attrExc('min', $value));
			} else {
				$this->setAttr('min', $value);
			}
		}

		/**
		 * Attribute multiple
		 *  - Warning Not supported in Internet Explorer.
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
		 * Attribute pattern
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrPattern($value) {
			if (RendererConf::developing &&
					!RendererValidators::isRegexp($value)) {
				throw new Exception($this->attrExc('pattern', $value));
			} else {
				$this->setAttr('pattern', $value);
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
		 * Attribute src
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrSrc($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('src', $value));
			} else {
				$this->setAttr('src', $value);
			}
		}

		/**
		 * Attribute step
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrStep($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('step', $value));
			} else {
				$this->setAttr('step', $value);
			}
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"button"
		 *        , "checkbox", "color", "date", "datetime"
		 *        , "datetime-local", "email", "file", "hidden"
		 *        , "image", "month", "number", "password"
		 *        , "radio", "range", "reset", "search"
		 *        , "submit", "tel", "text", "time"
		 *        , "url", "week"}
		 * @return void
		 **/
		function setAttrType($value) {
			if (RendererConf::developing &&
					!in_array($value, array('button', 'checkbox'
							, 'color', 'date', 'datetime', 'datetime-local'
							, 'email', 'file', 'hidden', 'image'
							, 'month', 'number', 'password', 'radio'
							, 'range', 'reset', 'search', 'submit'
							, 'tel', 'text', 'time', 'url'
							, 'week'))) {
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
		 * Attribute width
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrWidth($value) {
			if (RendererConf::developing &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('width', $value));
			} else {
				$this->setAttr('width', $value);
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
