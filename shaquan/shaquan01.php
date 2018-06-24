<!DOCTYPE html>
<html>
<head>
<title>Iconic NPC Shaquan Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Mutant Crawl Classics Sentinel Character Generator. Goodman Games.">
	<meta name="keywords" content="Mutant Crawl Classics, Jim Wampler, Goodman Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2018">
		

	<link rel="stylesheet" type="text/css" href="css/mcc_shaquan.css">
	<link rel="stylesheet" type="text/css" href="css/mcc_shaquan_post.css">
    
    
    <script type="text/javascript" src="./js/dieRoll.js"></script>
    <script type="text/javascript" src="./js/abilityScoreMod.js"></script>
    <script type="text/javascript" src="./js/profession.js"></script>
    <script type="text/javascript" src="./js/birthAugur.js"></script>
    <script type="text/javascript" src="./js/adjustments.js"></script>
    <script type="text/javascript" src="./js/hitpoints.js"></script>
    <script type="text/javascript" src="./js/shamanEquipment.js"></script>
    
    
    
</head>
<body>
        <?php
    
    include 'php/artifacts.php';
    include 'php/adjustments.php';
    include 'php/weaponsArmour.php';

    /*Wetware Program Level 1*/
    
    function getWetwareLevel1($patronAI)
    {

        $wetwareLevel1Programs = array
        (
            array("1", "Security Override", "10 or Varies", "Varies", "1 round", "None", "209"),
            array("1", "Elemental Shield", "Varies", "1 round/CL", "1 round", "None", "215"),
            array("1", "Sightblinder", "Self or Varies", "Varies", "1 round", "None", "221"),
            array("1", "Security Sweep", "Varies", "Varies", "1 round", "see page 229", "229"),
            array("1", "Plasma Sword", "Self", "2 rounds/CL", "1 round", "None", "235"),
            array("1", "Biological Ark", "20'", "Varies", "1 round", "None", "243"),
            array("1", "Query", "Personal", "Varies", "1 round", "None", "249"),
            array("1", "Nanogram", "Self", "1 turn or...", "1 round", "None", "255")

        );

        if($patronAI === "Achroma")
            {
                $patronValue = 0;
            }
        else if($patronAI === "Gaea")
            {
                $patronValue = 1;
            }
        else if($patronAI === "Hale-e")
            {
                $patronValue = 2;
            }
        else if($patronAI === "Hexacoda")
            {
                $patronValue = 3;
            }
        else if($patronAI === "Mangala")
            {
                $patronValue = 4;
            }
        else if($patronAI === "ME10")
            {
                $patronValue = 5;
            }
        else if($patronAI === "Tetraplex")
            {
                $patronValue = 6;
            }
        else if($patronAI === "Ukur")
            {
                $patronValue = 7;
            }
        else
            {
                $patronValue = 8;
            }

            return $wetwareLevel1Programs[$patronValue];


    }
    


    function wetware1Manifest($patronAI)
    {
        $level1WetwareManifest = "";
        
        if($patronAI === "Achroma")
            {
                $archroma = array("Blue glow appears on the tip of the shaman’s forefinger accompanied by a high-pitched whine.", 
                                 "Green, strobing rectilinear scan pattern emanates from the shaman’s forehead which moves up and down over the barred portal.",
                                 "Concentric electromagnetic ripples in the air radiate from the shaman’s hands towards the barred portal.",
                                 "The shaman’s eyes glow a bright red as a booming metallic voice intones 'Security Override Activated'.");
            
                $random = rand(0,3);
            
                $level1WetwareManifest = $archroma[$random];
            }
        else if($patronAI === "Gaea")
            {
                $level1WetwareManifest = "See page 215";
            }
        else if($patronAI === "Hale-e")
            {
                $halee = array("The shaman’s form blurs and shifts.", 
                                 "All ambient light is briefly dimmed as the shaman refracts the light.",
                                 "The shaman’s form momentarily pixelates before reforming in high definition.",
                                 "Rings of blue light pass up and down the shaman’s form as he/she transforms.");
            
                $random = rand(0,3);
            
                $level1WetwareManifest = $halee[$random];
            }
        else if($patronAI === "Hexacoda")
            {
                $hexacoda = array("The shaman’s eyes begin to glow a soft scanner green. Within the shaman’s field of vision, traps glow a similar hue.", 
                                 "A thin antenna rises out of the shaman’s head and a faint voice whispers information within the shaman’s hearing.",
                                 "The QR code on the shaman’s arm begins emitting a searchlight-like beam of light that homes in on and highlights traps.");
            
                $random = rand(0,2);
            
                $level1WetwareManifest = $hexacoda[$random];
            }
        else if($patronAI === "Mangala")
            {
                $level1WetwareManifest = "See page 235";
            }
        else if($patronAI === "ME10")
            {
                $level1WetwareManifest = "The shaman’s voice becomes increasingly shrill and pedantic as the evocation of the program continues.";
            }
        else if($patronAI === "Tetraplex")
            {
                $tetraplex = array("The shaman’s eyes turn an opalescent white.", 
                                 "The shaman’s eyes and mouth seal shut for the duration of the casting.",
                                 "The strange hieroglyphs of the Ancients appear and scroll across the shaman’s skin, covering them with unintelligible wisdom of the ages.");
            
                $random = rand(0,2);
            
                $level1WetwareManifest = $tetraplex[$random];
            }
        else if($patronAI === "Ukur")
            {
                $level1WetwareManifest = "See page 255";
            }
        
        return $level1WetwareManifest;
    }
           
   
    
        if(isset($_POST["thePatronAI"]))
        {
            $patronAI = $_POST["thePatronAI"];
        }
   
        
    $level1WetwareProgram = getWetwareLevel1($patronAI);
    $wetwareManifestLevel1 = wetware1Manifest($patronAI);
   
    
 /*   $level2WetwareProgram = getWetwareLevel2($patronAI);
    $wetwareManifestLevel2 = wetware2Manifest($patronAI);
    
    $level3WetwareProgram = getWetwareLevel3($patronAI);
    $wetwareManifestLevel3 = wetware3Manifest($patronAI);

    */
     
    
        if(isset($_POST["theArchaicAlignment"]))
        {
            $archaicAlignment = $_POST["theArchaicAlignment"];
        }
    
        if(isset($_POST["theArtifact1"]))
        {
            $artifact1 = $_POST["theArtifact1"];
        }
    
    
        /*Bonus to AC value*/
        $acBonusFromArtifact = 0;
            
        /*Bonus to Strength value*/
        $strengthBonusFromArtifact = 0;
    
    

        $artifactName1 = getArtifact1($artifact1)[0];
        $artifactCheck1 = getArtifact1($artifact1)[1];
        $artifactEffect1 = getArtifact1($artifact1)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact1 = artifactAcBonus ($artifactName1, $acBonusFromArtifact);
    
        /*Determines whether Artifact grants strength bonus*/
        $strengthBonusFromArtifact1 = artifactStrengthBonus ($artifactName1, $strengthBonusFromArtifact);
    
    
        if(isset($_POST["theArtifact2"]))
        {
            $artifact2 = $_POST["theArtifact2"];
        }

        $artifactName2 = getArtifact1($artifact2)[0];
        $artifactCheck2 = getArtifact1($artifact2)[1];
        $artifactEffect2 = getArtifact1($artifact2)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact2 = artifactAcBonus ($artifactName2, $acBonusFromArtifact);
    
        /*Determines whether Artifact grants strength bonus*/
        $strengthBonusFromArtifact2 = artifactStrengthBonus ($artifactName2, $strengthBonusFromArtifact);
    
    
        if(isset($_POST["theArtifact3"]))
        {
            $artifact3 = $_POST["theArtifact3"];
        }

        $artifactName3 = getArtifact1($artifact3)[0];
        $artifactCheck3 = getArtifact1($artifact3)[1];
        $artifactEffect3 = getArtifact1($artifact3)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact3 = artifactAcBonus ($artifactName3, $acBonusFromArtifact);
    
        /*Determines whether Artifact grants strength bonus*/
        $strengthBonusFromArtifact3 = artifactStrengthBonus ($artifactName3, $strengthBonusFromArtifact);
    
    
        if(isset($_POST["theArtifact4"]))
        {
            $artifact4 = $_POST["theArtifact4"];
        }

        $artifactName4 = getArtifact1($artifact4)[0];
        $artifactCheck4 = getArtifact1($artifact4)[1];
        $artifactEffect4 = getArtifact1($artifact4)[2];
        
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact4 = artifactAcBonus ($artifactName4, $acBonusFromArtifact);
    
        /*Determines whether Artifact grants strength bonus*/
        $strengthBonusFromArtifact4 = artifactStrengthBonus ($artifactName4, $strengthBonusFromArtifact);
    
    
        $totalArtifactAC = $acBonusFromArtifact1 +$acBonusFromArtifact2 + $acBonusFromArtifact3 + $acBonusFromArtifact4;
    
        $totalArtifactStrength = $strengthBonusFromArtifact1 +$strengthBonusFromArtifact2 + $strengthBonusFromArtifact3 + $strengthBonusFromArtifact4;
    
          
        if(isset($_POST["theIconicArmour"]))
        {
            $npcArmour = $_POST["theIconicArmour"];
        }
    
        $armourName = getArmour($npcArmour)[0];
        $armourAC = getArmour($npcArmour)[1];
        $armourCheckPen = getArmour($npcArmour)[2];
        $armourSpeedPen = getArmour($npcArmour)[3];
        $armourFumble = getArmour($npcArmour)[4];
    
    
        $speedReduction = speedReductionArmour($armourName);
        $armourBonusToArmourClass = acBonusForArmour($armourName);
      
        $fumbieDieArmour = armourFumbleDie($armourName);
    
            
        if(isset($_POST["theiconicWeapon1"]))
        {
            $npcWeapon1 = $_POST["theiconicWeapon1"];
        }
    
        $npcWeaponName1 = getWeapon($npcWeapon1)[0];
        $npcWeaponDamage1 = getWeapon($npcWeapon1)[1];
    
    
        if(isset($_POST["theiconicWeapon2"]))
        {
            $npcWeapon2 = $_POST["theiconicWeapon2"];
        }
    
        $npcWeaponName2 = getWeapon($npcWeapon2)[0];
        $npcWeaponDamage2 = getWeapon($npcWeapon2)[1];
                
        
    
        if(isset($_POST["theiconicWeapon3"]))
        {
            $npcWeapon3 = $_POST["theiconicWeapon3"];
        }
    
        $npcWeaponName3 = getWeapon($npcWeapon3)[0];
        $npcWeaponDamage3 = getWeapon($npcWeapon3)[1];

    
        if(isset($_POST["theiconicWeapon4"]))
        {
            $npcWeapon4 = $_POST["theiconicWeapon4"];
        }
    
        $npcWeaponName4 = getWeapon($npcWeapon4)[0];
        $npcWeaponDamage4 = getWeapon($npcWeapon4)[1];
               


    
    ?>
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
    	<span id="name"></span>
           
		<span id="profession"></span>
		<span id="strength"></span> <span id="strengthMod"></span>
		<span id="agility"></span>  <span id="agilityMod"></span>
           
		<span id="stamina"></span>  <span id="staminaMod"></span>
		<span id="personality"></span> <span id="personalityMod"></span>
		<span id="intelligence"></span> <span id="intelligenceMod"></span>
		<span id="luck"></span> <span id="luckMod"></span>
		  
    
		   
		<p id="birthAugur"><span id="luckySign"></span>: <span id="luckyRoll"></span> (<span id="LuckySignBonus"></span>)</p>
           
        <span id="baseAC"></span>
        <span id="level"></span>
        <span id="title"></span>
       
      
           
		<span id="hitPoints"></span> 
        
        
        <span id="ref"></span>
        <span id="fort"></span>
        <span id="will"></span>
		
       
        <span id="init"></span>
		<span id="melee"></span>
        <span id="range"></span>
		<span id="meleeDamage"></span>
        <span id="rangeDamage"></span>
           

        <span id="fumbleDie"></span>
           <span id="speed"></span>
           
		<span id="critDie"></span>
		<span id="critTable"></span>
           

        <span id="actionDice"></span>
           
           <span id="artifactCheck"></span>
           <span id="maxTech"></span>
       
		   <span id="dieRollMethod"></span>
       
       <div id="languageGroup">
       <span id="languages"></span>
    <span id="additionalLanguages"></span>
           </div>
       
       
       <span id="modifiedFumble"></span>
       
       <span id="modifiedSpeed"></span>
       
       <span id="modifiedArmourClass"></span>
       
       <span id="equipmentGear"></span>

       <span id="wetwareNumber"></span>
	                 
       <span id="arcAlignment">
           <?php
                echo $archaicAlignment;
           ?>
        </span>
	   
       	                 
       <span id="artifactName1">
           <?php
                echo $artifactName1;
           ?>
        </span>
              
       <span id="artifactCheck1">
           <?php
                echo $artifactCheck1;
           ?>
        </span>
              
       <span id="artifactEffect1">
           <?php
                echo $artifactEffect1;
           ?>
        </span>
      
              	                 
       <span id="artifactName2">
           <?php
                echo $artifactName2;
           ?>
        </span>
              
       <span id="artifactCheck2">
           <?php
                echo $artifactCheck2;
           ?>
        </span>
              
       <span id="artifactEffect2">
           <?php
                echo $artifactEffect2;
           ?>
        </span>
      
                     	                 
       <span id="artifactName3">
           <?php
                echo $artifactName3;
           ?>
        </span>
              
       <span id="artifactCheck3">
           <?php
                echo $artifactCheck3;
           ?>
        </span>
              
       <span id="artifactEffect3">
           <?php
                echo $artifactEffect3;
           ?>
        </span>
                            	                 
       <span id="artifactName4">
           <?php
                echo $artifactName4;
           ?>
        </span>
              
       <span id="artifactCheck4">
           <?php
                echo $artifactCheck4;
           ?>
        </span>
              
       <span id="artifactEffect4">
           <?php
                echo $artifactEffect4;
           ?>
        </span>
       
                     
       <span id="armourDescription">
           <?php
                echo $armourName;
           ?>
        </span>       
                     
       <span id="armourBonus">
           <?php
                echo $armourAC;
           ?>
        </span>     
                     
       <span id="armourPenalityCheck">
           <?php
                echo $armourCheckPen;
           ?>
        </span>     
                     
       <span id="armourSpeedPen">
           <?php
                echo $armourSpeedPen;
           ?>
        </span>     
                     
       <span id="fumbleArmourValue">
           <?php
                echo $armourFumble;
           ?>
        </span>
       
                     
       <span id="weaponDescription1">
           <?php
                echo $npcWeaponName1;
           ?>
        </span>
                     
       <span id="weaponDamage1">
           <?php
                echo $npcWeaponDamage1;
           ?>
        </span>
       
                           
       <span id="weaponDescription2">
           <?php
                echo $npcWeaponName2;
           ?>
        </span>
                     
       <span id="weaponDamage2">
           <?php
                echo $npcWeaponDamage2;
           ?>
        </span> 
       
                     
       <span id="weaponDescription3">
           <?php
                echo $npcWeaponName3;
           ?>
        </span>
                     
       <span id="weaponDamage3">
           <?php
                echo $npcWeaponDamage3;
           ?>
        </span>
       
                     
       <span id="weaponDescription4">
           <?php
                echo $npcWeaponName4;
           ?>
        </span>
                     
       <span id="weaponDamage4">
           <?php
                echo $npcWeaponDamage4;
           ?>
        </span>

                          
       <span id="patronAI">
       <?php
            echo $patronAI;
       ?>
           </span>

       
       
       <span id="wetwareLevel1Level">
           <?php
            echo $level1WetwareProgram[0];
           ?>
       </span>
       
       <span id="wetwareLevel1Program">
           <?php
            echo $level1WetwareProgram[1];
           ?>
       </span>
       
       <span id="wetwareLevel1Range">
           <?php
            echo $level1WetwareProgram[2];
           ?>
       </span>
       
       <span id="wetwareLevel1Duration">
           <?php
            echo $level1WetwareProgram[3];
           ?>
       </span>
       
       <span id="wetwareLevel1Activation">
           <?php
            echo $level1WetwareProgram[4];
           ?>
       </span>
       
       
       <span id="wetwareLevel1Save">
           <?php
            echo $level1WetwareProgram[5];
           ?>
       </span>
       
       <span id="wetwareLevel1Page">
           <?php
            echo $level1WetwareProgram[6];
           ?>
       </span>
       
       <span id="wetwareLevel1Manifest">
            <?php
            echo $wetwareManifestLevel1;
            ?>
       </span>
       
       

	   	   
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - Shaquan Character Constructor
	*/
	function Character() {
	
    let strength = <?php echo $totalArtifactStrength ?> + rollDice(6, 4, 1, 0);
    let agility = rollDice(6, 4, 1, 0);
    let stamina = rollDice(6, 4, 1, 0);
    let	personality = rollDice(6, 4, 1, 0);
    let	intelligence = rollDice(6, 4, 1, 0);
    let	luck = rollDice(6, 4, 1, 0);
	let	profession = getProfession();
	let birthAugur = getLuckySign();
	let strengthModifier = getStrengthModifier(strength);
	let staminaModifier = getStaminaModifier(stamina);
	let agilityModifier = getAgilityModifier(agility);
	let personalityModifier = getPersonalityModifier(personality);
	let intelligenceModifier = getIntelligenceModifier(intelligence);
	let luckModifier = getLuckModifier(luck);
    let maxTechLevel = getMaxTechLevel(intelligence);
    let bonusLanguages = fnAddLanguages(intelligenceModifier, birthAugur, luckModifier);
	let baseAC = getBaseArmourClass(agilityModifier, birthAugur, luckModifier);
    let shaman = getShaquan();
		
		let shamanCharacter = {
			"name": "Shaquan",
			"strength": strength,
			"agility": agility,
			"stamina": stamina,
			"personality": personality,
			"intelligence": intelligence,
			"luck": luck,
			"strengthModifier": strengthModifier,
			"agilityModifier": agilityModifier,
			"staminaModifier": staminaModifier,
			"personalityModifier": personalityModifier,
			"intelligenceModifier": intelligenceModifier,
			"luckModifier":  luckModifier,
			"profession":  profession.role,
			"luckySign": birthAugur.luckySign,
			"luckyRoll": birthAugur.luckyRoll,
			"luckySignBonus": getLuckModifier(luck),
            "level": shaman.level,
            "title": shaman.title,
			"hitPoints": hitPoints (shaman, staminaModifier, hitPointAdjustPerLevel(luckySign, luckModifier)),
			"ref": shaman.ref + agilityModifier + adjustRef(birthAugur, luckModifier),
			"fort": shaman.fort + staminaModifier + adjustFort(birthAugur,luckModifier),
			"will": shaman.will + personalityModifier + adjustWill(birthAugur, luckModifier),
			"init": agilityModifier + adjustInit(birthAugur, luckModifier),
			"melee": shaman.attackBonus + strengthModifier + meleeAdjust(birthAugur, getLuckModifier(luck)),
            "meleeDamageBonus": strengthModifier + adjustMeleeDamage(birthAugur, getLuckModifier(luck)),
			"range": shaman.attackBonus + agilityModifier + rangeAdjust(birthAugur, getLuckModifier(luck)),
            "rangeDamageBonus": 0 + adjustRangeDamage(birthAugur, getLuckModifier(luck)),
			"speed": 30 + addLuckToSpeed(birthAugur, getLuckModifier(luck)) + "'",
			"modifiedSpeed": 30 - <?php echo $speedReduction ?> + addLuckToSpeed(birthAugur, getLuckModifier(luck)) + "'",
            "fumbleDie": "d4" + addSign(adjustFumble (birthAugur, getLuckModifier(luck))),
            "modifiedFumbleDie": "<?php echo $fumbieDieArmour ?>" + addSign(adjustFumble (birthAugur, getLuckModifier(luck))),
			"critDie": shaman.critDie + "" + addSign(adjustCrit(birthAugur, getLuckModifier(luck))),
			"critTable": shaman.critTable,
            "actionDice": shaman.actionDice,
            "artifactCheck": "1d20" + "" + addSign(intelligenceModifier + shaman.artifactCheckBonus),
            "techLevel": maxTechLevel,
            "languages": "Nu-Speak", 
            "gear": getEquipment().gear,
            "addLanguages": bonusLanguages,
            "maxWetwareLevel": shaman.maxWetware,
            "acNoArmoured": baseArmourClass,
            "modifiedArmourClass": <?php echo $armourBonusToArmourClass ?> + <?php echo $totalArtifactAC ?> + baseArmourClass
			
		
			

		};
	    if(shamanCharacter.hitPoints <= 0 ){
			shamanCharacter.hitPoints = 1;
		}
		return shamanCharacter;
	  
	  }
	  

    /*getShaman() return the statistics for the Shaman per level*/  
    function getShaquan() {
	let shaman = [
        
		{"level": 1,
		 "title": "Shaman, Acolyte",
		 "actionDice": "1d20",
		 "attackBonus": 0,
		 "critDie": "1d6",
		 "critTable": "I",
		 "hd": 1,
		 "ref": 1,
		 "fort": 1,
		 "will": 1,
		 "artifactCheckBonus": 3,
         "maxWetware": 1
        },
        
		{"level": 2,
		 "title": "Shaman, Adept",
		 "actionDice": "1d20",
		 "attackBonus": 1,
		 "critDie": "1d6",
		 "critTable": "I",
		 "hd": 2,
		 "ref": 1,
		 "fort": 1,
		 "will": 1,
		 "artifactCheckBonus": 4,
         "maxWetware": 1
        },
        
		{"level": 3,
		 "title": "Shaman",
		 "actionDice": "1d20",
		 "attackBonus": 1,
		 "critDie": "1d8",
		 "critTable": "I",
		 "hd": 3,
		 "ref": 1,
		 "fort": 1,
		 "will": 2,
		 "artifactCheckBonus": 5,
         "maxWetware": 2
        },
        
		{"level": 4,
		 "title": "Seer-Shaman",
		 "actionDice": "1d20",
		 "attackBonus": 1,
		 "critDie": "1d8",
		 "critTable": "I",
		 "hd": 4,
		 "ref": 2,
		 "fort": 1,
		 "will": 2,
		 "artifactCheckBonus": 6,
         "maxWetware": 2
        },
                
		{"level": 5,
		 "title": "High-Shaman",
		 "actionDice": "1d20+1d14",
		 "attackBonus": 2,
		 "critDie": "1d10",
		 "critTable": "I",
		 "hd": 5,
		 "ref": 2,
		 "fort": 1,
		 "will": 3,
		 "artifactCheckBonus": 7,
         "maxWetware": 3
        },
               
		{"level": 6,
		 "title": "Shaman Supreme",
		 "actionDice": "1d20+1d16",
		 "attackBonus": 2,
		 "critDie": "1d10",
		 "critTable": "I",
		 "hd": 6,
		 "ref": 2,
		 "fort": 2,
		 "will": 4,
		 "artifactCheckBonus": 8,
         "maxWetware": 3
        },
        		
        {"level": 7,
		 "title": "Shaman Supreme",
		 "actionDice": "1d20 (x2)",
		 "attackBonus": 3,
		 "critDie": "1d12",
		 "critTable": "I",
		 "hd": 7,
		 "ref": 3,
		 "fort": 2,
		 "will": 4,
		 "artifactCheckBonus": 9,
         "maxWetware": 4
        },
                		
        {"level": 8,
		 "title": "Shaman Supreme",
		 "actionDice": "1d20 (x2)",
		 "attackBonus": 3,
		 "critDie": "2d12",
		 "critTable": "I",
		 "hd": 8,
		 "ref": 3,
		 "fort": 2,
		 "will": 5,
		 "artifactCheckBonus": 10,
         "maxWetware": 4
        },
                        		
        {"level": 9,
		 "title": "Shaman Supreme",
		 "actionDice": "1d20 (x2)",
		 "attackBonus": 4,
		 "critDie": "2d14",
		 "critTable": "I",
		 "hd": 9,
		 "ref": 3,
		 "fort": 3,
		 "will": 5,
		 "artifactCheckBonus": 11,
         "maxWetware": 5
        },
                
        {"level": 10,
		 "title": "Shaman Supreme",
		 "actionDice": "1d20 (x3)",
		 "attackBonus": 4,
		 "critDie": "2d14",
		 "critTable": "I",
		 "hd": 10,
		 "ref": 4,
		 "fort": 3,
		 "will": 6,
		 "artifactCheckBonus": 12,
         "maxWetware": 5
        }
		
	];
	
	
	return shaman[0]; 
}
  
  
       let imgData = "images/shaquan_character_sheet.png";
      
        $("#character_sheet").attr("src", imgData);
      

	  let data = Character();
		 
      
          $("#name").html(data.name);
          
          $("#profession").html(data.profession);
          
      $("#strength").html(data.strength);
      $("#strengthMod").html(addModifierSign(data.strengthModifier));
      
      $("#agility").html(data.agility);
      $("#agilityMod").html(addModifierSign(data.agilityModifier));
      
      $("#stamina").html(data.stamina);
      $("#staminaMod").html(addModifierSign(data.staminaModifier));
      
      $("#personality").html(data.personality);
      $("#personalityMod").html(addModifierSign(data.personalityModifier));
      
      $("#intelligence").html(data.intelligence);
      $("#intelligenceMod").html(addModifierSign(data.intelligenceModifier));
      
      $("#luck").html(data.luck);
      $("#luckMod").html(addModifierSign(data.luckModifier));
      
      $("#luckySign").html(data.luckySign);
      $("#luckyRoll").html(data.luckyRoll);
      $("#LuckySignBonus").html(addModifierSign(data.luckySignBonus));
      
      $("#baseAC").html(data.acNoArmoured);
      $("#level").html(data.level);
      $("#title").html(data.title);
      $("#hitPoints").html(data.hitPoints);
      
      $("#ref").html(addModifierSign(data.ref));
      $("#fort").html(addModifierSign(data.fort));
      $("#will").html(addModifierSign(data.will));
      
      $("#init").html(addModifierSign(data.init));
      $("#melee").html(addModifierSign(data.melee));
      $("#range").html(addModifierSign(data.range));
      
      $("#meleeDamage").html(addModifierSign(data.meleeDamageBonus));
      $("#rangeDamage").html(addModifierSign(data.rangeDamageBonus));
      
      $("#fumbleDie").html(data.fumbleDie);
      $("#speed").html(data.speed);
      $("#critDie").html(data.critDie);
      $("#critTable").html(data.critTable);
      $("#actionDice").html(data.actionDice);
      
      $("#artifactCheck").html(data.artifactCheck);
      $("#maxTech").html(data.techLevel);
      $("#languages").html(data.languages);
      $("#additionalLanguages").html(data.addLanguages);
      
      
      $("#modifiedFumble").html(data.modifiedFumbleDie);
      $("#modifiedSpeed").html(data.modifiedSpeed);
    
      
      $("#modifiedArmourClass").html(data.modifiedArmourClass);
      
      $("#equipmentGear").html(data.gear);
      $("#wetwareNumber").html(data.maxWetwareLevel);
      
      
      
      

	 
  </script>
		
	
    
</body>
</html>