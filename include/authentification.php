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
	* @desc		V�rifie si une session est d�finie et tente de la cr�er le cas �ch�ant.
	* @return 	true (authentification OK) ou string (Message d'erreur)
	*/
	function checkAuth() {	
		
		// Si la session n'est pas d�finie
		if (!isSessionInit()) {
			
			// Si on re�oit les donn�es du formulaire d'authentification
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
					// Cr�ation de la session
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
	* @desc		V�rifie si la session a �t� initialis�e
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