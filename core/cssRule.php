<?php

/**
 * Defines a rule in <style> tag
 */

class CssRule extends Renderer {

	/**
	 * @var array
	 */
	private $selector = array();
	/**
	 * @var int
	 */
	private $selector_last = -1;

	/**
	 * @var array
	 */
	private $declarations = array();

	/**
	 * @var string
	 */
	const ALL = "*";

	/**
	 * @var array
	 */
	private $prefixes = array(
		"-moz-",
		"-webkit-",
		"-ms-",
		"-o-",
		""
	);

	/**
	 * @var string
	 */
	private $step;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->step = H5R_ONELINE ? "" : H5R_STEP;
	}

	/**
	 * Getting tag[#id][.class] like identifier from tag object
	 * @param Renderer $target DOM element
	 * @return string
	 */
	private function identify($target) {
		$attr = $target->getAttributes();
		if (isSet($attr['id']))
			return "#" . $attr['id'];
		$identifier = $target->getTagname();
		if (isSet($attr['class']))
			$identifier .= "." . $attr['class'];
		return $identifier;
	}

	/**
	 * Adding a new target to rule selector
	 * @param string|Renderer $target Outside part of a definition block
	 * @return CssRule
	 */
	public function addTarget($target) {
		if($target instanceof Renderer)
			$target = $this->identify($target);
		$this->selector_last++;
		$this->selector[$this->selector_last] = $target;
		return $this;
	}

	/**
	 * Adding a direct child to the last added target
	 * @param string|Renderer $target Child
	 * @return CssRule
	 */
	public function addDirectChild($target) {
		if($target instanceof Renderer)
			$target = $this->identify($target);
		$this->selector[$this->selector_last] .= " > " . $target;
		return $this;
	}

	/**
	 * Adding a descendant to the last added target
	 * @param string|Renderer $target Descendant
	 * @return CssRule
	 */
	public function addDescendant($target) {
		if($target instanceof Renderer)
			$target = $this->identify($target);
		$this->selector[$this->selector_last] .= " " . $target;
		return $this;
	}

	/**
	 * Adding neighbour to the last added target
	 * @param string|Renderer $target Descendant
	 * @return CssRule
	 */
	public function addNeighbor($target) {
		if($target instanceof Renderer)
			$target = $this->identify($target);
		$this->selector[$this->selector_last] .= " ~ " . $target;
		return $this;
	}

	/**
	 * Adding a pseudo-class or preudo-element to the last added target
	 * @param string $pseudo Pseudo-class or -element
	 * @param string $property Property of pseudo-class
	 * (for example, for "not()" or "nth-child()")
	 * @return CssRule
	 */
	public function addPseudo($pseudo, $property = null) {
		$this->selector[$this->selector_last] .= ":" . $pseudo;
		if ($property != null)
			$this->selector[$this->selector_last] .= "(" . $property . ")";
		return $this;
	}

	/**
	 * Adding an attribute selector
	 * @param string $attribute Tag attribute
	 * @param string $value Value of an attribute
	 * @param string $equality Equality operator
	 * @return CssRule
	 */
	public function addAttribute($attribute, $value, $equality = "=") {
		$this->selector[$this->selector_last] .=
			"[" .
			$attribute .
			$equality .
			"'" .
			str_replace("'", "\\'", $value) .
			"']";
		return $this;
	}

	/**
	 * Adding a new declaration
	 * @param string $property Css-property
	 * @param value $value Value
	 * @param bool|array $prefixize Instrucion to add known browser engine prefixes
	 * or string array of such prefixes
	 * @return CssRule
	 */
	public function addDeclaration($property, $value, $prefixize = false) {
		if ($prefixize) {
			if (!is_array($prefixize))
				$prefixize = $this->prefixes;
			foreach($prefixize as $prefix) 
				$this->declarations[] = array($property, $prefix . $value);
		} else
			$this->declarations[] = array($property, $value);
		return $this;
	}

	/**
	 * Export object contents as array of strings
	 * @return array
	 */
	public function getLines() {
		$lines = array();
		for ($i = 0; $i < $this->selector_last; $i++)
			$lines[] = $this->selector[$i] . ",";
		$lines[] = $this->selector[$this->selector_last] . " {";
		foreach ($this->declarations as $declaration)
			$lines[] = $this->step . $declaration[0] . ": " . $declaration[1]. ";";
		$lines[] = "}";
		return $lines;
	}

	/**
	 * Clone
	 * @return CssRule
	 */
	public function copy() {
		return clone($this);
	}

	/**
	 *  Override other inherited methods
	 */
	public function addComment($comment) {}
	public function __toString() {
		return join(" ", $this->getLines());
	}
}
