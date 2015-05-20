<?php
	
	/** Constantes **/
	
	
	/**
	* @desc		
	* @return	
	*/
	function getMenu() {
		
		$sHTML = '<br><br>';
		
		$sHTML .= '<table>';
		$sHTML .= ' <tbody>';
		
		// Temps serveur
		$sHTML .= ' <tr>';
		$sHTML .= '  <td colspan="2" align="right">';
		$sHTML .= 	  getFont('Temps serveur: '. $_SESSION[SESSION_SERVERTIME]);
		$sHTML .= '  </td>';
		$sHTML .= '  <td></td>';
		$sHTML .= ' </tr>';
		
		// Technologies
		$sHTML .= ' <tr>';
		$sHTML .= '  <td align="center" width="100">&nbsp;';
		// $sHTML .= '   <a href="/servlet/Techtree" target="_top">';
		// $sHTML .= '    <br />';
		// $sHTML .= '    <font color="#aaaa77" size="1" face="verdana,arial">Technos</font>';
		// $sHTML .= '   </a>';
		$sHTML .= '  </td>';
		
		// Premiere ligne menu
		$sHTML .= '  <td width="600">';
		$sHTML .= '   <table border="0" cellpadding="0" cellspacing="1" width="600">';
		$sHTML .= '    <tbody>';
		$sHTML .= '     <tr>';
		$sHTML .= '      <td align="center" width="200">';
		$sHTML .= '       <a class="topmenu" style="display: block; width: 100%;" href="./planet.php" target="_top">';
		$sHTML .= 		   getFont('Planètes contrôlées');
		$sHTML .= '       </a>';
		$sHTML .= '      </td>';
		$sHTML .= '      <td align="center" width="200">';
		// $sHTML .= '       <a class="topmenu" style="display: block; width: 100%;" href="/servlet/Maps" target="_top">';
		$sHTML .= 		   getFont('Cartes &amp; marchés');
		// $sHTML .= '       </a>';
		$sHTML .= '      </td>';
		$sHTML .= '      <td align="center" width="200">';
		// $sHTML .= '       <a class="topmenu_alert" style="display: block; width: 100%;" href="/servlet/Forums" target="_top">';
		$sHTML .= 		   getFont('Forums de discussion');
		// $sHTML .= '       </a>';
		$sHTML .= '      </td>';
		$sHTML .= '     </tr>';
		
		// Seconde ligne menu
		$sHTML .= '     <tr>';
		$sHTML .= '      <td align="center" width="200">';
		// $sHTML .= '       <a class="topmenu" style="display: block; width: 100%;" href="/servlet/Floats" target="_top">';
		$sHTML .= 		   getFont('Flottes &amp; armées');
		// $sHTML .= '       </a>';
		$sHTML .= '      </td>';
		$sHTML .= ' 	 <td align="center" width="200">';
		$sHTML .= ' 	  <a class="topmenu" style="display: block; width: 100%;" href="./trade.php" target="_top">';
		$sHTML .= 		   getFont('Commerce et exploitations');
		$sHTML .= '       </a>';
		$sHTML .= ' 	 </td>';
		$sHTML .= ' 	 <td align="center" width="200">';
		// $sHTML .= ' 	  <a class="topmenu" style="display: block; width: 100%;" href="/servlet/Infiltrations" target="_top">';
		$sHTML .= 		   getFont('Infiltrations');
		// $sHTML .= '       </a>';
		$sHTML .= ' 	 </td>';
		$sHTML .= ' 	</tr>';
		$sHTML .= '    </tbody>';
		$sHTML .= '   </table>';
		
		// 3eme ligne menu
		$sHTML .= '   <table border="0" cellpadding="0" cellspacing="1" width="600">';
		$sHTML .= '    <tbody>';
		$sHTML .= '     <tr>';
		$sHTML .= ' 	 <td valign="middle" width="150">';
		// $sHTML .= ' 	  <a class="submenu1" style="display: block; width: 100%;" target="_top" href="Player">';
		$sHTML .= 		   getFont('&nbsp;<b>RenoVII</b>');
		// $sHTML .= ' 	  </a>';
		$sHTML .= ' 	 </td>';
		$sHTML .= ' 	 <td width="175">';
		// $sHTML .= ' 	  <a class="submenu1" style="display: block; width: 100%;" target="_top" href="Cash">';
		$sHTML .= 		   getFont('Cash <b>7,777,777,777</b>');
		// $sHTML .= ' 	  </a>';
		$sHTML .= ' 	 </td>';
		$sHTML .= ' 	 <td align="center" width="100">';
		// $sHTML .= ' 	  <a class="submenu1" style="display: block; width: 100%;" target="_top" href="Preferences">';
		$sHTML .= 		   getFont('Préférences');
		// $sHTML .= ' 	  </a>';
		$sHTML .= ' 	 </td>';
		$sHTML .= ' 	 <td align="center" width="85">';
		// $sHTML .= ' 	  <a class="submenu1" style="display: block; width: 100%;" target="_top" href="Logout">';
		$sHTML .= 		   getFont('Quitter');
		// $sHTML .= ' 	  </a>';
		$sHTML .= ' 	 </td>';
		$sHTML .= ' 	 <td align="center" width="70">';
		// $sHTML .= ' 	  <a class="submenu1" style="display: block; width: 100%;" target="_top" href="Forums?helptop=">';
		$sHTML .= 		   getFont('Aide');
		// $sHTML .= ' 	  </a>';
		$sHTML .= ' 	 </td>';
		$sHTML .= ' 	</tr>';
		$sHTML .= '    </tbody>';
		$sHTML .= '   </table>';
		
		$sHTML .= '  </td>';
		$sHTML .= ' </tr>';
		$sHTML .= '</tbody>';
		$sHTML .= '</table>';
		
		
		return $sHTML;
	}
	
?>