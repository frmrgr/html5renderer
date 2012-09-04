<?php

	/**
	 * Defines a parameter for an object
	 * Supported by all known browsers.
	 **/
	class Param extends EventAndGlobalAttributes {

		/**
		 * Tag 'param'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;param /&gt</code>,
		 *    <code>&lt;param&gt;</code>
		 *    <code>&lt;/param&gt;</code> and
		 *    <code>&lt;param&gt;&lt;/param&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;param&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/param&gt;</code> or
		 *    <code>&lt;param&gt;$value&lt;/param&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('param', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Param
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
		 * Attribute value
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Param
		 **/
		function setAttrValue($value) {
			if (H5R_DEV &&
					!RendererValidators::isValue($value)) {
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
		 * @return Param
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
