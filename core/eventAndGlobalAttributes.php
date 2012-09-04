<?php
/**
 * Class for seting both global event and event attributes 
 * @package HTMLRenderer/core
 * @author Ivo Seeba
 * @copyright 2012 - 2020 Ivo Seeba
 */
class EventAndGlobalAttributes extends EventAttributes {

	/**
	 * Attribute accesskey
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrAccesskey($value) {
		$this->setAttr('accesskey', $value);
		return $this;
	}

	/**
	 * Attribute class
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrClass($value) {
		$this->setAttr('class', $value);
		return $this;
	}

	/**
	 * Attribute contenteditable
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrContenteditable($value) {
		$this->setAttr('contenteditable', $value);
		return $this;
	}

	/**
	 * Attribute contextmenu
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrContextmenu($value) {
		if (RendererConf::developing && !in_array($value, 
					array("true", "false", "inherit"))) {
			throw new Exception($this->attrExc('contextmenu', $value));
		} else {
			$this->setAttr('contextmenu', $value);
		}
		return $this;
	}

	/**
	 * Attribute dir
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrDir($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("ltr", "rtl", "auto"))) {
			throw new Exception($this->attrExc('dir', $value));
		} else {
			$this->setAttr('dir', $value);
		}
		return $this;
	}

	/**
	 * Attribute draggable
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrDraggable($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("true", "false", "auto"))) {
			throw new Exception($this->attrExc('draggable', $value));
		} else {
			$this->setAttr('draggable', $value);
		}
		return $this;
	}

	/**
	 * Attribute dropzone
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrDropzone($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("copy", "move", "link"))) {
			throw new Exception($this->attrExc('dropzone', $value));
		} else {
			$this->setAttr('dropzone', $value);
		}
		return $this;
	}

	/**
	 * Attribute hidden
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrHidden($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("hidden", ""))) {
			throw new Exception($this->attrExc('hidden', $value));
		} else {
			$this->setAttr('hidden', $value);
		}
		return $this;
	}

	/**
	 * Attribute id
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrId($value) {
		$this->setAttr('id', $value);
		return $this;
	}

	/**
	 * Attribute lang
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrLang($value) {
		if (RendererConf::developing && 
				  RendererValidators::isLanguage_Code($value)) {
			throw new Exception($this->attrExc('lang', $value));
		} else {
			$this->setAttr('lang', $value);
		}
		return $this;
	}

	/**
	 * Attribute spellcheck
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrSpellcheck($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("true", "false"))) {
			throw new Exception($this->attrExc('spellcheck', $value));
		} else {
			$this->setAttr('spellcheck', $value);
		}
		return $this;
	}

	/**
	 * Attribute style
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrStyle($value) {
		$this->setAttr('style', $value);
		return $this;
	}

	/**
	 * Attribute tabindex
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	public function setAttrTabindex($value) {
		$this->attributes ['tabindex'] = $value;
		if (RendererConf::developing && 
				  !is_numeric($value)) {
			throw new Exception('No numeric attribute: tabindex="' . $value . '".');
		} else {
			$this->setAttr('tabindex', $value);
		}
		return $this;
	}

	/**
	 * Attribute title
	 * @param string $value value of the attribute
	 * @return EventAndGlobalAttributes
	 */
	function setAttrTitle($value) {
		$this->setAttr('title', $value);
		return $this;
	}
}
?>