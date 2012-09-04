<?php

	/**
	 * Used to draw graphics, on the fly, via scripting (usually JavaScript)
	 * Supported by all known browsers.
	 **/
	class Canvas extends EventAndGlobalAttributes {

		/**
		 * Tag 'canvas'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;canvas /&gt</code>,
		 *    <code>&lt;canvas&gt;</code>
		 *    <code>&lt;/canvas&gt;</code> and
		 *    <code>&lt;canvas&gt;&lt;/canvas&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;canvas&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/canvas&gt;</code> or
		 *    <code>&lt;canvas&gt;$value&lt;/canvas&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('canvas', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute height
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Canvas
		 **/
		function setAttrHeight($value) {
			if (H5R_DEV &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('height', $value));
			} else {
				$this->setAttr('height', $value);
			}
			return $this;
		}

		/**
		 * Attribute width
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Canvas
		 **/
		function setAttrWidth($value) {
			if (H5R_DEV &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('width', $value));
			} else {
				$this->setAttr('width', $value);
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
		 * @return Canvas
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
