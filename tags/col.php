<?php

	/**
	 * Specifies column properties for each column within a <colgroup> element 
	 * Supported by all known browsers.
	 **/
	class Col extends EventAndGlobalAttributes {

		/**
		 * Tag 'col'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;col /&gt</code>,
		 *    <code>&lt;col&gt;</code>
		 *    <code>&lt;/col&gt;</code> and
		 *    <code>&lt;col&gt;&lt;/col&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;col&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/col&gt;</code> or
		 *    <code>&lt;col&gt;$value&lt;/col&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('col', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute span
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrSpan($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('span', $value));
			} else {
				$this->setAttr('span', $value);
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
