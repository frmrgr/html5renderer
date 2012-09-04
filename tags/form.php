<?php

	/**
	 * Defines an HTML form for user input
	 * Supported by all known browsers.
	 **/
	class Form extends EventAndGlobalAttributes {

		/**
		 * Tag 'form'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;form /&gt</code>,
		 *    <code>&lt;form&gt;</code>
		 *    <code>&lt;/form&gt;</code> and
		 *    <code>&lt;form&gt;&lt;/form&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;form&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/form&gt;</code> or
		 *    <code>&lt;form&gt;$value&lt;/form&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('form', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute accept-charset
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Form
		 **/
		function setAttrAcceptCharset($value) {
			if (H5R_DEV &&
					!RendererValidators::isCharacterSet($value)) {
				throw new Exception($this->attrExc('accept-charset', $value));
			} else {
				$this->setAttr('accept-charset', $value);
			}
			return $this;
		}

		/**
		 * Attribute action
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Form
		 **/
		function setAttrAction($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('action', $value));
			} else {
				$this->setAttr('action', $value);
			}
			return $this;
		}

		/**
		 * Attribute autocomplete
		 *  - Warning Not supported in Opera.
		 * @param string $value value of the attribute in set {"on",
		 *        "off" }
		 * @return Form
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
		 * Attribute enctype
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"application/x-www-form-urlencoded",
		 *        "multipart/form-data", "text/plain" }
		 * @return Form
		 **/
		function setAttrEnctype($value) {
			if (H5R_DEV &&
					!in_array($value, array('application/x-www-form-urlencoded', 'multipart/form-data',
							'text/plain'))) {
				throw new Exception($this->attrExc('enctype', $value));
			} else {
				$this->setAttr('enctype', $value);
			}
			return $this;
		}

		/**
		 * Attribute method
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"get",
		 *        "post" }
		 * @return Form
		 **/
		function setAttrMethod($value) {
			if (H5R_DEV &&
					!in_array($value, array('get', 'post'))) {
				throw new Exception($this->attrExc('method', $value));
			} else {
				$this->setAttr('method', $value);
			}
			return $this;
		}

		/**
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Form
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
		 * Attribute novalidate
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"novalidate",
		 *        "" }
		 * @return Form
		 **/
		function setAttrNovalidate($value) {
			if (H5R_DEV &&
					!in_array($value, array('novalidate', ''))) {
				throw new Exception($this->attrExc('novalidate', $value));
			} else {
				$this->setAttr('novalidate', $value);
			}
			return $this;
		}

		/**
		 * Attribute target
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"_blank",
		 *        "_self", "_parent", "_top" }
		 * @return Form
		 **/
		function setAttrTarget($value) {
			if (H5R_DEV &&
					!in_array($value, array('_blank', '_self',
							'_parent', '_top'))) {
				throw new Exception($this->attrExc('target', $value));
			} else {
				$this->setAttr('target', $value);
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
		 * @return Form
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
