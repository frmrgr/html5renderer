<?php

	/**
	 * Defines the result of a calculation
	 *  - Warning Not supported in Internet Explorer.
	 **/
	class Output extends EventAndGlobalAttributes {

		/**
		 * Tag 'output'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;output /&gt</code>,
		 *    <code>&lt;output&gt;</code>
		 *    <code>&lt;/output&gt;</code> and
		 *    <code>&lt;output&gt;&lt;/output&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;output&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/output&gt;</code> or
		 *    <code>&lt;output&gt;$value&lt;/output&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('output', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute for
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return Output
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
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Output
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
		 * @return Output
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
		 * @return Output
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
