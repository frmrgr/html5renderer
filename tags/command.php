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
		 * @param string $value value of the attribute in set {"checked",
		 *        "" }
		 * @return Command
		 **/
		function setAttrChecked($value) {
			if (H5R_DEV &&
					!in_array($value, array('checked', ''))) {
				throw new Exception($this->attrExc('checked', $value));
			} else {
				$this->setAttr('checked', $value);
			}
			return $this;
		}

		/**
		 * Attribute disabled
		 *  - Warning Not supported in Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"disabled",
		 *        "" }
		 * @return Command
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
		 * Attribute icon
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Command
		 **/
		function setAttrIcon($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('icon', $value));
			} else {
				$this->setAttr('icon', $value);
			}
			return $this;
		}

		/**
		 * Attribute label
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Command
		 **/
		function setAttrLabel($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('label', $value));
			} else {
				$this->setAttr('label', $value);
			}
			return $this;
		}

		/**
		 * Attribute radiogroup
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return Command
		 **/
		function setAttrRadiogroup($value) {
			if (H5R_DEV &&
					!RendererValidators::isGroupname($value)) {
				throw new Exception($this->attrExc('radiogroup', $value));
			} else {
				$this->setAttr('radiogroup', $value);
			}
			return $this;
		}

		/**
		 * Attribute type
		 *  - Warning Not supported in Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"checkbox",
		 *        "command", "radio" }
		 * @return Command
		 **/
		function setAttrType($value) {
			if (H5R_DEV &&
					!in_array($value, array('checkbox', 'command',
							'radio'))) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
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
		 * @return Command
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
