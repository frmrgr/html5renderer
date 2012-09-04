<?php

	/**
	 * Defines an image
	 * Supported by all known browsers.
	 **/
	class Img extends EventAndGlobalAttributes {

		/**
		 * Tag 'img'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;img /&gt</code>,
		 *    <code>&lt;img&gt;</code>
		 *    <code>&lt;/img&gt;</code> and
		 *    <code>&lt;img&gt;&lt;/img&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;img&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/img&gt;</code> or
		 *    <code>&lt;img&gt;$value&lt;/img&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('img', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute src
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Img
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
		 * Attribute alt
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Img
		 **/
		function setAttrAlt($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('alt', $value));
			} else {
				$this->setAttr('alt', $value);
			}
			return $this;
		}

		/**
		 * Attribute height
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Img
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
		 * Attribute ismap
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"ismap",
		 *        "" }
		 * @return Img
		 **/
		function setAttrIsmap($value) {
			if (H5R_DEV &&
					!in_array($value, array('ismap', ''))) {
				throw new Exception($this->attrExc('ismap', $value));
			} else {
				$this->setAttr('ismap', $value);
			}
			return $this;
		}

		/**
		 * Attribute usemap
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Img
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
		 * @return Img
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
		 * @return Img
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
