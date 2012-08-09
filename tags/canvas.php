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
		 * @return void
		 **/
		function setAttrHeight($value) {
			if (RendererConf::developing &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('height', $value));
			} else {
				$this->setAttr('height', $value);
			}
		}

		/**
		 * Attribute width
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrWidth($value) {
			if (RendererConf::developing &&
					!RendererValidators::isPixels($value)) {
				throw new Exception($this->attrExc('width', $value));
			} else {
				$this->setAttr('width', $value);
			}
		}

		/**
		 * Adding a new inner tag
		 * @param type $tag The adding inner tag
		 * @return void
		 **/
		function addTag($tag) {
			$this->addLines($tag->getLines());
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
