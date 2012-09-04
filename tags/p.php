<?php

	/**
	 * Defines a paragraph
	 * Supported by all known browsers.
	 **/
	class P extends EventAndGlobalAttributes {

		/**
		 * Tag 'p'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;p /&gt</code>,
		 *    <code>&lt;p&gt;</code>
		 *    <code>&lt;/p&gt;</code> and
		 *    <code>&lt;p&gt;&lt;/p&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;p&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/p&gt;</code> or
		 *    <code>&lt;p&gt;$value&lt;/p&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('p', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
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
		 * @return P
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return P
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
