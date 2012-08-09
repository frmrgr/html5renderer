<?php

	/**
	 * Defines an HTML form for user input
	 * Supported by all known browsers.
	 **/
	class Form extends EventAndGlobalAttributes {

		/**
		 * Tag 'form'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;form /&gt</code>,
		 *    <code>&lt;form&gt;</code>
		 *    <code>&lt;/form&gt;</code> and
		 *    <code>&lt;form&gt;&lt;/form&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;form&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/form&gt;</code> or
		 *    <code>&lt;form&gt;$value&lt;/form&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('form', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute accept-charset
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrAcceptCharset($value) {
			if (RendererConf::developing &&
					!RendererValidators::isCharacterSet($value)) {
				throw new Exception($this->attrExc('accept-charset', $value));
			} else {
				$this->setAttr('accept-charset', $value);
			}
		}

		/**
		 * Attribute action
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrAction($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('action', $value));
			} else {
				$this->setAttr('action', $value);
			}
		}

		/**
		 * Attribute autocomplete
		 *  - Warning Not supported in Opera.
		 * @param string $value value of the attribute in set {"on"
		 *        , "off"}
		 * @return void
		 **/
		function setAttrAutocomplete($value) {
			if (RendererConf::developing &&
					!in_array($value, array('on', 'off'))) {
				throw new Exception($this->attrExc('autocomplete', $value));
			} else {
				$this->setAttr('autocomplete', $value);
			}
		}

		/**
		 * Attribute enctype
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"application/x-www-form-urlencoded"
		 *        , "multipart/form-data", "text/plain"}
		 * @return void
		 **/
		function setAttrEnctype($value) {
			if (RendererConf::developing &&
					!in_array($value, array('application/x-www-form-urlencoded', 'multipart/form-data'
							, 'text/plain'))) {
				throw new Exception($this->attrExc('enctype', $value));
			} else {
				$this->setAttr('enctype', $value);
			}
		}

		/**
		 * Attribute method
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"get"
		 *        , "post"}
		 * @return void
		 **/
		function setAttrMethod($value) {
			if (RendererConf::developing &&
					!in_array($value, array('get', 'post'))) {
				throw new Exception($this->attrExc('method', $value));
			} else {
				$this->setAttr('method', $value);
			}
		}

		/**
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrName($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
			}
		}

		/**
		 * Attribute novalidate
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"novalidate"
		 *        , ""}
		 * @return void
		 **/
		function setAttrNovalidate($value) {
			if (RendererConf::developing &&
					!in_array($value, array('novalidate', ''))) {
				throw new Exception($this->attrExc('novalidate', $value));
			} else {
				$this->setAttr('novalidate', $value);
			}
		}

		/**
		 * Attribute target
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"_blank"
		 *        , "_self", "_parent", "_top"}
		 * @return void
		 **/
		function setAttrTarget($value) {
			if (RendererConf::developing &&
					!in_array($value, array('_blank', '_self'
							, '_parent', '_top'))) {
				throw new Exception($this->attrExc('target', $value));
			} else {
				$this->setAttr('target', $value);
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
