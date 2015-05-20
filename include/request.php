<?php
	
	/** Constantes **/
	define ('FOPEN_READ_ONLY', 'r');
  
	// Parametres des requetes Hyperiums
	define ('HYP_DATA_GENERAL'		, 'general'	);
	define ('HYP_DATA_TRADE'		, 'trading'	);
	define ('HYP_DATA_INFILTRATION'	, 'infiltr'	);
	define ('HYP_PLANET_ALL'		, '*'		);
	
	// Variables contenues dans la requete de retour
	define ('REQUEST_ERROR'		, "error"		);
  
	/** 
	* @desc 		Permet d'interroger le serveur d'Hyperiums avec une requete d�finie
	* @return	Array (Retourne un tableau contenant toutes les variables) ou Boolean (false) si laconnexion a �chou�e
	*/
	function sendRequest($psRequest) {
		
		// Ouvre un descripteur vers la ressource donn�e
		$fp		= @fopen($psRequest, FOPEN_READ_ONLY);
		$texte	= '';
		
		// Si le descripteur existe bien
		if($fp)
		{
			// On enregistre son contenu par paquets de 1024 caracteres dans la variable $texte
			while(!feof($fp))
			   $texte .= fgets($fp, 1024);
		} 
		else
			return false;
		
		// Transforme la chaine de caractere r�cup�r�e sous forme de variables
		parse_str($texte, $aRes);
		
		//var_dump($aRes);
		
		if (isset($aRes[REQUEST_ERROR])) {
			// Destruction de la session
			session_destroy();
		}
		
		return $aRes;
	}
	
	
	/**
	* @desc		Retourne lechemin d'une requete de base
	* @return	String (URL de base) ou Boolean (false) si la session n'est pas d�finie.
	*/
	function getRequestBase() {
		
		// Si la session n'est pas d�finie
		if (isSessionInit())
			return 
				CONST_HAPI_PATH . 
				'gameid='	. 	$_SESSION[SESSION_GAMEID] 	.
				'&playerid='.	$_SESSION[SESSION_PLAYERID]	.
				'&authkey='	.	$_SESSION[SESSION_AUTHKEY]	;
		
		return false;
	}
	
	
	/**
	* @desc		Interroge Hyperiums en demandant des informations sur des planetes
	* @param		$psData	 : Type d'informations (general...)
	* @param		$psPlanet : Nom de la planete cibl�e (ou * pour toutes)
	* @return	array
	*/
	function getRequestPlanetInfo($psData = HYP_DATA_GENERAL, $psPlanet = HYP_PLANET_ALL) {
		// Initialisations
		$sRequest = getRequestBase();
		
		$sRequest .= '&request=getplanetinfo';
		$sRequest .= '&planet=' . $psPlanet;
		$sRequest .= '&data=' 	. $psData;
		
		return sendRequest($sRequest);
	}
	
?>