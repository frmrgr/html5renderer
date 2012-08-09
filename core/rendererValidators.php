<?php

/**
 * Class providing different aid functions
 * @package HTMLRenderer/core
 * @author Ivo Seeba
 * @copyright 2012 - 2020 Ivo Seeba
 * */
class RendererValidators {

	/**
	 * Checking attribute HTML_code
	 * @param string $value The attribute value
	 * @return bool is the value a ...???
	 */
	static function isHtmlCode($value) {
		return $value != "";
	}

	/**
	 * Checking attribute MIME_type
	 * @param string $value The attribute value
	 * @return bool is the value a mine type
	 */
	static function isMimeType($value) {
		return in_array($value, array(//
						"text/h323", //
						"application/internet-property-stream", //
						"application/postscript", //
						"audio/x-aiff", //
						"audio/x-aiff", //
						"audio/x-aiff", //
						"audio/ogg", //
						"audio/mpeg", //
						"video/x-ms-asf", //
						"video/x-ms-asf", //
						"video/x-ms-asf", //
						"audio/basic", //
						"video/x-msvideo", //
						"application/olescript", //
						"text/plain", //
						"application/x-bcpio", //
						"application/octet-stream", //
						"image/bmp", //
						"text/plain", //
						"application/vnd.ms-pkiseccat", //
						"application/x-cdf", //
						"application/x-x509-ca-cert", //
						"application/octet-stream", //
						"application/x-msclip", //
						"image/x-cmx", //
						"image/cis-cod", //
						"application/x-cpio", //
						"application/x-mscardfile", //
						"application/pkix-crl", //
						"application/x-x509-ca-cert", //
						"application/x-csh", //
						"text/css", //
						"application/x-director", //
						"application/x-x509-ca-cert", //
						"application/x-director", //
						"application/x-msdownload", //
						"application/octet-stream", //
						"application/msword", //
						"application/msword", //
						"application/x-dvi", //
						"application/x-director", //
						"application/postscript", //
						"text/x-setext", //
						"application/envoy", //
						"application/octet-stream", //
						"application/fractals", //
						"x-world/x-vrml", //
						"image/gif", //
						"application/x-gtar", //
						"application/x-gzip", //
						"text/plain", //
						"application/x-hdf", //
						"application/winhlp", //
						"application/mac-binhex40", //
						"application/hta", //
						"text/x-component", //
						"text/html", //
						"text/html", //
						"text/webviewhtml", //
						"image/x-icon", //
						"image/ief", //
						"application/x-iphone", //
						"application/x-internet-signup", //
						"application/x-internet-signup", //
						"image/pipeg", //
						"image/jpeg", //
						"image/jpeg", //
						"image/jpeg", //
						"application/x-javascript", //
						"application/x-latex", //
						"application/octet-stream", //
						"video/x-la-asf", //
						"video/x-la-asf", //
						"application/octet-stream", //
						"application/x-msmediaview", //
						"application/x-msmediaview", //
						"audio/x-mpegurl", //
						"application/x-troff-man", //
						"application/x-msaccess", //
						"application/x-troff-me", //
						"message/rfc822", //
						"message/rfc822", //
						"audio/mid", //
						"application/x-msmoney", //
						"video/quicktime", //
						"video/x-sgi-movie", //
						"video/mpeg", //
						"audio/mpeg", //
						"video/mpeg", //
						"video/mpeg", //
						"video/mpeg", //
						"video/mpeg", //
						"application/vnd.ms-project", //
						"video/mpeg", //
						"application/x-troff-ms", //
						"application/x-msmediaview", //
						"message/rfc822", //
						"application/oda", //
						"application/pkcs10", //
						"application/x-pkcs12", //
						"application/x-pkcs7-certificates", //
						"application/x-pkcs7-mime", //
						"application/x-pkcs7-mime", //
						"application/x-pkcs7-certreqresp", //
						"application/x-pkcs7-signature", //
						"image/x-portable-bitmap", //
						"application/pdf", //
						"application/x-pkcs12", //
						"image/x-portable-graymap", //
						"application/ynd.ms-pkipko", //
						"application/x-perfmon", //
						"application/x-perfmon", //
						"application/x-perfmon", //
						"application/x-perfmon", //
						"application/x-perfmon", //
						"image/x-portable-anymap", //
						"application/vnd.ms-powerpoint", //
						"image/x-portable-pixmap", //
						"application/vnd.ms-powerpoint", //
						"application/vnd.ms-powerpoint", //
						"application/pics-rules", //
						"application/postscript", //
						"application/x-mspublisher", //
						"video/quicktime", //
						"audio/x-pn-realaudio", //
						"audio/x-pn-realaudio", //
						"image/x-cmu-raster", //
						"image/x-rgb", //
						"audio/mid", //
						"application/x-troff", //
						"application/rtf", //
						"text/richtext", //
						"application/x-msschedule", //
						"text/scriptlet", //
						"application/set-payment-initiation", //
						"application/set-registration-initiation", //
						"application/x-sh", //
						"application/x-shar", //
						"application/x-stuffit", //
						"audio/basic", //
						"application/x-pkcs7-certificates", //
						"application/futuresplash", //
						"application/x-wais-source", //
						"application/vnd.ms-pkicertstore", //
						"application/vnd.ms-pkistl", //
						"text/html", //
						"image/svg+xml", //
						"application/x-sv4cpio", //
						"application/x-sv4crc", //
						"application/x-troff", //
						"application/x-tar", //
						"application/x-tcl", //
						"application/x-tex", //
						"application/x-texinfo", //
						"application/x-texinfo", //
						"application/x-compressed", //
						"image/tiff", //
						"image/tiff", //
						"application/x-troff", //
						"application/x-msterminal", //
						"text/tab-separated-values", //
						"text/plain", //
						"text/iuls", //
						"application/x-ustar", //
						"text/x-vcard", //
						"x-world/x-vrml", //
						"audio/x-wav", //
						"application/vnd.ms-works", //
						"application/vnd.ms-works", //
						"application/vnd.ms-works", //
						"application/x-msmetafile", //
						"application/vnd.ms-works", //
						"application/x-mswrite", //
						"x-world/x-vrml", //
						"x-world/x-vrml", //
						"x-world/x-vrml", //
						"image/x-xbitmap", //
						"application/vnd.ms-excel", //
						"application/vnd.ms-excel", //
						"application/vnd.ms-excel", //
						"application/vnd.ms-excel", //
						"application/vnd.ms-excel", //
						"application/vnd.ms-excel", //
						"x-world/x-vrml", //
						"image/x-xpixmap", //
						"image/x-xwindowdump", //
						"application/x-compress", //
						"application/zip"));
	}

