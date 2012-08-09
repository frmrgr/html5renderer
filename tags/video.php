<?php

	/**
	 * Defines a video or movie
	 * Supported by all known browsers.
	 **/
	class Video extends EventAndGlobalAttributes {

		/**
		 * Tag 'video'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;video /&gt</code>,
		 *    <code>&lt;video&gt;</code>
		 *    <code>&lt;/video&gt;</code> and
		 *    <code>&lt;video&gt;&lt;/video&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;video&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/video&gt;</code> or
		 *    <code>&lt;video&gt;$value&lt;/video&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('video', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute autoplay
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"autoplay"
		 *        , ""}
		 * @return void
		 **/
		function setAttrAutoplay($value) {
			if (RendererConf::developing &&
					!in_array($value, array('autoplay', ''))) {
				throw new Exception($this->attrExc('autoplay', $value));
			} else {
				$this->setAttr('autoplay', $value);
			}
		}

		/**
		 * Attribute controls
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"controls"
		 *        , ""}
		 * @return void
		 **/
		function setAttrControls($value) {
			if (RendererConf::developing &&
					!in_array($value, array('controls', ''))) {
				throw new Exception($this->attrExc('controls', $value));
			} else {
				$this->setAttr('controls', $value);
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
		 * Attribute loop
		 *  - Warning Not supported in Opera.
		 * @param string $value value of the attribute in set {"loop"
		 *        , ""}
		 * @return void
		 **/
		function setAttrLoop($value) {
			if (RendererConf::developing &&
					!in_array($value, array('loop', ''))) {
				throw new Exception($this->attrExc('loop', $value));
			} else {
				$this->setAttr('loop', $value);
			}
		}

		/**
		 * Attribute muted
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"muted"
		 *        , ""}
		 * @return void
		 **/
		function setAttrMuted($value) {
			if (RendererConf::developing &&
					!in_array($value, array('muted', ''))) {
				throw new Exception($this->attrExc('muted', $value));
			} else {
				$this->setAttr('muted', $value);
			}
		}

		/**
		 * Attribute poster
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrPoster($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('poster', $value));
			} else {
				$this->setAttr('poster', $value);
			}
		}

		/**
		 * Attribute preload
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"auto"
		 *        , "metadata", "none"}
		 * @return void
		 **/
		function setAttrPreload($value) {
			if (RendererConf::developing &&
					!in_array($value, array('auto', 'metadata'
							, 'none'))) {
				throw new Exception($this->attrExc('preload', $value));
			} else {
				$this->setAttr('preload', $value);
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
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return void
		 **/
		function addText($text) {
			parent::addText($text);
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
