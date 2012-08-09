<?php

	/**
	 * Defines a key-pair generator field (for forms)
	 *  - Warning Not supported in Internet Explorer.
	 **/
	class Keygen extends EventAndGlobalAttributes {

		/**
		 * Tag 'keygen'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;keygen /&gt</code>,
		 *    <code>&lt;keygen&gt;</code>
		 *    <code>&lt;/keygen&gt;</code> and
		 *    <code>&lt;keygen&gt;&lt;/keygen&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;keygen&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/keygen&gt;</code> or
		 *    <code>&lt;keygen&gt;$value&lt;/keygen&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('keygen', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute autofocus
		 *  - Warning Not supported in Internet Explorer and Mozilla Firefox.
		 * @param string $value value of the attribute in set {"autofocus"
		 *        , ""}
		 * @return void
		 **/
		function setAttrAutofocus($value) {
			if (RendererConf::developing &&
					!in_array($value, array('autofocus', ''))) {
				throw new Exception($this->attrExc('autofocus', $value));
			} else {
				$this->setAttr('autofocus', $value);
			}
		}

		/**
		 * Attribute challenge
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrChallenge($value) {
			if (RendererConf::developing &&
					!RendererValidators::isChallenge($value)) {
				throw new Exception($this->attrExc('challenge', $value));
			} else {
				$this->setAttr('challenge', $value);
			}
		}

		/**
		 * Attribute disabled
		 *  - Warning Not supported in Internet Explorer.
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
		 * Attribute form
		 *  - Warning Not supported in Internet Explorer and Safari.
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
		 * Attribute keytype
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"rsa"
		 *        , "dsa", "ec"}
		 * @return void
		 **/
		function setAttrKeytype($value) {
			if (RendererConf::developing &&
					!in_array($value, array('rsa', 'dsa'
							, 'ec'))) {
				throw new Exception($this->attrExc('keytype', $value));
			} else {
				$this->setAttr('keytype', $value);
			}
		}

		/**
		 * Attribute name
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrName($value) {
			if (RendererConf::developing &&
					!RendererValidators::isName($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
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
