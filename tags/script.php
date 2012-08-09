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
		 * @param string $value value of the attribute in set {"async"
		 *        , ""}
		 * @return void
		 **/
		function setAttrAsync($value) {
			if (RendererConf::developing &&
					!in_array($value, array('async', ''))) {
				throw new Exception($this->attrExc('async', $value));
			} else {
				$this->setAttr('async', $value);
			}
		}

		/**
		 * Attribute defer
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"defer"
		 *        , ""}
		 * @return void
		 **/
		function setAttrDefer($value) {
			if (RendererConf::developing &&
					!in_array($value, array('defer', ''))) {
				throw new Exception($this->attrExc('defer', $value));
			} else {
				$this->setAttr('defer', $value);
			}
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrType($value) {
			if (RendererConf::developing &&
					!RendererValidators::isMimeType($value)) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
			}
		}

		/**
		 * Attribute charset
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrCharset($value) {
			if (RendererConf::developing &&
					!RendererValidators::isCharacterSet($value)) {
				throw new Exception($this->attrExc('charset', $value));
			} else {
				$this->setAttr('charset', $value);
			}
		}

		/**
		 * Attribute src
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrSrc($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('src', $value));
			} else {
				$this->setAttr('src', $value);
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
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return void
		 **/
		function addText($text) {
			parent::addText($text);
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
