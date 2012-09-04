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
		 * @param string $value value of the attribute in set {"reversed",
		 *        "" }
		 * @return Ol
		 **/
		function setAttrReversed($value) {
			if (H5R_DEV &&
					!in_array($value, array('reversed', ''))) {
				throw new Exception($this->attrExc('reversed', $value));
			} else {
				$this->setAttr('reversed', $value);
			}
			return $this;
		}

		/**
		 * Attribute start
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Ol
		 **/
		function setAttrStart($value) {
			if (H5R_DEV &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('start', $value));
			} else {
				$this->setAttr('start', $value);
			}
			return $this;
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"1",
		 *        "A", "a", "I", "i"}
		 * @return Ol
		 **/
		function setAttrType($value) {
			if (H5R_DEV &&
					!in_array($value, array('1', 'A',
							'a', 'I', 'i'))) {
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
		 * @return Ol
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
