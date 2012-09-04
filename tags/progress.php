<?php

	/**
	 * Represents the progress of a task
	 *  - Warning Not supported in Internet Explorer and Safari.
	 **/
	class Progress extends EventAndGlobalAttributes {

		/**
		 * Tag 'progress'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;progress /&gt</code>,
		 *    <code>&lt;progress&gt;</code>
		 *    <code>&lt;/progress&gt;</code> and
		 *    <code>&lt;progress&gt;&lt;/progress&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;progress&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/progress&gt;</code> or
		 *    <code>&lt;progress&gt;$value&lt;/progress&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('progress', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute max
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return Progress
		 **/
		function setAttrMax($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('max', $value));
			} else {
				$this->setAttr('max', $value);
			}
			return $this;
		}

		/**
		 * Attribute value
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return Progress
		 **/
		function setAttrValue($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
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
		 * @return Progress
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
