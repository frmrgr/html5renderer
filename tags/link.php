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
		 *        , "archives", "author", "bookmark", "external"
		 *        , "first", "help", "icon", "last"
		 *        , "licence", "next", "nofollow", "noreferrer"
		 *        , "pingback", "prefetch", "prev", "search"
		 *        , "sidebar", "stylesheet", "tag", "up"
		 *        }
		 * @return void
		 **/
		function setAttrRel($value) {
			if (RendererConf::developing &&
					!in_array($value, array('alternate', 'archives'
							, 'author', 'bookmark', 'external', 'first'
							, 'help', 'icon', 'last', 'licence'
							, 'next', 'nofollow', 'noreferrer', 'pingback'
							, 'prefetch', 'prev', 'search', 'sidebar'
							, 'stylesheet', 'tag', 'up'))) {
				throw new Exception($this->attrExc('rel', $value));
			} else {
				$this->setAttr('rel', $value);
			}
		}

		/**
		 * Attribute sizes
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrSizes($value) {
			if (RendererConf::developing &&
					!RendererValidators::isSizes($value)) {
				throw new Exception($this->attrExc('sizes', $value));
			} else {
				$this->setAttr('sizes', $value);
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
