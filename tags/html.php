<?php

	/**
	 * Defines the root of an HTML document
	 * Supported by all known browsers.
	 **/
	class Html extends GlobalAttributes {

		/**
		 * Tag 'html'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;html /&gt</code>,
		 *    <code>&lt;html&gt;</code>
		 *    <code>&lt;/html&gt;</code> and
		 *    <code>&lt;html&gt;&lt;/html&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;html&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/html&gt;</code> or
		 *    <code>&lt;html&gt;$value&lt;/html&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('html', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute manifest
		 *  - Warning Not supported in Internet Explorer.
		 * @param string $value value of the attribute
		 * @return Html
		 **/
		function setAttrManifest($value) {
			if (H5R_DEV &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('manifest', $value));
			} else {
				$this->setAttr('manifest', $value);
			}
			return $this;
		}

		/**
		 * Attribute xmlns
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"http://www.w3.org/1999/xhtml"}
		 * @return Html
		 **/
		function setAttrXmlns($value) {
			if (H5R_DEV &&
					!in_array($value, array('http://www.w3.org/1999/xhtml'))) {
				throw new Exception($this->attrExc('xmlns', $value));
			} else {
				$this->setAttr('xmlns', $value);
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
		 * @return Html
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
			return "<!DOCTYPE HTML>".(H5R_ONELINE ? "" : "\n").parent::__toString();
		}
	}

?>
