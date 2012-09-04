<?php

	/**
	 * Defines a client-side script
	 * Supported by all known browsers.
	 **/
	class Script extends EventAndGlobalAttributes {

		/**
		 * Tag 'script'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;script /&gt</code>,
		 *    <code>&lt;script&gt;</code>
		 *    <code>&lt;/script&gt;</code> and
		 *    <code>&lt;script&gt;&lt;/script&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;script&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/script&gt;</code> or
		 *    <code>&lt;script&gt;$value&lt;/script&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('script', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute async
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"async",
		 *        "" }
		 * @return Script
		 **/
		function setAttrAsync($value) {
			if (H5R_DEV &&
					!in_array($value, array('async', ''))) {
				throw new Exception($this->attrExc('async', $value));
			} else {
				$this->setAttr('async', $value);
			}
			return $this;
		}

		/**
		 * Attribute defer
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"defer",
		 *        "" }
		 * @return Script
		 **/
		function setAttrDefer($value) {
			if (H5R_DEV &&
					!in_array($value, array('defer', ''))) {
				throw new Exception($this->attrExc('defer', $value));
			} else {
				$this->setAttr('defer', $value);
			}
			return $this;
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Script
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
		 * Attribute charset
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Script
		 **/
		function setAttrCharset($value) {
			if (H5R_DEV &&
					!RendererValidators::isCharacterSet($value)) {
				throw new Exception($this->attrExc('charset', $value));
			} else {
				$this->setAttr('charset', $value);
			}
			return $this;
		}

		/**
		 * Attribute src
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Script
		 **/
		function setAttrSrc($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('src', $value));
			} else {
				$this->setAttr('src', $value);
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
		 * @return Script
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return Script
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
