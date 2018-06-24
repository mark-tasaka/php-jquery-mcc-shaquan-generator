
function getEquipment(){
	let equipment = [
        
        {"gear": "Backpack, silver metallic A.I. disc, waterskin, bone necklace, flint fire starter, hemp rope (50 feet), preserved fish (5 days ration), torches (x6)"},
        {"gear": "Large sack, A.I. card, dyes and paint, miniature metal skull, waterskin, flint fire starter, dried meat (5 days ration), torches (x3), stone cutting tool"},
        {"gear": "Large sack, medallion with A.I. symbol, shinny stone, waterskin, flint fire starter, dried berries (5 days ration), bone knife, sharpening stone, fish bone needle and thread"}
        
		];
	
		return equipment[Math.floor(Math.random() * equipment.length)]; 
		
}