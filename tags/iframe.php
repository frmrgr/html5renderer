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
		 * @return Iframe
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
		 * @return Iframe
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
		 * Attribute sandbox
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox and Opera.
		 * @param string $value value of the attribute in set {"""",
		 *        "allow-forms", "allow-same-origin", "allow-scripts", "allow-top-navigation"}
		 * @return Iframe
		 **/
		function setAttrSandbox($value) {
			if (H5R_DEV &&
					!in_array($value, array('""', 'allow-forms',
							'allow-same-origin', 'allow-scripts', 'allow-top-navigation'))) {
				throw new Exception($this->attrExc('sandbox', $value));
			} else {
				$this->setAttr('sandbox', $value);
			}
			return $this;
		}

		/**
		 * Attribute seamless
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera and Safari.
		 * @param string $value value of the attribute in set {"seamless",
		 *        "" }
		 * @return Iframe
		 **/
		function setAttrSeamless($value) {
			if (H5R_DEV &&
					!in_array($value, array('seamless', ''))) {
				throw new Exception($this->attrExc('seamless', $value));
			} else {
				$this->setAttr('seamless', $value);
			}
			return $this;
		}

		/**
		 * Attribute src
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Iframe
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
		 * Attribute srcdoc
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Iframe
		 **/
		function setAttrSrcdoc($value) {
			if (H5R_DEV &&
					!RendererValidators::isHtmlCode($value)) {
				throw new Exception($this->attrExc('srcdoc', $value));
			} else {
				$this->setAttr('srcdoc', $value);
			}
			return $this;
		}

		/**
		 * Attribute width
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Iframe
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
		 * @return Iframe
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
