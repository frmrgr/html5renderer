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
		 * @param string $value value of the attribute in set {"autofocus",
		 *        "" }
		 * @return Keygen
		 **/
		function setAttrAutofocus($value) {
			if (H5R_DEV &&
					!in_array($value, array('autofocus', ''))) {
				throw new Exception($this->attrExc('autofocus', $value));
			} else {
				$this->setAttr('autofocus', $value);
			}
			return $this;
		}

		/**
		 * Attribute challenge
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"challenge"}
		 * @return Keygen
		 **/
		function setAttrChallenge($value) {
			if (H5R_DEV &&
					!in_array($value, array('challenge'))) {
				throw new Exception($this->attrExc('challenge', $value));
			} else {
				$this->setAttr('challenge', $value);
			}
			return $this;
		}

		/**
		 * Attribute disabled
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute in set {"disabled",
		 *        "" }
		 * @return Keygen
		 **/
		function setAttrDisabled($value) {
			if (H5R_DEV &&
					!in_array($value, array('disabled', ''))) {
				throw new Exception($this->attrExc('disabled', $value));
			} else {
				$this->setAttr('disabled', $value);
			}
			return $this;
		}

		/**
		 * Attribute form
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return Keygen
		 **/
		function setAttrForm($value) {
			if (H5R_DEV &&
					!RendererValidators::isFormId($value)) {
				throw new Exception($this->attrExc('form', $value));
			} else {
				$this->setAttr('form', $value);
			}
			return $this;
		}

		/**
		 * Attribute keytype
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute in set {"rsa",
		 *        "dsa", "ec" }
		 * @return Keygen
		 **/
		function setAttrKeytype($value) {
			if (H5R_DEV &&
					!in_array($value, array('rsa', 'dsa',
							'ec'))) {
				throw new Exception($this->attrExc('keytype', $value));
			} else {
				$this->setAttr('keytype', $value);
			}
			return $this;
		}

		/**
		 * Attribute name
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return Keygen
		 **/
		function setAttrName($value) {
			if (H5R_DEV &&
					!RendererValidators::isName($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
			}
			return $this;
		}

		/**
		 * Adding a new inner tag
		 * @param tag $tag The adding inner tag
		 * @param string $condition around the $tag with the $condition
		 *    '<!--[if '.$condition.']>'..'<![endif]-->'
		 *    if $condition != '', default is ''
		 * @param int $conditionType type of conditional (default=1):
		 *   <code>0</code> - '<![if '.$condition.']>' html '<![endif]>'
		 *   <code>1</code> - '<!--[if '.$condition.']>' html '<![endif]-->'
		 *   <code>2</code> - '<!--[if '.$condition.']>-->' html '<!--<![endif]-->'
		 *   <code>3</code> - '<!--[if '.$condition.']><!-->' html '<!--<![endif]-->'
		 * @return Keygen
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
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
