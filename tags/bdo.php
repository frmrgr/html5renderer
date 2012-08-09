<?php

	/**
	 * Overrides the current text direction
	 * Supported by all known browsers.
	 **/
	class Bdo extends EventAndGlobalAttributes {

		/**
		 * Tag 'bdo'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;bdo /&gt</code>,
		 *    <code>&lt;bdo&gt;</code>
		 *    <code>&lt;/bdo&gt;</code> and
		 *    <code>&lt;bdo&gt;&lt;/bdo&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;bdo&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/bdo&gt;</code> or
		 *    <code>&lt;bdo&gt;$value&lt;/bdo&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('bdo', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute dir
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"ltr"
		 *        , "rtl"}
		 * @return void
		 **/
		function setAttrDir($value) {
			if (RendererConf::developing &&
					!in_array($value, array('ltr', 'rtl'))) {
				throw new Exception($this->attrExc('dir', $value));
			} else {
				$this->setAttr('dir', $value);
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
