<?php

	/**
	 * Defines sound content
	 * Supported by all known browsers.
	 **/
	class Audio extends EventAndGlobalAttributes {

		/**
		 * Tag 'audio'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;audio /&gt</code>,
		 *    <code>&lt;audio&gt;</code>
		 *    <code>&lt;/audio&gt;</code> and
		 *    <code>&lt;audio&gt;&lt;/audio&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;audio&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/audio&gt;</code> or
		 *    <code>&lt;audio&gt;$value&lt;/audio&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('audio', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute autoplay
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"autoplay",
		 *        "" }
		 * @return Audio
		 **/
		function setAttrAutoplay($value) {
			if (H5R_DEV &&
					!in_array($value, array('autoplay', ''))) {
				throw new Exception($this->attrExc('autoplay', $value));
			} else {
				$this->setAttr('autoplay', $value);
			}
			return $this;
		}

		/**
		 * Attribute controls
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"controls",
		 *        "" }
		 * @return Audio
		 **/
		function setAttrControls($value) {
			if (H5R_DEV &&
					!in_array($value, array('controls', ''))) {
				throw new Exception($this->attrExc('controls', $value));
			} else {
				$this->setAttr('controls', $value);
			}
			return $this;
		}

		/**
		 * Attribute loop
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"loop",
		 *        "" }
		 * @return Audio
		 **/
		function setAttrLoop($value) {
			if (H5R_DEV &&
					!in_array($value, array('loop', ''))) {
				throw new Exception($this->attrExc('loop', $value));
			} else {
				$this->setAttr('loop', $value);
			}
			return $this;
		}

		/**
		 * Attribute preload
		 *  - Warning Not supported in Internet Explorer and Opera.
		 * @param string $value value of the attribute in set {"auto",
		 *        "metadata", "none" }
		 * @return Audio
		 **/
		function setAttrPreload($value) {
			if (H5R_DEV &&
					!in_array($value, array('auto', 'metadata',
							'none'))) {
				throw new Exception($this->attrExc('preload', $value));
			} else {
				$this->setAttr('preload', $value);
			}
			return $this;
		}

		/**
		 * Attribute src
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Audio
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
		 * @return Audio
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return Audio
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
