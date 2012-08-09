<?php

	/**
	 * Represents the progress of a task
	 *  - Warning Not supported in Internet Explorer and Safari.
	 **/
	class Progress extends EventAndGlobalAttributes {

		/**
		 * Tag 'progress'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;progress /&gt</code>,
		 *    <code>&lt;progress&gt;</code>
		 *    <code>&lt;/progress&gt;</code> and
		 *    <code>&lt;progress&gt;&lt;/progress&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;progress&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/progress&gt;</code> or
		 *    <code>&lt;progress&gt;$value&lt;/progress&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('progress', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute max
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrMax($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('max', $value));
			} else {
				$this->setAttr('max', $value);
			}
		}

		/**
		 * Attribute value
		 *  - Warning Not supported in Internet Explorer and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrValue($value) {
			if (RendererConf::developing &&
					!RendererValidators::isNumber($value)) {
				throw new Exception($this->attrExc('value', $value));
			} else {
				$this->setAttr('value', $value);
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
