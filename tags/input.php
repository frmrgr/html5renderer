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
		 * @param string $value value of the attribute in set {"audio/*",
		 *        "video/*", "image/*", "MIME_type" }
		 * @return Input
		 **/
		function setAttrAccept($value) {
			if (H5R_DEV &&
					!in_array($value, array('audio/*', 'video/*',
							'image/*', 'MIME_type'))) {
				throw new Exception($this->attrExc('accept', $value));
			} else {
				$this->setAttr('accept', $value);
			}
			return $this;
		}

		/**
		 * Attribute alt
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrAlt($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('alt', $value));
			} else {
				$this->setAttr('alt', $value);
			}
			return $this;
		}

		/**
		 * Attribute autocomplete
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"on",
		 *        "off" }
		 * @return Input
		 **/
		function setAttrAutocomplete($value) {
			if (H5R_DEV &&
					!in_array($value, array('on', 'off'))) {
				throw new Exception($this->attrExc('autocomplete', $value));
			} else {
				$this->setAttr('autocomplete', $value);
			}
			return $this;
		}

		/**
		 * Attribute autofocus
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"autofocus",
		 *        "" }
		 * @return Input
		 **/
		function setAttrAutofocus($value) {
			if (H5R_DEV &&
					!in_array($value, array('autofocus', ''))) {
				throw new Exception($this->attrExc('autofocus', $value));
			} else {
				$this->setAttr('autofocus', $value);
			}
			return $this;
		}

		/**
		 * Attribute checked
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"checked",
		 *        "" }
		 * @return Input
		 **/
		function setAttrChecked($value) {
			if (H5R_DEV &&
					!in_array($value, array('checked', ''))) {
				throw new Exception($this->attrExc('checked', $value));
			} else {
				$this->setAttr('checked', $value);
			}
			return $this;
		}

		/**
		 * Attribute disabled
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"disabled",
		 *        "" }
		 * @return Input
		 **/
		function setAttrDisabled($value) {
			if (H5R_DEV &&
					!in_array($value, array('disabled', ''))) {
				throw new Exception($this->attrExc('disabled', $value));
			} else {
				$this->setAttr('disabled', $value);
			}
			return $this;
		}

		/**
		 * Attribute form
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrForm($value) {
			if (H5R_DEV &&
					!RendererValidators::isFormId($value)) {
				throw new Exception($this->attrExc('form', $value));
			} else {
				$this->setAttr('form', $value);
			}
			return $this;
		}

		/**
		 * Attribute formaction
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrFormaction($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('formaction', $value));
			} else {
				$this->setAttr('formaction', $value);
			}
			return $this;
		}

		/**
		 * Attribute formenctype
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"application/x-www-form-urlencoded",
		 *        "multipart/form-data", "text/plain" }
		 * @return Input
		 **/
		function setAttrFormenctype($value) {
			if (H5R_DEV &&
					!in_array($value, array('application/x-www-form-urlencoded', 'multipart/form-data',
							'text/plain'))) {
				throw new Exception($this->attrExc('formenctype', $value));
			} else {
				$this->setAttr('formenctype', $value);
			}
			return $this;
		}

		/**
		 * Attribute formmethod
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"get",
		 *        "post" }
		 * @return Input
		 **/
		function setAttrFormmethod($value) {
			if (H5R_DEV &&
					!in_array($value, array('get', 'post'))) {
				throw new Exception($this->attrExc('formmethod', $value));
			} else {
				$this->setAttr('formmethod', $value);
			}
			return $this;
		}

		/**
		 * Attribute formnovalidate
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"formnovalidate",
		 *        "" }
		 * @return Input
		 **/
		function setAttrFormnovalidate($value) {
			if (H5R_DEV &&
					!in_array($value, array('formnovalidate', ''))) {
				throw new Exception($this->attrExc('formnovalidate', $value));
			} else {
				$this->setAttr('formnovalidate', $value);
			}
			return $this;
		}

		/**
		 * Attribute formtarget
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"_blank",
		 *        "_self", "_parent", "_top", "framename"}
		 * @return Input
		 **/
		function setAttrFormtarget($value) {
			if (H5R_DEV &&
					!in_array($value, array('_blank', '_self',
							'_parent', '_top', 'framename'))) {
				throw new Exception($this->attrExc('formtarget', $value));
			} else {
				$this->setAttr('formtarget', $value);
			}
			return $this;
		}

		/**
		 * Attribute height
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrHeight($value) {
			if (H5R_DEV &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('height', $value));
			} else {
				$this->setAttr('height', $value);
			}
			return $this;
		}

		/**
		 * Attribute list
		 *  - Warning Not supported in Internet Explorer, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrList($value) {
			if (H5R_DEV &&
					!RendererValidators::isDatalistId($value)) {
				throw new Exception($this->attrExc('list', $value));
			} else {
				$this->setAttr('list', $value);
			}
			return $this;
		}

		/**
		 * Attribute max
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute in set {"number",
		 *        "date" }
		 * @return Input
		 **/
		function setAttrMax($value) {
			if (H5R_DEV &&
					!in_array($value, array('number', 'date'))) {
				throw new Exception($this->attrExc('max', $value));
			} else {
				$this->setAttr('max', $value);
			}
			return $this;
		}

		/**
		 * Attribute maxlength
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrMaxlength($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('maxlength', $value));
			} else {
				$this->setAttr('maxlength', $value);
			}
			return $this;
		}

		/**
		 * Attribute min
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute in set {"number",
		 *        "date" }
		 * @return Input
		 **/
		function setAttrMin($value) {
			if (H5R_DEV &&
					!in_array($value, array('number', 'date'))) {
				throw new Exception($this->attrExc('min', $value));
			} else {
				$this->setAttr('min', $value);
			}
			return $this;
		}

		/**
		 * Attribute multiple
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"multiple",
		 *        "" }
		 * @return Input
		 **/
		function setAttrMultiple($value) {
			if (H5R_DEV &&
					!in_array($value, array('multiple', ''))) {
				throw new Exception($this->attrExc('multiple', $value));
			} else {
				$this->setAttr('multiple', $value);
			}
			return $this;
		}

		/**
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrName($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
			}
			return $this;
		}

		/**
		 * Attribute pattern
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrPattern($value) {
			if (H5R_DEV &&
					!RendererValidators::isRegexp($value)) {
				throw new Exception($this->attrExc('pattern', $value));
			} else {
				$this->setAttr('pattern', $value);
			}
			return $this;
		}

		/**
		 * Attribute placeholder
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrPlaceholder($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('placeholder', $value));
			} else {
				$this->setAttr('placeholder', $value);
			}
			return $this;
		}

		/**
		 * Attribute readonly
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"readonly",
		 *        "" }
		 * @return Input
		 **/
		function setAttrReadonly($value) {
			if (H5R_DEV &&
					!in_array($value, array('readonly', ''))) {
				throw new Exception($this->attrExc('readonly', $value));
			} else {
				$this->setAttr('readonly', $value);
			}
			return $this;
		}

		/**
		 * Attribute required
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"required",
		 *        "" }
		 * @return Input
		 **/
		function setAttrRequired($value) {
			if (H5R_DEV &&
					!in_array($value, array('required', ''))) {
				throw new Exception($this->attrExc('required', $value));
			} else {
				$this->setAttr('required', $value);
			}
			return $this;
		}

		/**
		 * Attribute size
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrSize($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('size', $value));
			} else {
				$this->setAttr('size', $value);
			}
			return $this;
		}

		/**
		 * Attribute src
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrSrc($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('src', $value));
			} else {
				$this->setAttr('src', $value);
			}
			return $this;
		}

		/**
		 * Attribute step
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrStep($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('step', $value));
			} else {
				$this->setAttr('step', $value);
			}
			return $this;
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"button",
		 *        "checkbox", "color", "date", "datetime",
		 *        "datetime-local", "email", "file", "hidden",
		 *        "image", "month", "number", "password",
		 *        "radio", "range", "reset", "search",
		 *        "submit", "tel", "text", "time",
		 *        "url", "week" }
		 * @return Input
		 **/
		function setAttrType($value) {
			if (H5R_DEV &&
					!in_array($value, array('button', 'checkbox',
							'color', 'date', 'datetime', 'datetime-local',
							'email', 'file', 'hidden', 'image',
							'month', 'number', 'password', 'radio',
							'range', 'reset', 'search', 'submit',
							'tel', 'text', 'time', 'url',
							'week'))) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
			}
			return $this;
		}

		/**
		 * Attribute value
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrValue($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('value', $value));
			} else {
				$this->setAttr('value', $value);
			}
			return $this;
		}

		/**
		 * Attribute width
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Input
		 **/
		function setAttrWidth($value) {
			if (H5R_DEV &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('width', $value));
			} else {
				$this->setAttr('width', $value);
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
		 * @return Input
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
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
