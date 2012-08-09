<?php

	/**
	 * Defines multiple media resources for media elements (<video> and <audio>)
	 * Supported by all known browsers.
	 **/
	class Source extends EventAndGlobalAttributes {

		/**
		 * Tag 'source'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;source /&gt</code>,
		 *    <code>&lt;source&gt;</code>
		 *    <code>&lt;/source&gt;</code> and
		 *    <code>&lt;source&gt;&lt;/source&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;source&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/source&gt;</code> or
		 *    <code>&lt;source&gt;$value&lt;/source&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('source', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute media
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrMedia($value) {
			if (RendererConf::developing &&
					!RendererValidators::isMediaQuery($value)) {
				throw new Exception($this->attrExc('media', $value));
			} else {
				$this->setAttr('media', $value);
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
