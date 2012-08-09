<?php

	/**
	 * Defines style information for a document
	 * Supported by all known browsers.
	 **/
	class Style extends EventAndGlobalAttributes {

		/**
		 * Tag 'style'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;style /&gt</code>,
		 *    <code>&lt;style&gt;</code>
		 *    <code>&lt;/style&gt;</code> and
		 *    <code>&lt;style&gt;&lt;/style&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;style&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/style&gt;</code> or
		 *    <code>&lt;style&gt;$value&lt;/style&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('style', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute type
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"text/css"
		 *        }
		 * @return void
		 **/
		function setAttrType($value) {
			if (RendererConf::developing &&
					!in_array($value, array('text/css'))) {
				throw new Exception($this->attrExc('type', $value));
			} else {
				$this->setAttr('type', $value);
			}
		}

		/**
		 * Attribute media
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrMedia($value) {
			if (RendererConf::developing &&
					!RendererValidators::isMediaQuery($value)) {
				throw new Exception($this->attrExc('media', $value));
			} else {
				$this->setAttr('media', $value);
			}
		}

		/**
		 * Attribute scoped
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute in set {"scoped"
		 *        , ""}
		 * @return void
		 **/
		function setAttrScoped($value) {
			if (RendererConf::developing &&
					!in_array($value, array('scoped', ''))) {
				throw new Exception($this->attrExc('scoped', $value));
			} else {
				$this->setAttr('scoped', $value);
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
		 * Adding a simple text. It works only if tag type is 2.
		 * @param string $tag The adding inner tag
		 * @return void
		 **/
		function addText($text) {
			parent::addText($text);
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
