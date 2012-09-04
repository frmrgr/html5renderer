<?php

	/**
	 * Groups related elements in a form
	 * Supported by all known browsers.
	 **/
	class Fieldset extends EventAndGlobalAttributes {

		/**
		 * Tag 'fieldset'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;fieldset /&gt</code>,
		 *    <code>&lt;fieldset&gt;</code>
		 *    <code>&lt;/fieldset&gt;</code> and
		 *    <code>&lt;fieldset&gt;&lt;/fieldset&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;fieldset&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/fieldset&gt;</code> or
		 *    <code>&lt;fieldset&gt;$value&lt;/fieldset&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('fieldset', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute disabled
		 *  - Warning Not supported in Internet Explorer, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"disabled",
		 *        "" }
		 * @return Fieldset
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
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Fieldset
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
		 * Attribute name
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return Fieldset
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
		 * @return Fieldset
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return Fieldset
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
