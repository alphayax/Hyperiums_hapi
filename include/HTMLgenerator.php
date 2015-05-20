<?php

	/** Constantes **/
	define('CONST_FONTCOLOR_STD'	, 'aaaa77');
	define('CONST_FONTCOLOR_BLUE'	, '9988ff');
	define('CONST_FONTCOLOR_WHITE'	, 'ffffff');
	
	define('CONST_PATH_IMAGE'		, './misc/');
	
	
	/** Inclusions **/	
	
	
	/** Main **/	
	
	function getFont($psData, $pnSize=2, $psColor=CONST_FONTCOLOR_STD) {
		// Initialisatios
		$sHTML = "";
		
		$sHTML .= "<font color=\"#". $psColor ."\" size=\"". $pnSize ."\" face=\"verdana,arial\">";
		$sHTML .=  $psData;
		$sHTML .= "</font>";
		
		return $sHTML;
	}
	
	
	function getImage($psImage, $psAlt = "") {
		// Initialisatios
		$sHTML = "";
		
		$sHTML .= "<img ";
		$sHTML .= "  src=". CONST_PATH_IMAGE . $psImage;
		$sHTML .= "  alt=". $psAlt;
		$sHTML .= "  />";
		
		return $sHTML;
	}

  ?>






