<?php

	/**
	 * Defines a caption for a <figure> element
	 * Supported by all known browsers.
	 **/
	class Figcaption extends EventAndGlobalAttributes {

		/**
		 * Tag 'figcaption'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;figcaption /&gt</code>,
		 *    <code>&lt;figcaption&gt;</code>
		 *    <code>&lt;/figcaption&gt;</code> and
		 *    <code>&lt;figcaption&gt;&lt;/figcaption&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;figcaption&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/figcaption&gt;</code> or
		 *    <code>&lt;figcaption&gt;$value&lt;/figcaption&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('figcaption', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
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
		 * @return Figcaption
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
