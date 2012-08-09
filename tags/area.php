<?php

	/**
	 * Defines an area inside an image-map
	 * Supported by all known browsers.
	 **/
	class Area extends EventAndGlobalAttributes {

		/**
		 * Tag 'area'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;area /&gt</code>,
		 *    <code>&lt;area&gt;</code>
		 *    <code>&lt;/area&gt;</code> and
		 *    <code>&lt;area&gt;&lt;/area&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;area&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/area&gt;</code> or
		 *    <code>&lt;area&gt;$value&lt;/area&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('area', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
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
		 * Attribute coords
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrCoords($value) {
			if (RendererConf::developing &&
					!RendererValidators::isCoordinates($value)) {
				throw new Exception($this->attrExc('coords', $value));
			} else {
				$this->setAttr('coords', $value);
			}
		}

		/**
		 * Attribute href
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrHref($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('href', $value));
			} else {
				$this->setAttr('href', $value);
			}
		}

		/**
		 * Attribute hreflang
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrHreflang($value) {
			if (RendererConf::developing &&
					!RendererValidators::isLanguageCode($value)) {
				throw new Exception($this->attrExc('hreflang', $value));
			} else {
				$this->setAttr('hreflang', $value);
			}
		}

		/**
		 * Attribute media
		 * Supported by all known browsers.
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
		 * Attribute rel
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"alternate"
		 *        , "author", "bookmark", "help", "license"
		 *        , "next", "nofollow", "noreferrer", "prefetch"
		 *        , "prev", "search", "tag"}
		 * @return void
		 **/
		function setAttrRel($value) {
			if (RendererConf::developing &&
					!in_array($value, array('alternate', 'author'
							, 'bookmark', 'help', 'license', 'next'
							, 'nofollow', 'noreferrer', 'prefetch', 'prev'
							, 'search', 'tag'))) {
				throw new Exception($this->attrExc('rel', $value));
			} else {
				$this->setAttr('rel', $value);
			}
		}

		/**
		 * Attribute shape
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"default"
		 *        , "rect", "circle", "poly"}
		 * @return void
		 **/
		function setAttrShape($value) {
			if (RendererConf::developing &&
					!in_array($value, array('default', 'rect'
							, 'circle', 'poly'))) {
				throw new Exception($this->attrExc('shape', $value));
			} else {
				$this->setAttr('shape', $value);
			}
		}

		/**
		 * Attribute target
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"_blank"
		 *        , "_parent", "_self", "_top", "framename"
		 *        }
		 * @return void
		 **/
		function setAttrTarget($value) {
			if (RendererConf::developing &&
					!in_array($value, array('_blank', '_parent'
							, '_self', '_top', 'framename'))) {
				throw new Exception($this->attrExc('target', $value));
			} else {
				$this->setAttr('target', $value);
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
