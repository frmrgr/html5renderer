<?php

	/**
	 * Specifies the base URL/target for all relative URLs in a document
	 * Supported by all known browsers.
	 **/
	class Base extends GlobalAttributes {

		/**
		 * Tag 'base'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;base /&gt</code>,
		 *    <code>&lt;base&gt;</code>
		 *    <code>&lt;/base&gt;</code> and
		 *    <code>&lt;base&gt;&lt;/base&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;base&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/base&gt;</code> or
		 *    <code>&lt;base&gt;$value&lt;/base&gt;</code> correspondingly.
		 **/
		function __construct($type = 1, $value = '') {
			parent::__construct('base', in_array($type, array(1,2,3)) ?
					$type : 1, $value);
		}

		/**
		 * Attribute href
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return Base
		 **/
		function setAttrHref($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('href', $value));
			} else {
				$this->setAttr('href', $value);
			}
			return $this;
		}

		/**
		 * Attribute target
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"_blank",
		 *        "_parent", "_self", "_top", "framename"}
		 * @return Base
		 **/
		function setAttrTarget($value) {
			if (H5R_DEV &&
					!in_array($value, array('_blank', '_parent',
							'_self', '_top', 'framename'))) {
				throw new Exception($this->attrExc('target', $value));
			} else {
				$this->setAttr('target', $value);
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
		 * @return Base
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
