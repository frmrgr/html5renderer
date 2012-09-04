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
		 * @return Menu
		 **/
		function setAttrLabel($value) {
			if (H5R_DEV &&
					!RendererValidators::isText($value)) {
				throw new Exception($this->attrExc('label', $value));
			} else {
				$this->setAttr('label', $value);
			}
			return $this;
		}

		/**
		 * Attribute type
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"context",
		 *        "toolbar", "list" }
		 * @return Menu
		 **/
		function setAttrType($value) {
			if (H5R_DEV &&
					!in_array($value, array('context', 'toolbar',
							'list'))) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
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
		 * @return Menu
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
