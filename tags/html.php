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
		 * @return void
		 **/
		function setAttrManifest($value) {
			if (RendererConf::developing &&
					!RendererValidators::isUrl($value)) {
				throw new Exception($this->attrExc('manifest', $value));
			} else {
				$this->setAttr('manifest', $value);
			}
		}

		/**
		 * Attribute xmlns
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"http://www.w3.org/1999/xhtml"
		 *        }
		 * @return void
		 **/
		function setAttrXmlns($value) {
			if (RendererConf::developing &&
					!in_array($value, array('http://www.w3.org/1999/xhtml'))) {
				throw new Exception($this->attrExc('xmlns', $value));
			} else {
				$this->setAttr('xmlns', $value);
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
			return "<!DOCTYPE HTML>\n".parent::__toString();
		}
	}

?>
