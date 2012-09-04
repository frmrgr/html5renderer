<?php

	/**
	 * Isolates a part of text that might be formatted in a different direction from other text outside it
	 *  - Warning Not supported in Internet Explorer, Opera and Safari.
	 **/
	class Bdi extends EventAndGlobalAttributes {

		/**
		 * Tag 'bdi'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;bdi /&gt</code>,
		 *    <code>&lt;bdi&gt;</code>
		 *    <code>&lt;/bdi&gt;</code> and
		 *    <code>&lt;bdi&gt;&lt;/bdi&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;bdi&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/bdi&gt;</code> or
		 *    <code>&lt;bdi&gt;$value&lt;/bdi&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('bdi', in_array($type, array(1,2,3)) ?
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
		 * @return Bdi
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