	/**
	 * Checking attribute URL
	 * @param string $value The attribute value
	 * @return bool is the value a correct url
	 */
	static function isUrl($value) {
		return $value != "";
	}

	/**
	 * Checking attribute YYYY-MM-DDThh:mm:ssTZD
	 * @param string $value The attribute value
	 * @return bool is the value a correct datetime
	 */
	static function isYyyyMmDdthhMmSstzd($value) {
		//has enough length of value
		if(strlen($value) < 19) {
			return false;
		}
		//has corrct separators
		if(substr($value,4,1) != "-" || substr($value,7,1) != "-" ||
				substr($value,10,1) != "T" || substr($value,13,1) != ":" ||
				substr($value,16,1) != ":") {
			return false;
		}
		//is correct date
		if(!checkdate ( substr($value,5,2), substr($value,8,2), substr($value,0,4) )) {
			return false;
		}
		//is correct clock time
		$hour = substr($value,11,2);
		if(!is_numeric($hour) || $hour < 0 || $hour > 23) {
			return false;
		}
		$min = substr($value,14,2);
		if(!is_numeric($min) || $min < 0 || $min > 59) {
			return false;
		}
		$sec = substr($value,17,2);
		if(!is_numeric($sec) || $sec < 0 || $sec > 59) {
			return false;
		}
		return true;
	}

	/**
	 * Checking attribute challenge
	 * @param string $value The attribute value
	 * @return bool is the value a challenge
	 */
	static function isChallenge($value) {
		$value != "";
	}

	/**
	 * Checking attribute character_set
	 * @param string $value The attribute value
	 * @return bool is the value a correct character set
	 */
	static function isCharacterSet($value) {
		return in_array($value, array(//
						"ISO-8859-1", //
						"ISO-8859-2", //
						"ISO-8859-3", //
						"ISO-8859-4", //
						"ISO-8859-5", //
						"ISO-8859-6", //
						"ISO-8859-7", //
						"ISO-8859-8", //
						"ISO-8859-9", //
						"ISO-8859-10", //
						"ISO-2022-JP", //
						"ISO-2022-JP-2", //
						"ISO-2022-KR", //
						"UTF-8", //
						"UTF-16"//
				  ));
	}



	/**
	 * Checking attribute coordinates
	 * @param string $value The attribute value
	 * @return bool is the value represents coordinates
	 */
	static function isCoordinates($value) {
		$arr = preg_split("/[ ,]/", $value);
		foreach ($arr as $e) {
			if (!is_numeric($e))
				return false;
		}
		return true;
	}

	/**
	 * Checking attribute datalist_id
	 * @param string $value The attribute value
	 * @return bool is the value a datalist indentificator
	 */
	static function isDatalistId($value) {
		return $value != "";
	}

