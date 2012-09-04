<?php

	/**
	 * Defines a section in a document
	 * Supported by all known browsers.
	 **/
	class Div extends EventAndGlobalAttributes {

		/**
		 * Tag 'div'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;div /&gt</code>,
		 *    <code>&lt;div&gt;</code>
		 *    <code>&lt;/div&gt;</code> and
		 *    <code>&lt;div&gt;&lt;/div&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;div&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/div&gt;</code> or
		 *    <code>&lt;div&gt;$value&lt;/div&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('div', in_array($type, array(1,2,3)) ?
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
		 * @return Div
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return Div
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
