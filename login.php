<html>
 <head>
  <link href="./css/hypgen.css" rel="stylesheet" type="text/css" />
 </head>
 <body bgcolor="#000000" leftMargin="0" topMargin="0" marginwidth="0" marginheight="0">
  <?php
  
	// Session
	session_start();
   	
	/** Inclusions **/
	// Composants principaux
	include_once('./include/HTMLgenerator.php'		);
	include_once('./include/request.php'			);
	include_once('./include/authentification.php'	);
	include_once('./include/menu.php'				);
	

	// Verification de l'authentification
	$vAuth = checkAuth();
	
	if ($vAuth === true)
	{
		echo getMenu();
	} else {
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