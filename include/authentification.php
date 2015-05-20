<?php
	
	/** Constantes **/
	// Variables de session
	define ('SESSION_GAMEID'	, "gameid"		);
	define ('SESSION_PLAYERID'	, "playerid"	);
	define ('SESSION_AUTHKEY'	, "authkey"		);
	define ('SESSION_SERVERTIME', "servertime"	);
	
	// Variables de Post
	define ('POST_LOGINNAME'	, "loginName"	);
	define ('POST_HAPIKEY'		, "loginHapiKey");
	
  
	// URL de connexion au serveur
	define('CONST_HAPI_PATH'	, 'http://www.hyperiums.com/servlet/HAPI?');

	
	
	/**
	* @desc		Vérifie si une session est définie et tente de la créer le cas échéant.
	* @return 	true (authentification OK) ou string (Message d'erreur)
	*/
	function checkAuth() {	
		
		// Si la session n'est pas définie
		if (!isSessionInit()) {
			
			// Si on reçoit les données du formulaire d'authentification
			if (isset($_POST[POST_LOGINNAME]) && isset($_POST[POST_HAPIKEY])) {
				
				// Initialisations
				$sUserGame	= "Hyperiums5";
				$sUserName	= $_POST[POST_LOGINNAME];
				$sUserHapi	= $_POST[POST_HAPIKEY];
				
				$sRqConnexion = CONST_HAPI_PATH .'game='.$sUserGame.'&player='.$sUserName.'&hapikey='.$sUserHapi;
				
				$sRes = sendRequest($sRqConnexion);
				
				if ($sRes === false) {
					return "Connexion au serveur d'Hyperiums impossible";
				}
				
				if (isset($sRes[REQUEST_ERROR])) {					
					// Retour du code d'erreur
					return $sRes[REQUEST_ERROR];
				}
				
				if (isset($sRes[SESSION_GAMEID]) && isset($sRes[SESSION_AUTHKEY]) && isset($sRes[SESSION_PLAYERID]) && isset($sRes[SESSION_SERVERTIME])) {
					// Création de la session
					$_SESSION[SESSION_GAMEID] 		= $sRes[SESSION_GAMEID];
					$_SESSION[SESSION_PLAYERID] 	= $sRes[SESSION_PLAYERID];
					$_SESSION[SESSION_AUTHKEY] 		= $sRes[SESSION_AUTHKEY];
					$_SESSION[SESSION_SERVERTIME] 	= $sRes[SESSION_SERVERTIME];
					
					var_dump($_SESSION);
					
					return true;
				}
			} else {
				return "Authentification failed";
			}
		} else {
			return true;
		}
	}
	
	/**
	* @desc		Vérifie si la session a été initialisée
	* @return	Boolean
	*/
	function isSessionInit() {
		if 
		(  isset($_SESSION[SESSION_GAMEID]) 
		&& isset($_SESSION[SESSION_PLAYERID])
		&& isset($_SESSION[SESSION_AUTHKEY])
		&& isset($_SESSION[SESSION_SERVERTIME])
		) {
			return true;
		} else {
			return false;
		}
	
	}

	
?>