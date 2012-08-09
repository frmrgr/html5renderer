<?php

	/**
	 * Specifies the base URL/target for all relative URLs in a document
	 * Supported by all known browsers.
	 **/
	class Base extends GlobalAttributes {

		/**
		 * Tag 'base'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;base /&gt</code>,
		 *    <code>&lt;base&gt;</code>
		 *    <code>&lt;/base&gt;</code> and
		 *    <code>&lt;base&gt;&lt;/base&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;base&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/base&gt;</code> or
		 *    <code>&lt;base&gt;$value&lt;/base&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('base', in_array($type, array(1,2,3)) ?
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
