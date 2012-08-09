<?php

	/**
	 * Defines a group of related options in a drop-down list
	 * Supported by all known browsers.
	 **/
	class Optgroup extends EventAndGlobalAttributes {

		/**
		 * Tag 'optgroup'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;optgroup /&gt</code>,
		 *    <code>&lt;optgroup&gt;</code>
		 *    <code>&lt;/optgroup&gt;</code> and
		 *    <code>&lt;optgroup&gt;&lt;/optgroup&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;optgroup&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/optgroup&gt;</code> or
		 *    <code>&lt;optgroup&gt;$value&lt;/optgroup&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('optgroup', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute label
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrLabel($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('label', $value));
			} else {
				$this->setAttr('label', $value);
			}
		}

		/**
		 * Attribute disabled
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"disabled"
		 *        , ""}
		 * @return void
		 **/
		function setAttrDisabled($value) {
			if (RendererConf::developing &&
					!in_array($value, array('disabled', ''))) {
				throw new Exception($this->attrExc('disabled', $value));
			} else {
				$this->setAttr('disabled', $value);
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
