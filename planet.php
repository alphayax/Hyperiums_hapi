<html>
 <head>
  <link href="./css/hypgen.css" rel="stylesheet" type="text/css" />
 </head>
 <body bgcolor="#000000" leftMargin="0" topMargin="0" marginwidth="0" marginheight="0">
  <?php
	session_start();
  
	/** Constantes **/
	
	
	/** Inclusions **/
	// Composants principaux
	include_once('./include/HTMLgenerator.php'		);
	include_once('./include/request.php'			);
	include_once('./include/authentification.php'	);
	include_once('./include/menu.php'				);
	
	// Classes
	include_once('./class/planet.class.php');
	
	
	/** Main **/
	
	// Verification de l'authentification
	$vAuth = checkAuth();
	
	if ($vAuth === true)
	{
		
	 
		//$hypStatus = getRequestPlanetInfo(HYP_DATA_TRADE);
		$hypStatus = getRequestPlanetInfo();
		
		echo getMenu();
		
		// Initialisations
		$aoPlanetOwned 	= array();
		$i 				= 0;
		
		while (isset($hypStatus["planet".$i]))
		{
			// Initialisations
			$oPlanet 	= new Planet();
			
			$oPlanet->setName($hypStatus["planet".$i]);
			$oPlanet->setCoords($hypStatus["x".$i]	, $hypStatus["y".$i]);
			$oPlanet->setGouv($hypStatus["gov".$i]	, $hypStatus["govd".$i]);
			$oPlanet->setInfo($hypStatus["size".$i]	, $hypStatus["orbit".$i]);
			$oPlanet->setProduction($hypStatus["ptype".$i], $hypStatus["tax".$i], $hypStatus["exploits".$i], $hypStatus["expinpipe".$i], $hypStatus["activity".$i]);
			$oPlanet->setPopulation($hypStatus["pop".$i],$hypStatus["race".$i]);
			$oPlanet->setEnergy($hypStatus["nrj".$i], $hypStatus["nrjmax".$i]);
			$oPlanet->setCivLevel($hypStatus["civlevel".$i]);
			$oPlanet->setTag($hypStatus["tag1_".$i], (isset($hypStatus["tag2_".$i]))? $hypStatus["tag2_".$i] : "");
			$oPlanet->setPublicTag($hypStatus["publictag".$i]);
			$oPlanet->setDefBonus($hypStatus["defbonus".$i]);
			
			$oPlanet->setPurif($hypStatus["purif".$i]);
			$oPlanet->setParano($hypStatus["parano".$i]);
			$oPlanet->setBlock($hypStatus["block".$i]);
			$oPlanet->setBhole($hypStatus["bhole".$i]);
			$oPlanet->setStasis($hypStatus["stasis".$i]);
			$oPlanet->setNexus($hypStatus["nexus".$i]);
			$oPlanet->setEcomark($hypStatus["ecomark".$i]);
			$oPlanet->setPlanetId($hypStatus["planetid".$i]);
			$oPlanet->setFactories($hypStatus["factories".$i]);
			
			// Affichage
			echo $oPlanet->dispInfos();
			
			array_push($aoPlanetOwned, $oPlanet);
			
			// Incrémentation
			$i++;
		}
		
		var_dump($hypStatus);
		
		
		
	} else {
	 
		// Todo : reprendre le formulaire de la premiere page
		echo '<h1>' . $vAuth . '</h1>
		<form action="login.php" method="post">
		   <input type="text" name="loginName" 		/>
		   <input type="text" name="loginHapiKey" 	/>
		   <input type="submit" />
		</form>';
	}
	

  ?>
 </body>
</html>






