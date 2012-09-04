<?php

	/**
	 * Defines text tracks for media elements (<video> and <audio>)
	 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
	 **/
	class Track extends EventAndGlobalAttributes {

		/**
		 * Tag 'track'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;track /&gt</code>,
		 *    <code>&lt;track&gt;</code>
		 *    <code>&lt;/track&gt;</code> and
		 *    <code>&lt;track&gt;&lt;/track&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;track&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/track&gt;</code> or
		 *    <code>&lt;track&gt;$value&lt;/track&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('track', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute default
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"default",
		 *        "" }
		 * @return Track
		 **/
		function setAttrDefault($value) {
			if (H5R_DEV &&
					!in_array($value, array('default', ''))) {
				throw new Exception($this->attrExc('default', $value));
			} else {
				$this->setAttr('default', $value);
			}
			return $this;
		}

		/**
		 * Attribute kind
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"captions",
		 *        "chapters", "descriptions", "metadata", "subtitles"}
		 * @return Track
		 **/
		function setAttrKind($value) {
			if (H5R_DEV &&
					!in_array($value, array('captions', 'chapters',
							'descriptions', 'metadata', 'subtitles'))) {
				throw new Exception($this->attrExc('kind', $value));
			} else {
				$this->setAttr('kind', $value);
			}
			return $this;
		}

		/**
		 * Attribute label
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Track
		 **/
		function setAttrLabel($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('label', $value));
			} else {
				$this->setAttr('label', $value);
			}
			return $this;
		}

		/**
		 * Attribute src
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Track
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
		 * Attribute srclang
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Track
		 **/
		function setAttrSrclang($value) {
			if (H5R_DEV &&
					!RendererValidators::isLanguageCode($value)) {
				throw new Exception($this->attrExc('srclang', $value));
			} else {
				$this->setAttr('srclang', $value);
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
		 * @return Track
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
