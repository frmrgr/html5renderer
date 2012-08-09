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
		 * @param string $value value of the attribute in set {"default"
		 *        , ""}
		 * @return void
		 **/
		function setAttrDefault($value) {
			if (RendererConf::developing &&
					!in_array($value, array('default', ''))) {
				throw new Exception($this->attrExc('default', $value));
			} else {
				$this->setAttr('default', $value);
			}
		}

		/**
		 * Attribute kind
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"captions"
		 *        , "chapters", "descriptions", "metadata", "subtitles"
		 *        }
		 * @return void
		 **/
		function setAttrKind($value) {
			if (RendererConf::developing &&
					!in_array($value, array('captions', 'chapters'
							, 'descriptions', 'metadata', 'subtitles'))) {
				throw new Exception($this->attrExc('kind', $value));
			} else {
				$this->setAttr('kind', $value);
			}
		}

		/**
		 * Attribute label
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrLabel($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('label', $value));
			} else {
				$this->setAttr('label', $value);
			}
		}

		/**
		 * Attribute src
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
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
		 * Attribute srclang
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrSrclang($value) {
			if (RendererConf::developing &&
					!RendererValidators::isLanguageCode($value)) {
				throw new Exception($this->attrExc('srclang', $value));
			} else {
				$this->setAttr('srclang', $value);
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
