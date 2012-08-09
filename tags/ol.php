<?php

	/**
	 * Defines an ordered list
	 * Supported by all known browsers.
	 **/
	class Ol extends EventAndGlobalAttributes {

		/**
		 * Tag 'ol'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;ol /&gt</code>,
		 *    <code>&lt;ol&gt;</code>
		 *    <code>&lt;/ol&gt;</code> and
		 *    <code>&lt;ol&gt;&lt;/ol&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;ol&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/ol&gt;</code> or
		 *    <code>&lt;ol&gt;$value&lt;/ol&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('ol', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute reversed
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera and Safari.
		 * @param string $value value of the attribute in set {"reversed"
		 *        , ""}
		 * @return void
		 **/
		function setAttrReversed($value) {
			if (RendererConf::developing &&
					!in_array($value, array('reversed', ''))) {
				throw new Exception($this->attrExc('reversed', $value));
			} else {
				$this->setAttr('reversed', $value);
			}
		}

		/**
		 * Attribute start
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrStart($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('start', $value));
			} else {
				$this->setAttr('start', $value);
			}
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"1"
		 *        , "A", "a", "I", "i"
		 *        }
		 * @return void
		 **/
		function setAttrType($value) {
			if (RendererConf::developing &&
					!in_array($value, array('1', 'A'
							, 'a', 'I', 'i'))) {
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
