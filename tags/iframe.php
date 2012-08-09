<?php

	/**
	 * Defines an inline frame
	 * Supported by all known browsers.
	 **/
	class Iframe extends EventAndGlobalAttributes {

		/**
		 * Tag 'iframe'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;iframe /&gt</code>,
		 *    <code>&lt;iframe&gt;</code>
		 *    <code>&lt;/iframe&gt;</code> and
		 *    <code>&lt;iframe&gt;&lt;/iframe&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;iframe&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/iframe&gt;</code> or
		 *    <code>&lt;iframe&gt;$value&lt;/iframe&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('iframe', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute height
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrHeight($value) {
			if (RendererConf::developing &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('height', $value));
			} else {
				$this->setAttr('height', $value);
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
					!RendererValidators::isName($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
			}
		}

		/**
		 * Attribute sandbox
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Opera.
		 * @param string $value value of the attribute in set {""""
		 *        , "allow-forms", "allow-same-origin", "allow-scripts", "allow-top-navigation"
		 *        }
		 * @return void
		 **/
		function setAttrSandbox($value) {
			if (RendererConf::developing &&
					!in_array($value, array('""', 'allow-forms'
							, 'allow-same-origin', 'allow-scripts', 'allow-top-navigation'))) {
				throw new Exception($this->attrExc('sandbox', $value));
			} else {
				$this->setAttr('sandbox', $value);
			}
		}

		/**
		 * Attribute seamless
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera and Safari.
		 * @param string $value value of the attribute in set {"seamless"
		 *        , ""}
		 * @return void
		 **/
		function setAttrSeamless($value) {
			if (RendererConf::developing &&
					!in_array($value, array('seamless', ''))) {
				throw new Exception($this->attrExc('seamless', $value));
			} else {
				$this->setAttr('seamless', $value);
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
		 * Attribute srcdoc
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrSrcdoc($value) {
			if (RendererConf::developing &&
					!RendererValidators::isHtmlCode($value)) {
				throw new Exception($this->attrExc('srcdoc', $value));
			} else {
				$this->setAttr('srcdoc', $value);
			}
		}

		/**
		 * Attribute width
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrWidth($value) {
			if (RendererConf::developing &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('width', $value));
			} else {
				$this->setAttr('width', $value);
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
