<?php

	/**
	 * Defines an article
	 * Supported by all known browsers.
	 **/
	class Article extends EventAndGlobalAttributes {

		/**
		 * Tag 'article'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;article /&gt</code>,
		 *    <code>&lt;article&gt;</code>
		 *    <code>&lt;/article&gt;</code> and
		 *    <code>&lt;article&gt;&lt;/article&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;article&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/article&gt;</code> or
		 *    <code>&lt;article&gt;$value&lt;/article&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('article', in_array($type, array(1,2,3)) ?
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
		 * @return Article
		 **/
		function addTag($tag, $condition = '', $conditionType = 1) {
			$this->addLines($tag->getLines(), $condition, $conditionType);
			return $this;
		}

		/**
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return Article
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
