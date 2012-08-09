<?php

	/**
	 * Defines a date/time
	 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
	 **/
	class Time extends EventAndGlobalAttributes {

		/**
		 * Tag 'time'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;time /&gt</code>,
		 *    <code>&lt;time&gt;</code>
		 *    <code>&lt;/time&gt;</code> and
		 *    <code>&lt;time&gt;&lt;/time&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;time&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/time&gt;</code> or
		 *    <code>&lt;time&gt;$value&lt;/time&gt;</code> correspondingly.
		 **/
		function __construct($type = 3, $value = '') {
			parent::__construct('time', in_array($type, array(1,2,3)) ?
					$type : 3, $value);
		}

		/**
		 * Attribute datetime
		 *  - Warning Not supported in Internet Explorer, Mozilla Firefox, Opera, Google Ghrome and Safari.
		 * @param string $value value of the attribute
		 * @return void
		 **/
		function setAttrDatetime($value) {
			if (RendererConf::developing &&
					!RendererValidators::isDatetime($value)) {
				throw new Exception($this->attrExc('datetime', $value));
			} else {
				$this->setAttr('datetime', $value);
			}
		}

		/**
		 * Attribute pubdate
		 * Supported by all known browsers.
		 * @param string $value value of the attribute in set {"pubdate"
		 *        }
		 * @return void
		 **/
		function setAttrPubdate($value) {
			if (RendererConf::developing &&
					!in_array($value, array('pubdate'))) {
				throw new Exception($this->attrExc('pubdate', $value));
			} else {
				$this->setAttr('pubdate', $value);
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
