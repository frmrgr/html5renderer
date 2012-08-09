<?php

	/**
	 * Defines metadata about an HTML document
	 * Supported by all known browsers.
	 **/
	class Meta extends GlobalAttributes {

		/**
		 * Tag 'meta'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;meta /&gt</code>,
		 *    <code>&lt;meta&gt;</code>
		 *    <code>&lt;/meta&gt;</code> and
		 *    <code>&lt;meta&gt;&lt;/meta&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;meta&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/meta&gt;</code> or
		 *    <code>&lt;meta&gt;$value&lt;/meta&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('meta', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
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
		 * Attribute content
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrContent($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('content', $value));
			} else {
				$this->setAttr('content', $value);
			}
		}

		/**
		 * Attribute http-equiv
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"content-type"
		 *        , "default-style", "refresh"}
		 * @return void
		 **/
		function setAttrHttpEquiv($value) {
			if (RendererConf::developing &&
					!in_array($value, array('content-type', 'default-style'
							, 'refresh'))) {
				throw new Exception($this->attrExc('http-equiv', $value));
			} else {
				$this->setAttr('http-equiv', $value);
			}
		}

		/**
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"application-name"
		 *        , "author", "description", "generator", "keywords"
		 *        }
		 * @return void
		 **/
		function setAttrName($value) {
			if (RendererConf::developing &&
					!in_array($value, array('application-name', 'author'
							, 'description', 'generator', 'keywords'))) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
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
