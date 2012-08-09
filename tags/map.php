<?php

	/**
	 * Defines a client-side image-map 
	 * Supported by all known browsers.
	 **/
	class Map extends EventAndGlobalAttributes {

		/**
		 * Tag 'map'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;map /&gt</code>,
		 *    <code>&lt;map&gt;</code>
		 *    <code>&lt;/map&gt;</code> and
		 *    <code>&lt;map&gt;&lt;/map&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;map&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/map&gt;</code> or
		 *    <code>&lt;map&gt;$value&lt;/map&gt;</code> correspondingly.
		 **/
		function __construct($type = 2, $value = '') {
			parent::__construct('map', in_array($type, array(1,2,3)) ?
					$type : 2, $value);
		}

		/**
		 * Attribute name
		 * Supported by all known browsers.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrName($value) {
			if (RendererConf::developing &&
					!RendererValidators::isMapname($value)) {
				throw new Exception($this->attrExc('name', $value));
			} else {
				$this->setAttr('name', $value);
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
