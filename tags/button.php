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
		 * @param string $value value of the attribute in set {"autofocus",
		 *        "" }
		 * @return Button
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
		 * Attribute disabled
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"disabled",
		 *        "" }
		 * @return Button
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
		 * @return Button
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
		 * @return Button
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
		 *  - Warning Not supported in Internet Explorer, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"application/x-www-form-urlencoded",
		 *        "multipart/form-data", "text/plain" }
		 * @return Button
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
		 * @return Button
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
		 * @return Button
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
		 * @return Button
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
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Button
		 **/
		function setAttrName($value) {
			if (H5R_DEV &&
					!RendererValidators::isName($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
			}
			return $this;
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"button",
		 *        "reset", "submit " }
		 * @return Button
		 **/
		function setAttrType($value) {
			if (H5R_DEV &&
					!in_array($value, array('button', 'reset',
							'submit '))) {
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
		 * @return Button
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
		 * @return Button
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
