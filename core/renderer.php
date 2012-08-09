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
	 */
	private $isObject;
	
   /**
    * Constructor
    * @param string $tagName Tag's name
    * @param string $type Tag's type
    * @param string $value Tag's value
    */
	protected function __construct($tagName, $type, $value) {
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
		if(gettype($value) == "object" && method_exists($value, "getLines")) {
			$res = array("");
			$lines = $value->getLines();
			foreach($lines as $line) {
				$res[] = RendererConf::stepSymbol.$line;
			}
			$res[] = '</'.$tagName.'>';
			return $res;
		}
		if($value != "") {
			return array("",RendererConf::stepSymbol.$value,'</'.$tagName.'>');
		}
		return array("",'</'.$tagName.'>');
	}

	
   /**
    * Setting attributes 
	 * @return void
    */
	private function setAttributes() {
		if($this->type == 1) {
			$this->lines[0] = '<'.$this->tagName.
                 $this->attributes2String().' />';
		} else if($this->type == 2) {
			$this->lines[0] = '<'.$this->tagName.
                 $this->attributes2String().'>';
		} else {
			$this->lines[0] = '<'.$this->tagName.
                 $this->attributes2String().'>'.
					$this->value.'</'.$this->tagName.'>';
		}
	}
	
   /**
    * Attributes
    * @return string Returns string of attributes
    */
	private function attributes2String() {
		$attrStr = "";
		foreach ($this->attributes as $key => $val) {
			$attrStr .= " ".$key."=\"".$val."\"";
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
	 * @return void
    */
	protected function addLines($lines) {
		if($this->type == 2) {
			$lastline = array_pop($this->lines);
			foreach ($lines as $line) {
				$this->tagLen++;
				$this->lines[] = RendererConf::stepSymbol.$line;
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
		if($this->type == 2) {
			$lastline = array_pop($this->lines);
			$this->lines[] = RendererConf::stepSymbol.$text;
			$this->lines[] = $lastline;
		}
	}

   /**
    * Lines of this tags
    * @return type 
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
	 * @return void
    */
	function setAttr($attr, $value) {
		$this->attributes[$attr] = $value;
	}

	/**
    * Inserting a comment (in mode '<!-- $comment -->') into this tag
    * @param string $comment The comment value
	 * @return void
    */
	function addComment($comment) {
		if($this->type == 2) {
			$lastline = array_pop($this->lines);
			$this->lines[] = RendererConf::stepSymbol. "<!--".$comment."-->";
			$this->lines[] = $lastline;
		}
	}

   /**
    * The value of the tag in a string value
    * @return string Retrns the value of the tag
    */
	function __toString() {
		$this->setAttributes();
		$str = "";
		foreach($this->lines as $line) {
			$str .= $line."\n";
		}
		return $str;
	}

}

?>