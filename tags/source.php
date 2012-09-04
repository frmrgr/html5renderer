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
		 * @return Source
		 **/
		function setAttrMedia($value) {
			if (H5R_DEV &&
					!RendererValidators::isMediaQuery($value)) {
				throw new Exception($this->attrExc('media', $value));
			} else {
				$this->setAttr('media', $value);
			}
			return $this;
		}

		/**
		 * Attribute src
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Source
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
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Source
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
		 * @return Source
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
