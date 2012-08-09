<?php

	/**
	 * Defines a text that has been inserted into a document
	 * Supported by all known browsers.
	 **/
	class Ins extends EventAndGlobalAttributes {

		/**
		 * Tag 'ins'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;ins /&gt</code>,
		 *    <code>&lt;ins&gt;</code>
		 *    <code>&lt;/ins&gt;</code> and
		 *    <code>&lt;ins&gt;&lt;/ins&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;ins&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/ins&gt;</code> or
		 *    <code>&lt;ins&gt;$value&lt;/ins&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('ins', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute cite
		 * Supported by all known browsers.
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
		 * Attribute datetime
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrDatetime($value) {
			if (RendererConf::developing &&
					!RendererValidators::isYyyyMmDdthhMmSstzd($value)) {
				throw new Exception($this->attrExc('datetime', $value));
			} else {
				$this->setAttr('datetime', $value);
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
