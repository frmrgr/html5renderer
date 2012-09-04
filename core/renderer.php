<?php

/**
 * Renderer - renderign a HTML5 code from php
 * @package HTMLRenderer/core
 * @author Ivo Seeba
 * @copyright 2012 - 2020 Ivo Seeba
 */
class Renderer {

	/**
	 * Set the name of tag.
	 * @var string
	 */
	private $tagName;

	/**
	 * The lines of the tag
	 * @var array
	 */
	private $lines;

	/**
	 * The number of lines
	 * @var int
	 */
	private $tagLen;

	/**
	 * Tag's type
	 * @var int
	 */
	private $type;

	/**
	 * Attributes of the tag
	 * @var array
	 */
	private $attributes = array();

	/**
	 * Value of the tag
	 * @var string
	 */
	private $value;

	/**
	 * Is the first inner tag type value 
	 * @var string
	 */
	private $isObject;
	
	/**
	 * @var string step symbol 
	 */
	private $step;
	
	/**
	 * New line '\n' or ''
	 * @var string
	 */
	private $newLine;

	/**
	 * Constructor
	 * @param string $tagName Tag's name
	 * @param string $type Tag's type
	 * @param string $value Tag's value
	 */
	protected function __construct($tagName, $type, $value) {
		$this->step = H5R_ONELINE ? "" : H5R_STEP;
		$this->newLine = H5R_ONELINE ? "" : "\n";
		$this->tagName = $tagName;
		$this->isObject = gettype($value) == "object";
		$this->type = $this->isObject && $type != 1 ? 2 : $type;
		$this->value = $value;
		$this->tagLen = $this->type;
		$this->lines = ($this->type == 2 ?
							 $this->getInitLiness($value, $tagName) : array(""));
	}

	/**
	 * Generating initial lines of the tag
	 * @param string $value Tag's value
	 * @param string $tagName Tahg's name
	 * @return array The lines of the tags
	 */
	private function getInitLiness($value, $tagName) {
		if ($this->isObject && method_exists($value, "getLines")) {
			$res = array("");
			$lines = $value->getLines();
			foreach ($lines as $line) {
				$res[] = $this->step . $line;
			}
			$res[] = '</' . $tagName . '>';
			return $res;
		}
		if ($value != "") {
			return array("", $this->step . $value, '</' . $tagName . '>');
		}
		return array("", '</' . $tagName . '>');
	}

	/**
	 * Setting attributes 
	 * @return void
	 */
	private function setAttributes() {
		if ($this->type == 1) {
			$this->lines[0] = '<' . $this->tagName .
					  $this->attributes2String() . ' />';
		} else if ($this->type == 2) {
			$this->lines[0] = '<' . $this->tagName .
					  $this->attributes2String() . '>';
		} else {
			$this->lines[0] = '<' . $this->tagName .
					  $this->attributes2String() . '>' .
					  $this->value . '</' . $this->tagName . '>';
		}
	}

	/**
	 * Attributes
	 * @return string Returns string of attributes
	 */
	private function attributes2String() {
		$attrStr = "";
		foreach ($this->attributes as $key => $val) {
			$attrStr .= " " . $key . "=\"" . $val . "\"";
		}
		return $attrStr;
	}

	/**
	 * Array of attributes
	 * @return array Returns attributes
	 */
	protected function getAttributes() {
		return $this->attributes;
	}

	/**
	 * Returns exception message of particular attribute
	 * @param string $attr Attribute
	 * @param string $value Attribute's value
	 * @return string The exception message 
	 */
	protected function attrExc($attr, $value) {
		return 'Wrong attribute value: ' . $attr . '="' . $value . '".';
	}

	/**
	 * Wrong tag's exception message
	 * @param string $thisTag this tag name
	 * @param string $innerTag inner tag name
	 * @return string The message of wrong tag
	 */
	protected function tagExc($thisTag, $innerTag) {
		return 'Wrong tag ' . $innerTag . ' in tag ' . $thisTag . '.';
	}

	/**
	 * Inserting new tag's lines to this tag
	 * @param array $lines lines of new inner tag
	 * @param string $condition around the $tag with the $condition
	 *    '<!--[if '.$condition.']>'..'<![endif]-->'
	 *    if $condition != ''
	 * @param int $conditionType type of conditional (default=1):
	 *    <code>0</code> - '<![if '.$condition.']>' html '<![endif]>'
	 *    <code>1</code> - '<!--[if '.$condition.']>' html '<![endif]-->'
	 *    <code>2</code> - '<!--[if '.$condition.']>-->' html '<!--<![endif]-->'
	 *    <code>3</code> - '<!--[if '.$condition.']><!-->' html '<!--<![endif]-->'
	 * @return void
	 */
	protected function addLines($lines, $condition, $conditionType) {
		if ($this->type == 2) {
			$lastline = array_pop($this->lines);
			if($condition != '') {
				$this->tagLen += 2;
				switch($conditionType) {
					case 0:
						$this->lines[] = $this->step . '<![if '.$condition.']>';
						break;
					case 1:
						$this->lines[] = $this->step . '<!--[if '.$condition.']>';
						break;
					case 2:
						$this->lines[] = $this->step . '<!--[if '.$condition.']>-->';
						break;
					case 3:
						$this->lines[] = $this->step . '<!--[if '.$condition.']><!-->';
						break;
				}
				foreach ($lines as $line) {
					$this->tagLen++;
					$this->lines[] = $this->step . $this->step . $line;
				}
				switch($conditionType) {
					case 0:
						$this->lines[] = $this->step . '<![endif]>';
						break;
					case 1:
						$this->lines[] = $this->step . '<![endif]-->';
						break;
					case 2:
						$this->lines[] = $this->step . '<!--<![endif]-->';
						break;
					case 3:
						$this->lines[] = $this->step . '<!--<![endif]-->';
						break;
				}
			} else {
				foreach ($lines as $line) {
					$this->tagLen++;
					$this->lines[] = $this->step . $line;
				}
			}
			$this->lines[] = $lastline;
		}
	}

	/**
	 * Inserting a text into this tag
	 * @param string $comment The comment value
	 * @return void
	 */
	protected function addText($text) {
		if ($this->type == 2) {
			$lastline = array_pop($this->lines);
			$this->lines[] = $this->step . $text;
			$this->lines[] = $lastline;
		}
	}
	
	/**
	 * Inserting a comment (in mode '<!-- $comment -->') into this tag
	 * @param string $comment The comment value
	 * @return Renderer
	 */
	function addComment($comment) {
		if ($this->type == 2) {
			$lastline = array_pop($this->lines);
			$this->lines[] = $this->step . '<!--' . $comment . '-->';
			$this->lines[] = $lastline;
		}
		return $this;
	}
	

	/**
	 * Lines of this tags
	 * @return array
	 */
	protected function getLines() {
		$this->setAttributes();
		return $this->lines;
	}

	/**
	 * The name of the tag
	 * @return string Returns this tag's name
	 */
	protected function getTagname() {
		return $this->tagName;
	}

	/**
	 * Set a new attribute
	 * @param string $attr Attribute
	 * @param string $value The value of attribute
	 * @return Renderer
	 */
	function setAttr($attr, $value) {
		$this->attributes[$attr] = $value;
		return $this;
	}

	/**
	 * The value of the tag in a string value
	 * @return string Retrns the value of the tag
	 */
	function __toString() {
		$this->setAttributes();
		$str = "";
		foreach ($this->lines as $line) {
			$str .= $line . $this->newLine ;
		}
		return $str;
	}

}

?>