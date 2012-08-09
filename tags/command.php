<?php

	/**
	 * Defines a command button that a user can invoke
	 *  - Warning Not supported in Mozilla Firefox, Opera, Google Ghrome and Safari.
	 **/
	class Command extends EventAndGlobalAttributes {

		/**
		 * Tag 'command'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;command /&gt</code>,
		 *    <code>&lt;command&gt;</code>
		 *    <code>&lt;/command&gt;</code> and
		 *    <code>&lt;command&gt;&lt;/command&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;command&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/command&gt;</code> or
		 *    <code>&lt;command&gt;$value&lt;/command&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('command', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute checked
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"checked"
		 *        , ""}
		 * @return void
		 **/
		function setAttrChecked($value) {
			if (RendererConf::developing &&
					!in_array($value, array('checked', ''))) {
				throw new Exception($this->attrExc('checked', $value));
			} else {
				$this->setAttr('checked', $value);
			}
		}

		/**
		 * Attribute disabled
		 *  - Warning Not supported in Mozilla Firefox, Opera, Google Ghrome and Safari.
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
		 * Attribute icon
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrIcon($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('icon', $value));
			} else {
				$this->setAttr('icon', $value);
			}
		}

		/**
		 * Attribute label
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
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
		 * Attribute radiogroup
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrRadiogroup($value) {
			if (RendererConf::developing &&
					!RendererValidators::isGroupname($value)) {
				throw new Exception($this->attrExc('radiogroup', $value));
			} else {
				$this->setAttr('radiogroup', $value);
			}
		}

		/**
		 * Attribute type
		 *  - Warning Not supported in Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"checkbox"
		 *        , "command", "radio"}
		 * @return void
		 **/
		function setAttrType($value) {
			if (RendererConf::developing &&
					!in_array($value, array('checkbox', 'command'
							, 'radio'))) {
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
