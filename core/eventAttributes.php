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
	 * */
	function setAttrOnafterprint($value) {
		$this->setAttribute('onafterprint', $value);
	}

	/**
	 * Script to be run before the document is printed
	 * */
	function setAttrOnbeforeprint($value) {
		$this->setAttribute('onbeforeprint', $value);
	}

	/**
	 * Script to be run before the document loads
	 * */
	function setAttrOnbeforeonload($value) {
		$this->setAttribute('onbeforeonload', $value);
	}

	/**
	 * Script to be run when the window loses focus
	 * */
	function setAttrOnblur($value) {
		$this->setAttribute('onblur', $value);
	}

	/**
	 * Script to be run when an error occur
	 * */
	function setAttrOnerror($value) {
		$this->setAttribute('onerror', $value);
	}

	/**
	 * Script to be run when the window gets focus
	 * */
	function setAttrOnfocus($value) {
		$this->setAttribute('onfocus', $value);
	}

	/**
	 * Script to be run when the document has changed
	 * */
	function setAttrOnhaschange($value) {
		$this->setAttribute('onhaschange', $value);
	}

	/**
	 * Script to be run when the document loads
	 * */
	function setAttrOnload($value) {
		$this->setAttribute('onload', $value);
	}

	/**
	 * Script to be run when the message is triggered
	 * */
	function setAttrOnmessage($value) {
		$this->setAttribute('onmessage', $value);
	}

	/**
	 * Script to be run when the document goes offline
	 * */
	function setAttrOnoffline($value) {
		$this->setAttribute('onoffline', $value);
	}

	/**
	 * Script to be run when the document comes online
	 * */
	function setAttrOnonline($value) {
		$this->setAttribute('ononline', $value);
	}

	/**
	 * Script to be run when the window is hidden
	 * */
	function setAttrOnpagehide($value) {
		$this->setAttribute('onpagehide', $value);
	}

	/**
	 * Script to be run when the window becomes visible
	 * */
	function setAttrOnpageshow($value) {
		$this->setAttribute('onpageshow', $value);
	}

	/**
	 * Script to be run when the window's history changes
	 * */
	function setAttrOnpopstate($value) {
		$this->setAttribute('onpopstate', $value);
	}

	/**
	 * Script to be run when the document performs a redo
	 * */
	function setAttrOnredo($value) {
		$this->setAttribute('onredo', $value);
	}

	/**
	 * Script to be run when the window is resized
	 * */
	function setAttrOnresize($value) {
		$this->setAttribute('onresize', $value);
	}

	/**
	 * Script to be run when a Web Storage area is updated
	 * */
	function setAttrOnstorage($value) {
		$this->setAttribute('onstorage', $value);
	}

	/**
	 * Script to be run when the document performs an undo
	 * */
	function setAttrOnundo($value) {
		$this->setAttribute('onundo', $value);
	}

	/**
	 * Script to be run when the user leaves the document
	 * */
	function setAttrOnunload($value) {
		$this->setAttribute('onunload', $value);
	}

	/**
	 * Script to be run when an element changes
	 * */
	function setAttrOnchange($value) {
		$this->setAttribute('onchange', $value);
	}

	/**
	 * Script to be run when a context menu is triggered
	 * */
	function setAttrOncontextmenu($value) {
		$this->setAttribute('oncontextmenu', $value);
	}

	/**
	 * Script to be run when a form changes
	 * */
	function setAttrOnformchange($value) {
		$this->setAttribute('onformchange', $value);
	}

	/**
	 * Script to be run when a form gets user input
	 * */
	function setAttrOnforminput($value) {
		$this->setAttribute('onforminput', $value);
	}

	/**
	 * Script to be run when an element gets user input
	 * */
	function setAttrOninput($value) {
		$this->setAttribute('oninput', $value);
	}

	/**
	 * Script to be run when an element is invalid
	 * */
	function setAttrOninvalid($value) {
		$this->setAttribute('oninvalid', $value);
	}

	/**
	 * Script to be run when an element is selected
	 * */
	function setAttrOnselect($value) {
		$this->setAttribute('onselect', $value);
	}

	/**
	 * Script to be run when a form is submitted
	 * */
	function setAttrOnsubmit($value) {
		$this->setAttribute('onsubmit', $value);
	}

	/**
	 * Script to be run when a key is pressed down
	 * */
	function setAttrOnkeydown($value) {
		$this->setAttribute('onkeydown', $value);
	}

	/**
	 * Script to be run when a key is pressed and released
	 * */
	function setAttrOnkeypress($value) {
		$this->setAttribute('onkeypress', $value);
	}

	/**
	 * Script to be run when a key is released
	 * */
	function setAttrOnkeyup($value) {
		$this->setAttribute('onkeyup', $value);
	}

	/**
	 * Script to be run on a mouse click
	 * */
	function setAttrOnclick($value) {
		$this->setAttribute('onclick', $value);
	}

	/**
	 * Script to be run on a mouse double-click
	 * */
	function setAttrOndblclick($value) {
		$this->setAttribute('ondblclick', $value);
	}

	/**
	 * Script to be run when an element is dragged
	 * */
	function setAttrOndrag($value) {
		$this->setAttribute('ondrag', $value);
	}

	/**
	 * Script to be run at the end of a drag operation
	 * */
	function setAttrOndragend($value) {
		$this->setAttribute('ondragend', $value);
	}

	/**
	 * Script to be run when an element has been dragged 
	 * to a valid drop target
	 * */
	function setAttrOndragenter($value) {
		$this->setAttribute('ondragenter', $value);
	}

	/**
	 * Script to be run when an element leaves a valid drop target
	 * */
	function setAttrOndragleave($value) {
		$this->setAttribute('ondragleave', $value);
	}

	/**
	 * Script to be run when an element is being dragged 
	 * over a valid drop target
	 * */
	function setAttrOndragover($value) {
		$this->setAttribute('ondragover', $value);
	}

	/**
	 * Script to be run at the start of a drag operation
	 * */
	function setAttrOndragstart($value) {
		$this->setAttribute('ondragstart', $value);
	}

	/**
	 * Script to be run when dragged element is being dropped
	 * */
	function setAttrOndrop($value) {
		$this->setAttribute('ondrop', $value);
	}

	/**
	 * Script to be run when a mouse button is pressed
	 * */
	function setAttrOnmousedown($value) {
		$this->setAttribute('onmousedown', $value);
	}

	/**
	 * Script to be run when the mouse pointer moves
	 * */
	function setAttrOnmousemove($value) {
		$this->setAttribute('onmousemove', $value);
	}

	/**
	 * Script to be run when the mouse pointer moves 
	 * out of an element
	 * */
	function setAttrOnmouseout($value) {
		$this->setAttribute('onmouseout', $value);
	}

	/**
	 * Script to be run when the mouse pointer moves 
	 * over an element
	 * */
	function setAttrOnmouseover($value) {
		$this->setAttribute('onmouseover', $value);
	}

	/**
	 * Script to be run when a mouse button is released
	 * */
	function setAttrOnmouseup($value) {
		$this->setAttribute('onmouseup', $value);
	}

	/**
	 * Script to be run when the mouse wheel is
	 * being rotated
	 * */
	function setAttrOnmousewheel($value) {
		$this->setAttribute('onmousewheel', $value);
	}

	/**
	 * Script to be run when an element's scrollbar is 
	 * being scrolled
	 * */
	function setAttrOnscroll($value) {
		$this->setAttribute('onscroll', $value);
	}

	/**
	 * Script to be run on abort
	 * */
	function setAttrOnabort($value) {
		$this->setAttribute('onabort', $value);
	}

	/**
	 * Script to be run when a file is ready to start playing 
	 * (when it has buffered enough to begin)
	 * */
	function setAttrOncanplay($value) {
		$this->setAttribute('oncanplay', $value);
	}

	/**
	 * Script to be run when a file can be played all the way 
	 * to the end without pausing for buffering
	 * */
	function setAttrOncanplaythrough($value) {
		$this->setAttribute('oncanplaythrough', $value);
	}

	/**
	 * Script to be run when the length of the media changes
	 * */
	function setAttrOndurationchange($value) {
		$this->setAttribute('ondurationchange', $value);
	}

	/**
	 * Script to be run when something bad happens and the 
	 * file is suddenly unavailable (like unexpectedly disconnects)
	 * */
	function setAttrOnemptied($value) {
		$this->setAttribute('onemptied', $value);
	}

	/**
	 * Script to be run when the media has reach the end 
	 * (a useful event for messages like "thanks for listening")
	 * */
	function setAttrOnended($value) {
		$this->setAttribute('onended', $value);
	}

	/**
	 * Script to be run when media data is loaded
	 * */
	function setAttrOnloadeddata($value) {
		$this->setAttribute('onloadeddata', $value);
	}

	/**
	 * Script to be run when meta data (like dimensions 
	 * and duration) are loaded
	 * */
	function setAttrOnloadedmetadata($value) {
		$this->setAttribute('onloadedmetadata', $value);
	}

	/**
	 * Script to be run just as the file begins to load 
	 * before anything is actually loaded
	 * */
	function setAttrOnloadstart($value) {
		$this->setAttribute('onloadstart', $value);
	}

	/**
	 * Script to be run when the media is paused either 
	 * by the user or programmatically
	 * */
	function setAttrOnpause($value) {
		$this->setAttribute('onpause', $value);
	}

	/**
	 * Script to be run when the media is ready to start playing
	 * */
	function setAttrOnplay($value) {
		$this->setAttribute('onplay', $value);
	}

	/**
	 * Script to be run when the media actually has 
	 * started playing
	 * */
	function setAttrOnplaying($value) {
		$this->setAttribute('onplaying', $value);
	}

	/**
	 * Script to be run when the browser is in the 
	 * process of getting the media data
	 * */
	function setAttrOnprogress($value) {
		$this->setAttribute('onprogress', $value);
	}

	/**
	 * Script to be run each time the playback rate changes 
	 * (like when a user switches to a slow motion or fast forward mode)
	 * */
	function setAttrOnratechange($value) {
		$this->setAttribute('onratechange', $value);
	}

	/**
	 * Script to be run each time the ready state changes 
	 * (the ready state tracks the state of the media data)
	 * */
	function setAttrOnreadystatechange($value) {
		$this->setAttribute('onreadystatechange', $value);
	}

	/**
	 * Script to be run when the seeking attribute is set 
	 * to false indicating that seeking has ended
	 * */
	function setAttrOnseeked($value) {
		$this->setAttribute('onseeked', $value);
	}

	/**
	 * Script to be run when the seeking attribute is set 
	 * to true indicating that seeking is active
	 * */
	function setAttrOnseeking($value) {
		$this->setAttribute('onseeking', $value);
	}

	/**
	 * Script to be run when the browser is unable to fetch 
	 * the media data for whatever reason
	 * */
	function setAttrOnstalled($value) {
		$this->setAttribute('onstalled', $value);
	}

	/**
	 * Script to be run when fetching the media data is stopped 
	 * before it is completely loaded for whatever reason
	 * */
	function setAttrOnsuspend($value) {
		$this->setAttribute('onsuspend', $value);
	}

	/**
	 * Script to be run when the playing position has changed 
	 * (like when the user fast forwards to a different point in the media)
	 * */
	function setAttrOntimeupdate($value) {
		$this->setAttribute('ontimeupdate', $value);
	}

	/**
	 * Script to be run each time the volume is changed which 
	 * (includes setting the volume to 'mute')
	 * */
	function setAttrOnvolumechange($value) {
		$this->setAttribute('onvolumechange', $value);
	}

	/**
	 * Script to be run when the media has paused but is expected 
	 * to resume (like when the media pauses to buffer more data)
	 * */
	function setAttrOnwaiting($value) {
		$this->setAttribute('onwaiting', $value);
	}

}

?>