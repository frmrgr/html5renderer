<?php

	/**
	 * Defines a text that has been inserted into a document
	 * Supported by all known browsers.
	 **/
	class Ins extends EventAndGlobalAttributes {

		/**
		 * Tag 'ins'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;ins /&gt</code>,
		 *    <code>&lt;ins&gt;</code>
		 *    <code>&lt;/ins&gt;</code> and
		 *    <code>&lt;ins&gt;&lt;/ins&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;ins&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/ins&gt;</code> or
		 *    <code>&lt;ins&gt;$value&lt;/ins&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('ins', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute cite
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Ins
		 **/
		function setAttrCite($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('cite', $value));
			} else {
				$this->setAttr('cite', $value);
			}
			return $this;
		}

		/**
		 * Attribute datetime
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Ins
		 **/
		function setAttrDatetime($value) {
			if (H5R_DEV &&
					!RendererValidators::isYyyyMmDdthhMmSstzd($value)) {
				throw new Exception($this->attrExc('datetime', $value));
			} else {
				$this->setAttr('datetime', $value);
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
		 * @return Ins
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
