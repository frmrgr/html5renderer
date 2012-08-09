<?php

	/**
	 * Defines a label for an input element
	 * Supported by all known browsers.
	 **/
	class Label extends EventAndGlobalAttributes {

		/**
		 * Tag 'label'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;label /&gt</code>,
		 *    <code>&lt;label&gt;</code>
		 *    <code>&lt;/label&gt;</code> and
		 *    <code>&lt;label&gt;&lt;/label&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;label&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/label&gt;</code> or
		 *    <code>&lt;label&gt;$value&lt;/label&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('label', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute for
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrFor($value) {
			if (RendererConf::developing &&
					!RendererValidators::isElementId($value)) {
				throw new Exception($this->attrExc('for', $value));
			} else {
				$this->setAttr('for', $value);
			}
		}

		/**
		 * Attribute form
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrForm($value) {
			if (RendererConf::developing &&
					!RendererValidators::isFormId($value)) {
				throw new Exception($this->attrExc('form', $value));
			} else {
				$this->setAttr('form', $value);
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