	/**
	 * Checking attribute datetime
	 * @param string $value The attribute value
	 * @return bool represents the value a datetime
	 */
	static function isDatetime($value) {
		return RendererValidators::isYyyyMmDdthhMmSstzd($value);
	}

	/**
	 * Checking attribute element_id
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isElementId($value) {
		return $value != "";
	}

	/**
	 * Checking attribute form_id
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isFormId($value) {
		return $value != "";
	}

	/**
	 * Checking attribute groupname
	 * @param string $value The attribute value
	 * @return bool is the value a text
	 */
	static function isGroupname($value) {
		return $value != "";
	}

	/**
	 * Checking attribute header_id
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isHeaderId($value) {
		return $value != "";
	}

	/**
	 * Checking attribute language_code
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isLanguageCode($value) {
		return !in_array($value, array('aa', 'ab', 'ae', 'af', 'al',//
						'am', 'ar', 'as', 'ay', 'az', 'ba', 'be', 'bg', 'bh',//
						'bi', 'bn', 'bo', 'bp', 'br', 'ca', 'cf', 'ch', 'co',//
						'cs', 'cy', 'de', 'dr', 'dt', 'dz', 'ef', 'eg', 'ej',//
						'el', 'en', 'eo', 'ep', 'er', 'es', 'et', 'eu', 'fa',//
						'fi', 'fj', 'fo', 'fr', 'fy', 'ga', 'gd', 'gl', 'gn',//
						'gu', 'ha', 'he', 'hi', 'hm', 'hr', 'hu', 'hy', 'ia',//
						'ie', 'ik', 'in', 'is', 'it', 'iw', 'ja', 'ji', 'jv',//
						'ka', 'kk', 'kl', 'km', 'kn', 'ko', 'ks', 'ku', 'ky',//
						'la', 'ln', 'lo', 'lt', 'lv', 'mg', 'mi', 'mk', 'ml',//
						'mn', 'mo', 'mr', 'ms', 'mt', 'my', 'na', 'ne', 'nl',//
						'no', 'nt', 'oc', 'of', 'og', 'om', 'or', 'pa', 'pl',//
						'pn', 'ps', 'pt', 'qu', 're', 'rm', 'rn', 'ro', 'ru',//
						'rw', 'sa', 'sd', 'sf', 'sg', 'sh', 'si', 'sk', 'sl',//
						'sm', 'sn', 'so', 'sq', 'sr', 'ss', 'st', 'su', 'sv',//
						'sw', 'ta', 'te', 'tg', 'th', 'ti', 'tj', 'tk', 'tl',//
						'tn', 'to', 'tp', 'tr', 'ts', 'tt', 'tw', 'uk', 'ul',//
						'ur', 'uz', 'vi', 'vo', 'wo', 'xh', 'yo', 'zh', 'zu'));
	}

	/**
	 * Checking attribute mapname
	 * @param string $value The attribute value
	 * @return bool is the value a correct mapname
	 */
	static function isMapname($value) {
		return strlen($value) > 1 && $value[0] == '#';
	}

	/**
	 * Checking attribute media_query
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isMediaQuery($value) {
		return $value != "";
	}

	/**
	 * Checking attribute name
	 * @param string $value The attribute value
	 * @return bool is the value a text
	 */
	static function isName($value) {
		return $value != "";
	}

	/**
	 * Checking attribute number
	 * @param string $value The attribute value
	 * @return bool is the value a natural number
	 */
	static function isNumber($value) {
		return is_numeric($value) && 
				!preg_match("/e/", $value) && $value > 0;
	}

	/**
	 * Checking attribute pixels
	 * @param string $value The attribute value
	 * @return bool is the value a nuberic value
	 */
	static function isPixels($value) {
		return RendererValidators::isNumber($value);
	}

	/**
	 * Specifies a regular expression that the <input> 
	 * 		element's value is checked against
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isRegexp($value) {
		return $value != "";
	}

	/**
	 * Checking attribute sizes
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isSizes($value) {
		if ($value == "any") {
			return true;
		}
		$arr = preg_split("/ /", $value);
		foreach ($arr as $arr2) {
			$arr2 = preg_split("/[xX]/", $arr2);
			foreach ($arr2 as $e) {
				if (!(is_numeric($e) && !preg_match("/e/", $e) && $e > 0)) {
					return false;
				}
			}
		}
		return true;
	}

	/**
	 * Checking attribute text
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isText($value) {
		return $value != "";
	}

	/**
	 * Checking attribute value
	 * @param string $value The attribute value
	 * @return bool is the value a ...
	 */
	static function isValue($value) {
		return true;
	}

}

?>
