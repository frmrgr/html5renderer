<?php

	/**
	 * Defines an option in a drop-down list
	 * Supported by all known browsers.
	 **/
	class Option extends EventAndGlobalAttributes {

		/**
		 * Tag 'option'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;option /&gt</code>,
		 *    <code>&lt;option&gt;</code>
		 *    <code>&lt;/option&gt;</code> and
		 *    <code>&lt;option&gt;&lt;/option&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;option&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/option&gt;</code> or
		 *    <code>&lt;option&gt;$value&lt;/option&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('option', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute disabled
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"disabled",
		 *        "" }
		 * @return Option
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
		 * Attribute label
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Option
		 **/
		function setAttrLabel($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('label', $value));
			} else {
				$this->setAttr('label', $value);
			}
			return $this;
		}

		/**
		 * Attribute selected
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"selected",
		 *        "" }
		 * @return Option
		 **/
		function setAttrSelected($value) {
			if (H5R_DEV &&
					!in_array($value, array('selected', ''))) {
				throw new Exception($this->attrExc('selected', $value));
			} else {
				$this->setAttr('selected', $value);
			}
			return $this;
		}

		/**
		 * Attribute value
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Option
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
		 * @return Option
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
