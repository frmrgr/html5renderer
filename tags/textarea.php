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
		 * @param string $value value of the attribute in set {"autofocus",
		 *        "" }
		 * @return Textarea
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
		 * Attribute cols
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Textarea
		 **/
		function setAttrCols($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('cols', $value));
			} else {
				$this->setAttr('cols', $value);
			}
			return $this;
		}

		/**
		 * Attribute disabled
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"disabled",
		 *        "" }
		 * @return Textarea
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
		 * @return Textarea
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
		 * Attribute maxlength
		 *  - Warning Not supported in Internet Explorer and Opera.
		 * @param string $value value of the attribute
		 * @return Textarea
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
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Textarea
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
		 * Attribute placeholder
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return Textarea
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
		 * @return Textarea
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
		 * @return Textarea
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
		 * Attribute rows
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Textarea
		 **/
		function setAttrRows($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('rows', $value));
			} else {
				$this->setAttr('rows', $value);
			}
			return $this;
		}

		/**
		 * Attribute wrap
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"hard",
		 *        "soft" }
		 * @return Textarea
		 **/
		function setAttrWrap($value) {
			if (H5R_DEV &&
					!in_array($value, array('hard', 'soft'))) {
				throw new Exception($this->attrExc('wrap', $value));
			} else {
				$this->setAttr('wrap', $value);
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
		 * @return Textarea
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return Textarea
		 **/
		function addText($text) {
			parent::addText($text);
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
