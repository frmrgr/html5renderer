<?php

	/**
	 * Defines a scalar measurement within a known range (a gauge)
	 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
	 **/
	class Meter extends EventAndGlobalAttributes {

		/**
		 * Tag 'meter'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;meter /&gt</code>,
		 *    <code>&lt;meter&gt;</code>
		 *    <code>&lt;/meter&gt;</code> and
		 *    <code>&lt;meter&gt;&lt;/meter&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;meter&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/meter&gt;</code> or
		 *    <code>&lt;meter&gt;$value&lt;/meter&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('meter', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute form
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Meter
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
		 * Attribute high
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return Meter
		 **/
		function setAttrHigh($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('high', $value));
			} else {
				$this->setAttr('high', $value);
			}
			return $this;
		}

		/**
		 * Attribute low
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return Meter
		 **/
		function setAttrLow($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('low', $value));
			} else {
				$this->setAttr('low', $value);
			}
			return $this;
		}

		/**
		 * Attribute max
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return Meter
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
		 * Attribute min
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return Meter
		 **/
		function setAttrMin($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('min', $value));
			} else {
				$this->setAttr('min', $value);
			}
			return $this;
		}

		/**
		 * Attribute optimum
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return Meter
		 **/
		function setAttrOptimum($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('optimum', $value));
			} else {
				$this->setAttr('optimum', $value);
			}
			return $this;
		}

		/**
		 * Attribute value
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return Meter
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
		 * @return Meter
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
