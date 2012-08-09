<?php

	/**
	 * Defines a hyperlink
	 * Supported by all known browsers.
	 **/
	class A extends Renderer {

		/**
		 * Tag 'a'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;a /&gt</code>,
		 *    <code>&lt;a&gt;</code>
		 *    <code>&lt;/a&gt;</code> and
		 *    <code>&lt;a&gt;&lt;/a&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;a&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/a&gt;</code> or
		 *    <code>&lt;a&gt;$value&lt;/a&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('a', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
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
