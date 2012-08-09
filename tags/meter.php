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
		 * @return void
		 **/
		function setAttrForm($value) {
			if (RendererConf::developing &&
					!RendererValidators::isFormId($value)) {
				throw new Exception($this->attrExc('form', $value));
			} else {
				$this->setAttr('form', $value);
			}
		}

		/**
		 * Attribute high
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrHigh($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('high', $value));
			} else {
				$this->setAttr('high', $value);
			}
		}

		/**
		 * Attribute low
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrLow($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('low', $value));
			} else {
				$this->setAttr('low', $value);
			}
		}

		/**
		 * Attribute max
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrMax($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('max', $value));
			} else {
				$this->setAttr('max', $value);
			}
		}

		/**
		 * Attribute min
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrMin($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('min', $value));
			} else {
				$this->setAttr('min', $value);
			}
		}

		/**
		 * Attribute optimum
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrOptimum($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('optimum', $value));
			} else {
				$this->setAttr('optimum', $value);
			}
		}

		/**
		 * Attribute value
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrValue($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('value', $value));
			} else {
				$this->setAttr('value', $value);
			}
		}

		/**
		 * Adding a new inner tag
		 * @param type $tag The adding inner tag
		 * @return void
		 **/
		function addTag($tag) {
			$this->addLines($tag->getLines());
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
