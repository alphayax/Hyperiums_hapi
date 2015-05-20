<?php
	
	/**
	* Classe Planete
	* @desc	Contient toutes les données d'une planete controlee
	*/
	class Planet
	{
		/** Attributs **/
		protected $s_name;		// Nom de la planete
		protected $s_X;			// Coordonées en X
		protected $s_Y;			// Coordonées en Y
		protected $s_size;		// Taille de la planete
		protected $s_orbit;		// Position dans le système solaire actuel
		protected $s_gov;		// Gouverement
		protected $s_govd;		// Gouvernement (nombre de jours restants)
		protected $s_ptype;		// Type de production
		protected $s_tax;		// Taux de taxes
		protected $s_exploits;	// Exploitations
		protected $s_expinpipe;	// Exploitations en construction
		protected $s_activity;	// Activité de la planete
		protected $s_pop;		// Population de la planete
		protected $s_race;		// Race
		protected $s_nrj;		// Energie disponible
		protected $s_nrjmax;	// Energie maximum 
		protected $s_purif;		// Purification
		protected $s_parano;	// Mode parano
		protected $s_block;		// ?? Blocus
		protected $s_bhole;		// Trou noir
		protected $s_stasis;	// Stase
		protected $s_nexus;		// ?? Nexus
		protected $s_ecomark;	// Ecomarck
		protected $s_planetid;	// ID de la planete
		protected $s_publictag;	// Tag public
		protected $s_factories;	// Nombe d'usines 
		protected $s_civlevel;	// Niveau de civilisation
		protected $s_defbonus;	// Fortifications
		protected $s_tag1;		// Tag d'alliance (1er)
		protected $s_tag2;		// Tag d'alliance (2nd)
		
		/** Accesseurs **/
		public function setName($psName)			{	$this->s_name 		= $psName;		}
		public function setX($psX)					{	$this->s_X 			= $psX;			}
		public function setY($psY)					{	$this->s_Y 			= $psY;			}
		public function setSize($psSize)			{	$this->s_size 		= $psSize;		}
		public function setOrbit($psOrbit)			{	$this->s_orbit 		= $psOrbit;		}
		public function setGov($psGov)				{	$this->s_gov		= $psGov;		}
		public function setGovd($psGovD)			{	$this->s_govd		= $psGovD;		}
		public function setPType($psPType)			{	$this->s_ptype		= $psPType;		}
		public function setTax($psTax)				{	$this->s_tax		= $psTax;		}
		public function setExploits($psExploits)	{	$this->s_expoits 	= $psExploits;	}
		public function setExpinpipe($psExpInPipe)	{	$this->s_expinpipe	= $psExpInPipe;	}
		public function setActivity($psActivity)	{	$this->s_activity 	= $psActivity;	}
		public function setPop($psPop)				{	$this->s_pop 		= $psPop;		}
		public function setRace($psRace)			{	$this->s_race 		= $psRace;		}
		public function setNrj($psNRJ)				{	$this->s_nrj 		= $psNRJ;		}
		public function setNrjMax($psNRJMax)		{	$this->s_nrjmax 	= $psNRJMax;	}
		public function setPurif($psPurif)			{	$this->s_purif 		= $psPurif;		}
		public function setParano($psParano)		{	$this->s_parano		= $psParano;	}
		public function setBlock($psBlock)			{	$this->s_block 		= $psBlock;		}
		public function setBhole($psBHole)			{	$this->s_bhole 		= $psBHole;		}
		public function setStasis($psStasis)		{	$this->s_stasis		= $psStasis;	}
		public function setNexus($psNexus)			{	$this->s_nexus 		= $psNexus;		}
		public function setEcomark($psEcomark)		{	$this->s_ecomark	= $psEcomark;	}
		public function setPlanetId($psPlanetId)	{	$this->s_planetid	= $psPlanetId;	}
		public function setPublicTag($psPublicTag)	{	$this->s_publictag 	= $psPublicTag;	}		
		public function setFactories($psFactories)	{	$this->s_factories	= $psFactories;	}
		public function setCivLevel($psCivLevel)	{	$this->s_civlevel 	= $psCivLevel;	}		
		public function setDefBonus($psDefBonus)	{	$this->s_defbonus 	= $psDefBonus;	}	
		public function setTag1($psTag1)			{	$this->s_tag1		= $psTag1;		}
		public function setTag2($psTag2)			{	$this->s_tag2 		= $psTag2;		}
		
		/** Accesseurs spéciaux **/
		public function setCoords($psX, $psY)			{	$this->s_X	  		= $psX;			$this->s_Y	  	= $psY;			}
		public function setTag($psTag1, $psTag2)		{	$this->s_tag1		= $psTag1;		$this->s_tag2	= $psTag2;		}
		public function setGouv($psGov, $psGovd)		{	$this->s_gov  		= $psGov;		$this->s_govd	= $psGovd;		}
		public function setInfo($psSize, $psOrbit)		{	$this->s_size		= $psSize;		$this->s_orbit	= $psOrbit;		}
		public function setPopulation($psPop, $psRace)	{	$this->s_pop		= $psPop;		$this->s_race	= $psRace;		}
		public function setEnergy($psNrj, $psNrjMax)	{	$this->s_nrj		= $psNrj;		$this->s_nrjmax	= $psNrjMax;	}
		public function setProduction($psType, $psTax, $psExploit, $psExpInPipe, $psActivity) {	
			$this->s_ptype		= $psType;	
			$this->s_tax		= $psTax;
			$this->s_exploits	= $psExploit;
			$this->s_expinpipe	= $psExpInPipe;
			$this->s_activity	= $psActivity;
		}
		
		/** Methodes **/
		public function dispActivity() {
			// Initialisations
			$sHTML 		= '';
			$sActivity 	= number_format($this->s_activity, 0, ',', ' ');
			
			$sHTML .= getFont(" Activité: ");
			$sHTML .= getFont($sActivity , 2, CONST_FONTCOLOR_BLUE);
			
			return $sHTML;
		}
		
		public function dispPopulation() {
			// Initialisations
			$sHTML 			= '';
			$sPopulation 	= number_format($this->s_pop, 0, ',', ' ');
			
			$sHTML .= getFont(" Taille: ");
			$sHTML .= getFont($sPopulation, 2, CONST_FONTCOLOR_BLUE);
			$sHTML .= getFont(" M");
			
			return $sHTML;
		}
		
		protected function dispGouv() {
			$sHTML 				= '';
			$sGouvernement 		= '';
			$nGouvernementDays	= '';
			
			$sHTML .= getFont('Gouvernement: ');
			
			switch ($this->s_gov) {
				case 0 	: $sGouvernement 	= 'Dictatorial'; 			break;
				case 1 	: $sGouvernement 	= 'Autoritaire'; 			break;
				case 2 	: $sGouvernement 	= 'Démocratique'; 			break;
				case 3 	: $sGouvernement 	= 'Protectorat Hyperiums'; 	break;
				default : $sGouvernement 	= '-- Inconnu --';
			}
			
			$sGouvernement = getFont($sGouvernement, 2, CONST_FONTCOLOR_BLUE);
				
			if ($this->s_govd > 0) {
				$nGouvernementDays = getFont($this->s_govd, 2, CONST_FONTCOLOR_BLUE);
				$nGouvernementDays = ' ('. $nGouvernementDays .' jours)';
			}
			
			$sHTML .= getFont($sGouvernement . $nGouvernementDays);
			$sHTML .= "<br />";
			
			return $sHTML;
		}
		
		protected function dispType() {
			$sHTML 		= '';
			$sProdType 	= '';
			
			
			switch ($this->s_ptype) {
				case 0 	: $sProdType 	= 'Agro'; 		break;
				case 1 	: $sProdType 	= 'Minero'; 	break;
				case 2 	: $sProdType 	= 'Techno'; 	break;
			}
			
			//$sHTML .= getImage('prod_'. strtolower($sProdType) .'.gif');
			$sHTML .= getImage($sProdType .'.gif');
			$sHTML .= getFont(' Type: ');
			$sHTML .= getFont($sProdType, 2, CONST_FONTCOLOR_BLUE);
			
			return $sHTML;
		}
		
		protected function dispDefBonus() {
			$sHTML 		= '';
			
			if ($this->s_defbonus == 0)
				return getFont(' <i>Aucune fortification</i> ');
			
			$sHTML .= getFont(' Fortifications: ');
			$sHTML .= getFont($this->s_defbonus, 2, CONST_FONTCOLOR_BLUE);
			$sHTML .= getFont('% ');
			
			//<img src=\"http://www.hyperiums.com/misc/bunker7.gif\" align=\"bottom\" border=\"0\">
			
			return $sHTML;
		}
		
		protected function dispPurif() {
			$sHTML 		= '';
			
			if ($this->s_purif > 0) {
				
				$nbJours = $this->s_purif / 24;
				$nbJours = number_format($nbJours, 1, ',', ' ');
				$nbJours = getFont($nbJours, 2, CONST_FONTCOLOR_BLUE);
				
				$sHTML .= getFont(' Purification terminée dans ');
				$sHTML .= getFont($this->s_purif, 2, CONST_FONTCOLOR_BLUE);
				$sHTML .= getFont(' heures. (' . $nbJours .' jours)');
			}
			
			return $sHTML;
		}
		
		protected function dispFactories() {
			$sHTML 		= '';
			
			$sHTML .= getImage('factory.gif');
			$sHTML .= getFont(' ' .$this->s_factories, 2, CONST_FONTCOLOR_BLUE);
			$sHTML .= getFont(' usines');
			
			return $sHTML;
		}
		
		protected function dispName() {
			$sHTML = "";
			
			// $sHTML .= "<a href=\"Planet?planetid=\">";
			$sHTML .= getFont("<b>". $this->s_name ."</b> ", 3);
			// $sHTML .= "</a>";
			$sHTML .= getFont(" (". $this->s_X .",". $this->s_Y .")");
			
			return $sHTML;
		}
		
		protected function dispTag() {
			$sHTML = "";
			
			if ($this->s_tag1 != "") {
				$sHTML .= " [<b>";
				$sHTML .= ($this->s_tag1 == $this->s_publictag)? getFont($this->s_tag1, 2, CONST_FONTCOLOR_WHITE) : $this->s_tag1;
				$sHTML .= "</b>] ";
			}
			
			if ($this->s_tag2 != "") {
				$sHTML .= " [<b>";
				$sHTML .= ($this->s_tag2 == $this->s_publictag)? getFont($this->s_tag2, 2, CONST_FONTCOLOR_WHITE) : $this->s_tag2;
				$sHTML .= "</b>] ";
			}
			
			return $sHTML;
		}
		
		protected function dispEnergy() {
			// Initialisations
			$sHTML 	= "";
			$i		= 0;
			$nRatio = (float) ($this->s_nrj / $this->s_nrjmax) * 20;
			
			$sHTML .= "<table bgcolor=\"#000000\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\">";
			$sHTML .= " <tbody>";
			$sHTML .= "  <tr>";
			while ($i < $nRatio) {
				$sHTML .= "   <td bgcolor=\"#e8d37f\" width=\"4\">.</td>";
				$i++;
			}
			while ($i < 20) {
				$sHTML .= "   <td bgcolor=\"#7a7048\" width=\"4\">.</td>";
				$i++;
			}
			$sHTML .= "   <td> ";
			$sHTML .= getFont($this->s_nrj, 2, CONST_FONTCOLOR_BLUE) ."/". getFont($this->s_nrjmax);	
			$sHTML .= "   </td>";
			$sHTML .= "  </tr>";
			$sHTML .= " </tbody>";
			$sHTML .= "</table>";
			
			return $sHTML;
		}
		
		protected function dispEcomark() {
			// Initialisations
			$sHTML 	= "";
			$i		= 0;
			$nRatio = (float) ($this->s_ecomark / 10);
			
			$sHTML .= "<table bgcolor=\"#000000\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\">";
			$sHTML .= " <tbody>";
			$sHTML .= "  <tr>";
			while ($i < $nRatio) {
				$sHTML .= "   <td bgcolor=\"#226633\" width=\"4\">.</td>";
				$i++;
			}
			while ($i < 10) {
				$sHTML .= "   <td bgcolor=\"#7a7048\" width=\"4\">.</td>";
				$i++;
			}
			$sHTML .= "   <td> ";
			$sHTML .= getFont(' Ecomark: ');
			$sHTML .= getFont($this->s_ecomark, 2, CONST_FONTCOLOR_BLUE);
			$sHTML .= getFont('% ');
			$sHTML .= "   </td>";
			$sHTML .= "  </tr>";
			$sHTML .= " </tbody>";
			$sHTML .= "</table>";
			
			return $sHTML;
		}
		
		protected function dispCivLevel() {
			$sHTML = '';
			
			$sHTML .= getImage('influ_unit.gif');
			$sHTML .= getFont(' Civ: ');
			$sHTML .= getFont($this->s_civlevel, 2, CONST_FONTCOLOR_BLUE);
			
			return $sHTML;
		}
		
		protected function dispParano() {
			$sHTML = '';
			
			if ($this->s_parano == 1)
				$sHTML .= getImage('parano_icon.gif');
			else
				$sHTML .= getImage('parano_icon_bak.gif');
			
			return $sHTML;
		}
		
		protected function dispStasis() {
			$sHTML = '';
			
			if ($this->s_stasis == 1)
				$sHTML .= getImage('stasis_icon.gif');
			else
				$sHTML .= getImage('system_icon.gif');
			
			return $sHTML;
		}
		
		protected function dispBHole() {
			$sHTML = '';
			
			if ($this->s_bhole != 0)
				$sHTML .= getImage('BH.gif');
			
			return $sHTML;
		}
		
		
		protected function dispRace() {
			// Initialisations
			$sHTML = '';
			$sRace = '';
			
			switch ($this->s_race) {
				case 0 : $sRace = 'Human';	break;
				case 1 : $sRace = 'Azterk';	break;
				case 2 : $sRace = 'Xillor';	break;
			}
			
			$sHTML .= getImage('pop_icon_'. $sRace .'.gif');
			$sHTML .= getFont(' Race: ');
			$sHTML .= getFont($sRace, 2, CONST_FONTCOLOR_BLUE);
			
			return $sHTML;
		}
		
		public function dispInfos() {
			$sHTML = "
			<div class=\"tabbertab\" title=\"\">
			<br clear=\"left\">
			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"800\">
			 <tbody>
			  <tr>
			   <td align=\"center\" valign=\"top\" width=\"100\">&nbsp;</td>
			   <td>
			   
			    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
				 <tbody>
				  <tr>
				   <td colspan=\"3\" >
				   "
				   . $this->dispName() . " {" . $this->s_planetid . "} " 
				   . $this->dispTag()  
				   ."
				   </td>
				  </tr>
				  
				  <tr>
				   <td valign=\"top\" width=\"300\">
				   "
					. $this->dispRace() 
					. "<br/>"
					. $this->dispType() 
					. "<br/>"
					. $this->dispPopulation() 	
					. "<br/>"	
					. $this->dispCivLevel() 
					. "<br/>"
					. $this->dispGouv()
					. $this->dispPurif()
					. "<br/>"
				    . $this->s_nexus
					. "
				   </td>
				
				   <td align=\"center\" width=\"300\">
					    "
						. $this->dispEcomark()
						. "<br />"
						. $this->dispActivity() 
					    . "
				   </td>
				
				   <td align=\"center\" width=\"300\">
					    "
						. $this->dispParano()
						. $this->dispStasis()
						. $this->s_block
						. $this->dispBHole()
						. "<br />"
					    . $this->dispEnergy()
						. "<br />"
						. $this->dispDefBonus()
						. "<br />"
						. $this->dispFactories()
					    . "
				   </td>
				  </tr>
				 </tbody>
				</table>
				
			   </td>
			  </tr>
			 </tbody>
			</table>";
			$sHTML .= "</div>";
			
			return $sHTML;
		}
	}
	
?>