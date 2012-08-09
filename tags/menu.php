<?php

	/**
	 * Defines a list/menu of commands
	 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
	 **/
	class Menu extends EventAndGlobalAttributes {

		/**
		 * Tag 'menu'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;menu /&gt</code>,
		 *    <code>&lt;menu&gt;</code>
		 *    <code>&lt;/menu&gt;</code> and
		 *    <code>&lt;menu&gt;&lt;/menu&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;menu&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/menu&gt;</code> or
		 *    <code>&lt;menu&gt;$value&lt;/menu&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('menu', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute label
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrLabel($value) {
			if (RendererConf::developing &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('label', $value));
			} else {
				$this->setAttr('label', $value);
			}
		}

		/**
		 * Attribute type
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"context"
		 *        , "toolbar", "list"}
		 * @return void
		 **/
		function setAttrType($value) {
			if (RendererConf::developing &&
					!in_array($value, array('context', 'toolbar'
							, 'list'))) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
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
