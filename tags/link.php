<?php

	/**
	 * Defines the relationship between a document and an external resource (most used to link to style sheets)
	 * Supported by all known browsers.
	 **/
	class Link extends EventAndGlobalAttributes {

		/**
		 * Tag 'link'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;link /&gt</code>,
		 *    <code>&lt;link&gt;</code>
		 *    <code>&lt;/link&gt;</code> and
		 *    <code>&lt;link&gt;&lt;/link&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;link&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/link&gt;</code> or
		 *    <code>&lt;link&gt;$value&lt;/link&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('link', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute href
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Link
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
		 * @return Link
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
		 * @return Link
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
		 *        "archives", "author", "bookmark", "external",
		 *        "first", "help", "icon", "last",
		 *        "licence", "next", "nofollow", "noreferrer",
		 *        "pingback", "prefetch", "prev", "search",
		 *        "sidebar", "stylesheet", "tag", "up"}
		 * @return Link
		 **/
		function setAttrRel($value) {
			if (H5R_DEV &&
					!in_array($value, array('alternate', 'archives',
							'author', 'bookmark', 'external', 'first',
							'help', 'icon', 'last', 'licence',
							'next', 'nofollow', 'noreferrer', 'pingback',
							'prefetch', 'prev', 'search', 'sidebar',
							'stylesheet', 'tag', 'up'))) {
				throw new Exception($this->attrExc('rel', $value));
			} else {
				$this->setAttr('rel', $value);
			}
			return $this;
		}

		/**
		 * Attribute sizes
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Link
		 **/
		function setAttrSizes($value) {
			if (H5R_DEV &&
					!RendererValidators::isSizes($value)) {
				throw new Exception($this->attrExc('sizes', $value));
			} else {
				$this->setAttr('sizes', $value);
			}
			return $this;
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Link
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
		 * @return Link
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
