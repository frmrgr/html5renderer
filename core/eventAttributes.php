<?php

/**
 * Class for reppresenting all global event attributes in HTML5 
 * @package HTMLRenderer/core
 * @author Ivo Seeba
 * @copyright 2012 - 2020 Ivo Seeba
 */
class EventAttributes extends Renderer {

	/**
	 * Script to be run after the document is printed
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnafterprint($value) {
		$this->setAttr('onafterprint', $value);
		return $this;
	}

	/**
	 * Script to be run before the document is printed
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnbeforeprint($value) {
		$this->setAttr('onbeforeprint', $value);
		return $this;
	}

	/**
	 * Script to be run before the document loads
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnbeforeonload($value) {
		$this->setAttr('onbeforeonload', $value);
		return $this;
	}

	/**
	 * Script to be run when the window loses focus
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnblur($value) {
		$this->setAttr('onblur', $value);
		return $this;
	}

	/**
	 * Script to be run when an error occur
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnerror($value) {
		$this->setAttr('onerror', $value);
		return $this;
	}

	/**
	 * Script to be run when the window gets focus
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnfocus($value) {
		$this->setAttr('onfocus', $value);
		return $this;
	}

	/**
	 * Script to be run when the document has changed
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnhaschange($value) {
		$this->setAttr('onhaschange', $value);
		return $this;
	}

	/**
	 * Script to be run when the document loads
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnload($value) {
		$this->setAttr('onload', $value);
		return $this;
	}

	/**
	 * Script to be run when the message is triggered
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnmessage($value) {
		$this->setAttr('onmessage', $value);
		return $this;
	}

	/**
	 * Script to be run when the document goes offline
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnoffline($value) {
		$this->setAttr('onoffline', $value);
		return $this;
	}

	/**
	 * Script to be run when the document comes online
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnonline($value) {
		$this->setAttr('ononline', $value);
		return $this;
	}

	/**
	 * Script to be run when the window is hidden
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnpagehide($value) {
		$this->setAttr('onpagehide', $value);
		return $this;
	}

	/**
	 * Script to be run when the window becomes visible
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnpageshow($value) {
		$this->setAttr('onpageshow', $value);
		return $this;
	}

	/**
	 * Script to be run when the window's history changes
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnpopstate($value) {
		$this->setAttr('onpopstate', $value);
		return $this;
	}

	/**
	 * Script to be run when the document performs a redo
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnredo($value) {
		$this->setAttr('onredo', $value);
		return $this;
	}

	/**
	 * Script to be run when the window is resized
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnresize($value) {
		$this->setAttr('onresize', $value);
		return $this;
	}

	/**
	 * Script to be run when a Web Storage area is updated
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnstorage($value) {
		$this->setAttr('onstorage', $value);
		return $this;
	}

	/**
	 * Script to be run when the document performs an undo
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnundo($value) {
		$this->setAttr('onundo', $value);
		return $this;
	}

	/**
	 * Script to be run when the user leaves the document
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnunload($value) {
		$this->setAttr('onunload', $value);
		return $this;
	}

	/**
	 * Script to be run when an element changes
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnchange($value) {
		$this->setAttr('onchange', $value);
		return $this;
	}

	/**
	 * Script to be run when a context menu is triggered
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOncontextmenu($value) {
		$this->setAttr('oncontextmenu', $value);
		return $this;
	}

	/**
	 * Script to be run when a form changes
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnformchange($value) {
		$this->setAttr('onformchange', $value);
		return $this;
	}

	/**
	 * Script to be run when a form gets user input
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnforminput($value) {
		$this->setAttr('onforminput', $value);
		return $this;
	}

	/**
	 * Script to be run when an element gets user input
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOninput($value) {
		$this->setAttr('oninput', $value);
		return $this;
	}

	/**
	 * Script to be run when an element is invalid
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOninvalid($value) {
		$this->setAttr('oninvalid', $value);
		return $this;
	}

	/**
	 * Script to be run when an element is selected
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnselect($value) {
		$this->setAttr('onselect', $value);
		return $this;
	}

	/**
	 * Script to be run when a form is submitted
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnsubmit($value) {
		$this->setAttr('onsubmit', $value);
		return $this;
	}

	/**
	 * Script to be run when a key is pressed down
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnkeydown($value) {
		$this->setAttr('onkeydown', $value);
		return $this;
	}

	/**
	 * Script to be run when a key is pressed and released
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnkeypress($value) {
		$this->setAttr('onkeypress', $value);
	}

	/**
	 * Script to be run when a key is released
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnkeyup($value) {
		$this->setAttr('onkeyup', $value);
		return $this;
	}

	/**
	 * Script to be run on a mouse click
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnclick($value) {
		$this->setAttr('onclick', $value);
		return $this;
	}

	/**
	 * Script to be run on a mouse double-click
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndblclick($value) {
		$this->setAttr('ondblclick', $value);
		return $this;
	}

	/**
	 * Script to be run when an element is dragged
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndrag($value) {
		$this->setAttr('ondrag', $value);
		return $this;
	}

	/**
	 * Script to be run at the end of a drag operation
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndragend($value) {
		$this->setAttr('ondragend', $value);
		return $this;
	}

	/**
	 * Script to be run when an element has been dragged 
	 * to a valid drop target
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndragenter($value) {
		$this->setAttr('ondragenter', $value);
		return $this;
	}

	/**
	 * Script to be run when an element leaves a valid drop target
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndragleave($value) {
		$this->setAttr('ondragleave', $value);
		return $this;
	}

	/**
	 * Script to be run when an element is being dragged 
	 * over a valid drop target
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndragover($value) {
		$this->setAttr('ondragover', $value);
		return $this;
	}

	/**
	 * Script to be run at the start of a drag operation
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndragstart($value) {
		$this->setAttr('ondragstart', $value);
		return $this;
	}

	/**
	 * Script to be run when dragged element is being dropped
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndrop($value) {
		$this->setAttr('ondrop', $value);
		return $this;
	}

	/**
	 * Script to be run when a mouse button is pressed
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnmousedown($value) {
		$this->setAttr('onmousedown', $value);
		return $this;
	}

	/**
	 * Script to be run when the mouse pointer moves
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnmousemove($value) {
		$this->setAttr('onmousemove', $value);
		return $this;
	}

	/**
	 * Script to be run when the mouse pointer moves 
	 * out of an element
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnmouseout($value) {
		$this->setAttr('onmouseout', $value);
		return $this;
	}

	/**
	 * Script to be run when the mouse pointer moves 
	 * over an element
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnmouseover($value) {
		$this->setAttr('onmouseover', $value);
		return $this;
	}

	/**
	 * Script to be run when a mouse button is released
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnmouseup($value) {
		$this->setAttr('onmouseup', $value);
		return $this;
	}

	/**
	 * Script to be run when the mouse wheel is
	 * being rotated
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnmousewheel($value) {
		$this->setAttr('onmousewheel', $value);
		return $this;
	}

	/**
	 * Script to be run when an element's scrollbar is 
	 * being scrolled
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnscroll($value) {
		$this->setAttr('onscroll', $value);
		return $this;
	}

	/**
	 * Script to be run on abort
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnabort($value) {
		$this->setAttr('onabort', $value);
		return $this;
	}

	/**
	 * Script to be run when a file is ready to start playing 
	 * (when it has buffered enough to begin)
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOncanplay($value) {
		$this->setAttr('oncanplay', $value);
		return $this;
	}

	/**
	 * Script to be run when a file can be played all the way 
	 * to the end without pausing for buffering
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOncanplaythrough($value) {
		$this->setAttr('oncanplaythrough', $value);
		return $this;
	}

	/**
	 * Script to be run when the length of the media changes
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOndurationchange($value) {
		$this->setAttr('ondurationchange', $value);
		return $this;
	}

	/**
	 * Script to be run when something bad happens and the 
	 * file is suddenly unavailable (like unexpectedly disconnects)
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnemptied($value) {
		$this->setAttr('onemptied', $value);
		return $this;
	}

	/**
	 * Script to be run when the media has reach the end 
	 * (a useful event for messages like "thanks for listening")
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnended($value) {
		$this->setAttr('onended', $value);
		return $this;
	}

	/**
	 * Script to be run when media data is loaded
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnloadeddata($value) {
		$this->setAttr('onloadeddata', $value);
		return $this;
	}

	/**
	 * Script to be run when meta data (like dimensions 
	 * and duration) are loaded
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnloadedmetadata($value) {
		$this->setAttr('onloadedmetadata', $value);
		return $this;
	}

	/**
	 * Script to be run just as the file begins to load 
	 * before anything is actually loaded
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnloadstart($value) {
		$this->setAttr('onloadstart', $value);
		return $this;
	}

	/**
	 * Script to be run when the media is paused either 
	 * by the user or programmatically
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnpause($value) {
		$this->setAttr('onpause', $value);
		return $this;
	}

	/**
	 * Script to be run when the media is ready to start playing
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnplay($value) {
		$this->setAttr('onplay', $value);
		return $this;
	}

	/**
	 * Script to be run when the media actually has 
	 * started playing
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnplaying($value) {
		$this->setAttr('onplaying', $value);
		return $this;
	}

	/**
	 * Script to be run when the browser is in the 
	 * process of getting the media data
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnprogress($value) {
		$this->setAttr('onprogress', $value);
		return $this;
	}

	/**
	 * Script to be run each time the playback rate changes 
	 * (like when a user switches to a slow motion or fast forward mode)
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnratechange($value) {
		$this->setAttr('onratechange', $value);
		return $this;
	}

	/**
	 * Script to be run each time the ready state changes 
	 * (the ready state tracks the state of the media data)
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnreadystatechange($value) {
		$this->setAttr('onreadystatechange', $value);
		return $this;
	}

	/**
	 * Script to be run when the seeking attribute is set 
	 * to false indicating that seeking has ended
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnseeked($value) {
		$this->setAttr('onseeked', $value);
		return $this;
	}

	/**
	 * Script to be run when the seeking attribute is set 
	 * to true indicating that seeking is active
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnseeking($value) {
		$this->setAttr('onseeking', $value);
		return $this;
	}

	/**
	 * Script to be run when the browser is unable to fetch 
	 * the media data for whatever reason
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnstalled($value) {
		$this->setAttr('onstalled', $value);
		return $this;
	}

	/**
	 * Script to be run when fetching the media data is stopped 
	 * before it is completely loaded for whatever reason
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnsuspend($value) {
		$this->setAttr('onsuspend', $value);
		return $this;
	}

	/**
	 * Script to be run when the playing position has changed 
	 * (like when the user fast forwards to a different point in the media)
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOntimeupdate($value) {
		$this->setAttr('ontimeupdate', $value);
		return $this;
	}

	/**
	 * Script to be run each time the volume is changed which 
	 * (includes setting the volume to 'mute')
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnvolumechange($value) {
		$this->setAttr('onvolumechange', $value);
		return $this;
	}

	/**
	 * Script to be run when the media has paused but is expected 
	 * to resume (like when the media pauses to buffer more data)
	 * @param string $value value of the attribute
	 * @return EventAttributes
	 */
	function setAttrOnwaiting($value) {
		$this->setAttr('onwaiting', $value);
		return $this;
	}

}

?>