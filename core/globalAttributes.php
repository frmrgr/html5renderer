<?php
/**
 * Class for reppresenting all global attributes in HTML5 
 * @package HTMLRenderer/core
 * @author Ivo Seeba
 * @copyright 2012 - 2020 Ivo Seeba
 */
class GlobalAttributes extends Renderer {

	/**
	 * Attribute accesskey
	 * @param string $value value of the attribute
	 */
	function setAttrAccesskey($value) {
		$this->setAttr('accesskey', $value);
	}

	/**
	 * Attribute class
	 * @param string $value value of the attribute
	 */
	function setAttrClass($value) {
		$this->setAttr('class', $value);
	}

	/**
	 * Attribute contenteditable
	 * @param string $value value of the attribute
	 */
	function setAttrContenteditable($value) {
		$this->setAttr('contenteditable', $value);
	}

	/**
	 * Attribute contextmenu
	 * @param string $value value of the attribute
	 */
	function setAttrContextmenu($value) {
		if (RendererConf::developing && !in_array($value, 
					array("true", "false", "inherit"))) {
			throw new Exception($this->attrExc('contextmenu', $value));
		} else {
			$this->setAttr('contextmenu', $value);
		}
	}

	/**
	 * Attribute dir
	 * @param string $value value of the attribute
	 */
	function setAttrDir($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("ltr", "rtl", "auto"))) {
			throw new Exception($this->attrExc('dir', $value));
		} else {
			$this->setAttr('dir', $value);
		}
	}

	/**
	 * Attribute draggable
	 * @param string $value value of the attribute
	 */
	function setAttrDraggable($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("true", "false", "auto"))) {
			throw new Exception($this->attrExc('draggable', $value));
		} else {
			$this->setAttr('draggable', $value);
		}
	}

	/**
	 * Attribute dropzone
	 * @param string $value value of the attribute
	 */
	function setAttrDropzone($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("copy", "move", "link"))) {
			throw new Exception($this->attrExc('dropzone', $value));
		} else {
			$this->setAttr('dropzone', $value);
		}
	}

	/**
	 * Attribute hidden
	 * @param string $value value of the attribute
	 */
	function setAttrHidden($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("hidden", ""))) {
			throw new Exception($this->attrExc('hidden', $value));
		} else {
			$this->setAttr('hidden', $value);
		}
	}

	/**
	 * Attribute id
	 * @param string $value value of the attribute
	 */
	function setAttrId($value) {
		$this->setAttr('id', $value);
	}

	/**
	 * Attribute lang
	 * @param string $value value of the attribute
	 */
	function setAttrLang($value) {
		if (RendererConf::developing && 
				  RendererValidators::isLanguage_Code($value)) {
			throw new Exception($this->attrExc('lang', $value));
		} else {
			$this->setAttr('lang', $value);
		}
	}

	/**
	 * Attribute spellcheck
	 * @param string $value value of the attribute
	 */
	function setAttrSpellcheck($value) {
		if (RendererConf::developing && 
				  !in_array($value, array("true", "false"))) {
			throw new Exception($this->attrExc('spellcheck', $value));
		} else {
			$this->setAttr('spellcheck', $value);
		}
	}

	/**
	 * Attribute style
	 * @param string $value value of the attribute
	 */
	function setAttrStyle($value) {
		$this->setAttr('style', $value);
	}

	/**
	 * Attribute tabindex
	 * @param string $value value of the attribute
	 */
	public function attrTabindex($value) {
		$this->attributes ['tabindex'] = $value;
		if (RendererConf::developing && 
				  !is_numeric($value)) {
			throw new Exception('No numeric attribute: tabindex="' . $value . '".');
		} else {
			$this->setAttr('tabindex', $value);
		}
	}

	/**
	 * Attribute title
	 * @param string $value value of the attribute
	 */
	function setAttrTitle($value) {
		$this->setAttr('title', $value);
	}

}

?>