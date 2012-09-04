<?php

	/**
	 * Defines an embedded object
	 * Supported by all known browsers.
	 **/
	class Object extends EventAndGlobalAttributes {

		/**
		 * Tag 'object'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;object /&gt</code>,
		 *    <code>&lt;object&gt;</code>
		 *    <code>&lt;/object&gt;</code> and
		 *    <code>&lt;object&gt;&lt;/object&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;object&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/object&gt;</code> or
		 *    <code>&lt;object&gt;$value&lt;/object&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('object', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute data
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Object
		 **/
		function setAttrData($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('data', $value));
			} else {
				$this->setAttr('data', $value);
			}
			return $this;
		}

		/**
		 * Attribute form
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Object
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
		 * Attribute height
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Object
		 **/
		function setAttrHeight($value) {
			if (H5R_DEV &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('height', $value));
			} else {
				$this->setAttr('height', $value);
			}
			return $this;
		}

		/**
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Object
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
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Object
		 **/
		function setAttrType($value) {
			if (H5R_DEV &&
					!RendererValidators::isMimeType($value)) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
			}
			return $this;
		}

		/**
		 * Attribute usemap
		 *  - Warning Not supported in Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Object
		 **/
		function setAttrUsemap($value) {
			if (H5R_DEV &&
					!RendererValidators::isMapname($value)) {
				throw new Exception($this->attrExc('usemap', $value));
			} else {
				$this->setAttr('usemap', $value);
			}
			return $this;
		}

		/**
		 * Attribute width
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Object
		 **/
		function setAttrWidth($value) {
			if (H5R_DEV &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('width', $value));
			} else {
				$this->setAttr('width', $value);
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
		 * @return Object
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
