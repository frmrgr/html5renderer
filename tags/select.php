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
		 * @param string $value value of the attribute in set {"autofocus",
		 *        "" }
		 * @return Select
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
		 * @return Select
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
		 * @return Select
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
		 * Attribute multiple
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"multiple",
		 *        "" }
		 * @return Select
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
		 * @return Select
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
		 * Attribute size
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Select
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
		 * @return Select
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
