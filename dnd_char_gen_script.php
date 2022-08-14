<html>
    <body>
        <?php

        $races = array("aarakocra", "aasimar", "bugbear", "centaur", "changeling", "dhampir", "dragonborn", "dwarf", "duergar",
        "eladrin", "hexblood", "high elf", "sea elf", "wood elf", "fairy", "firbolg", "air genasi", "earth genasi",
        "fire genasi", "water genasi", "githyanki", "githzerai", "deep gnome", "forest gnome", "rock gnome",
        "goblin", "goliath", "half-elf", "lightfoot halfling", "stout halfling", "half-orc", "harengon", "hobgoblin", "human", "kenku",
        "kobold", "lizardfolk", "minotaur", "orc", "reborn", "satyr", "shadar-kai", "shifter", "tabaxi", "tiefling",
        "tortle", "triton", "yuan-ti");

        $classes = array("artificer", "barbarian", "bard", "blood hunter", "cleric", "druid", "fighter", "monk", "paladin", "ranger",
        "rogue", "sorcerer", "warlock", "wizard");

        $subclasses = array(array("alchemist", "armorer", "artillerist", "battle smith"), array("ancestral guardian", "beast", "berserker", "storm herald", "totem warrior", 
        "wild magic", "zealot"), array("creation", "eloquence", "glamour", "lore", "spirits", "swords", "valor", "whispers"), array("ghostslayer", "lycan", "mutant", "profane soul"), 
        array("death", "forge", "grave", "knowledge", "life", "light", "nature", "order", "peace", "tempest", "trickery","twilight", "war"), array("dreams", "arctic", "coast", 
        "desert", "forest", "grassland", "mountain", "swamp", "underdark", "moon", "shepherd", "spores", "wildfire"), array("battle master", "cavalier", "champion", 
        "eldritch knight", "gunslinger", "psi warrior", "rune knight", "samurai"), array("ascendant dragon", "astral self", "cobalt soul", "drunken master", "four elements", 
        "kensei", "mercy", "open hand", "sun soul"), array("ancients", "conquest", "devotion", "glory", "oathbreaker", "open sea", "redemption", "vengeance", "watchers"), 
        array("beast master", "drakewarden", "fey wanderer", "gloom stalker", "horizon walker", "hunter", "monster slayer", "swarmkeeper"), array("arcane trickster", "assassin", 
        "inquisitive", "mastermind", "phantom", "scout", "soulknife", "swashbuckler", "thief"), array("aberrant mind", "clockwork soul", "divine soul", "draconic bloodline", 
        "shadow", "storm", "wild magic"), array("archfey", "celestial", "fathomless", "fiend", "genie", "great old one", "hexblade", "undead"), array("abjuration", "bladesinging", 
        "conjuration", "divination", "enchantment", "evocation", "illusion", "necromancy", "scribe", "transmutation", "war"));

        $genRace = $_GET["genRace"];
        $race = "";
        $i;
        if($genRace){
            $i = random_int(0, count($races));
            $race = $races[$i];
        }

        $genClass = $_GET["genClass"];
        $class = "";
        $subclass = "";
        if($genClass){
            $j = random_int(0, count($classes));
            $class = $classes[$j];
            $k = random_int(0,count($subclasses[$j]));
            $subclass = $subclasses[$j][$k];
        }

        $genSubclass = $_GET["genSubclass"];
        if($genSubclass){
            $class = $_GET["class"];
            for($l = 0; $l < count($classes); $l++){
                if(strcmp($class, $classes[$l]) == 0){
                    $m = $l;
                }
            }
            $k = random_int(0,count($subclasses[$l]));
            $subclass = $subclasses[$l][$k];
        }

        /*if(strcmp($race, "") != 0){
            echo $race." ";
        }
        echo $subclass." ".$class;
        return $race." ".$subclass." ".$class;*/
        ?>
        <h1>Your character: <?php echo $race." ".$subclass." ".$class?></h1>
    </body>
</html>