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
		 * @return Area
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
		 * Attribute coords
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Area
		 **/
		function setAttrCoords($value) {
			if (H5R_DEV &&
					!RendererValidators::isCoordinates($value)) {
				throw new Exception($this->attrExc('coords', $value));
			} else {
				$this->setAttr('coords', $value);
			}
			return $this;
		}

		/**
		 * Attribute href
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Area
		 **/
		function setAttrHref($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('href', $value));
			} else {
				$this->setAttr('href', $value);
			}
			return $this;
		}

		/**
		 * Attribute hreflang
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Area
		 **/
		function setAttrHreflang($value) {
			if (H5R_DEV &&
					!RendererValidators::isLanguageCode($value)) {
				throw new Exception($this->attrExc('hreflang', $value));
			} else {
				$this->setAttr('hreflang', $value);
			}
			return $this;
		}

		/**
		 * Attribute media
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Area
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
		 * Attribute rel
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"alternate",
		 *        "author", "bookmark", "help", "license",
		 *        "next", "nofollow", "noreferrer", "prefetch",
		 *        "prev", "search", "tag" }
		 * @return Area
		 **/
		function setAttrRel($value) {
			if (H5R_DEV &&
					!in_array($value, array('alternate', 'author',
							'bookmark', 'help', 'license', 'next',
							'nofollow', 'noreferrer', 'prefetch', 'prev',
							'search', 'tag'))) {
				throw new Exception($this->attrExc('rel', $value));
			} else {
				$this->setAttr('rel', $value);
			}
			return $this;
		}

		/**
		 * Attribute shape
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"default",
		 *        "rect", "circle", "poly" }
		 * @return Area
		 **/
		function setAttrShape($value) {
			if (H5R_DEV &&
					!in_array($value, array('default', 'rect',
							'circle', 'poly'))) {
				throw new Exception($this->attrExc('shape', $value));
			} else {
				$this->setAttr('shape', $value);
			}
			return $this;
		}

		/**
		 * Attribute target
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"_blank",
		 *        "_parent", "_self", "_top", "framename"}
		 * @return Area
		 **/
		function setAttrTarget($value) {
			if (H5R_DEV &&
					!in_array($value, array('_blank', '_parent',
							'_self', '_top', 'framename'))) {
				throw new Exception($this->attrExc('target', $value));
			} else {
				$this->setAttr('target', $value);
			}
			return $this;
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Area
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
		 * @return Area
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
