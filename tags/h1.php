<?php

	/**
	 * Defines HTML headings
	 * Supported by all known browsers.
	 **/
	class H1 extends EventAndGlobalAttributes {

		/**
		 * Tag 'h1'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h1 /&gt</code>,
		 *    <code>&lt;h1&gt;</code>
		 *    <code>&lt;/h1&gt;</code> and
		 *    <code>&lt;h1&gt;&lt;/h1&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h1&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h1&gt;</code> or
		 *    <code>&lt;h1&gt;$value&lt;/h1&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('h1', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
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
		 * @return H1
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
