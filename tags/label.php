<?php

	/**
	 * Defines a label for an input element
	 * Supported by all known browsers.
	 **/
	class Label extends EventAndGlobalAttributes {

		/**
		 * Tag 'label'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;label /&gt</code>,
		 *    <code>&lt;label&gt;</code>
		 *    <code>&lt;/label&gt;</code> and
		 *    <code>&lt;label&gt;&lt;/label&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;label&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/label&gt;</code> or
		 *    <code>&lt;label&gt;$value&lt;/label&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('label', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute for
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Label
		 **/
		function setAttrFor($value) {
			if (H5R_DEV &&
					!RendererValidators::isElementId($value)) {
				throw new Exception($this->attrExc('for', $value));
			} else {
				$this->setAttr('for', $value);
			}
			return $this;
		}

		/**
		 * Attribute form
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Label
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
		 * @return Label
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
