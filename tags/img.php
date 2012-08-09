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
		 * Attribute alt
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrAlt($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('alt', $value));
			} else {
				$this->setAttr('alt', $value);
			}
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
		 * Attribute ismap
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"ismap"
		 *        , ""}
		 * @return void
		 **/
		function setAttrIsmap($value) {
			if (RendererConf::developing &&
					!in_array($value, array('ismap', ''))) {
				throw new Exception($this->attrExc('ismap', $value));
			} else {
				$this->setAttr('ismap', $value);
			}
		}

		/**
		 * Attribute usemap
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrUsemap($value) {
			if (RendererConf::developing &&
					!RendererValidators::isMapname($value)) {
				throw new Exception($this->attrExc('usemap', $value));
			} else {
				$this->setAttr('usemap', $value);
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
