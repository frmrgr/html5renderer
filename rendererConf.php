<?php
	/**
	 * Class for configurating the renderer
	 **/
	class RendererConf {

		/**
		 * Is it for developing, setting that it shows errors of wrong attribute values
		 * @var bool is developing version 
		 */
		const developing = true;

		/**
		 * Symbol for setting a stairs (line's beginning) of generating HTML5 code for code alignment
		 * "\t" or " " or "  " or  "   " or .. are advisable.
		 */
		const stepSymbol = "   ";
		
	}
	
?>
