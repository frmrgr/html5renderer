<?php

	/**
	 * Defines style information for a document
	 * Supported by all known browsers.
	 **/
	class Style extends EventAndGlobalAttributes {

		/**
		 * Tag 'style'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;style /&gt</code>,
		 *    <code>&lt;style&gt;</code>
		 *    <code>&lt;/style&gt;</code> and
		 *    <code>&lt;style&gt;&lt;/style&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;style&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/style&gt;</code> or
		 *    <code>&lt;style&gt;$value&lt;/style&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('style', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"text/css"}
		 * @return Style
		 **/
		function setAttrType($value) {
			if (H5R_DEV &&
					!in_array($value, array('text/css'))) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
			}
			return $this;
		}

		/**
		 * Create a rule
		 * @return CssRule
		 **/
		static function rule() {
			return new CssRule();
		}

		/**
		 * Attribute media
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Style
		 **/
		function setAttrMedia($value) {
			if (H5R_DEV &&
					!RendererValidators::isMediaQuery($value)) {
				throw new Exception($this->attrExc('media', $value));
			} else {
				$this->setAttr('media', $value);
			}
			return $this;
		}

		/**
		 * Attribute scoped
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"scoped",
		 *        "" }
		 * @return Style
		 **/
		function setAttrScoped($value) {
			if (H5R_DEV &&
					!in_array($value, array('scoped', ''))) {
				throw new Exception($this->attrExc('scoped', $value));
			} else {
				$this->setAttr('scoped', $value);
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
		 * @return Style
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a new rule
		 * @param CssRule $rule The added rule
		 * @return Style
		 **/
		function addRule($rule) {
			$condition = '';
			$conditionType = 1;
			$this->addLines($rule->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return Style
		 **/
		function addText($text) {
			parent::addText($text);
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
