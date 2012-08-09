<?php

	/**
	 * Defines a short quotation
	 * Supported by all known browsers.
	 **/
	class Q extends EventAndGlobalAttributes {

		/**
		 * Tag 'q'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;q /&gt</code>,
		 *    <code>&lt;q&gt;</code>
		 *    <code>&lt;/q&gt;</code> and
		 *    <code>&lt;q&gt;&lt;/q&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;q&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/q&gt;</code> or
		 *    <code>&lt;q&gt;$value&lt;/q&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('q', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute cite
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrCite($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('cite', $value));
			} else {
				$this->setAttr('cite', $value);
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
