@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">Basic Rules</h1>
	<p>A downloadable PDF of the <a href="http://media.wizards.com/2016/downloads/DND/PlayerBasicRulesV03.pdf" target="_blank">Player's Basic Rules can be found here.</a></p>
	<p>A doubloadable PDF of the <a href="http://media.wizards.com/2016/downloads/DND/DMBasicRulesV05.pdf" target="_blank">Dungeon Master's Basic Rules can be found here.</a></p>

	<div>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#intro" aria-controls="intro" role="tab" data-toggle="tab">Introduction</a></li>
			<li role="presentation"><a href="#play" aria-controls="play" role="tab" data-toggle="tab">How to Play</a></li>
			<li role="presentation"><a href="#adventure" aria-controls="adventure" role="tab" data-toggle="tab">Adventures</a></li>
			<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="intro">
				<br>
				<p>The Dungeons & Dragons roleplaying game is about storytelling in worlds of swords and sorcery. It shares elements with childhood games of make-believe. Like those games, D&D is driven by imagination. It’s about picturing the towering castle beneath the stormy night sky and imagining how a fantasy adventurer might react to the challenges that scene presents.</p>
				<!-- {{ HTML::image('images/dndwallpaper.jpg', '', array('class' => 'col-xs-12 img-responsive')) }} -->

				<p>Unlike a game of make-believe, D&D gives structure to the stories, a way of determining the consequences of the adventurers’ action. Players roll dice to resolve whether their attacks hit or miss or whether their adventurers can scale a cliff, roll away from the strike of a magical lightning bolt, or pull off some other dangerous task. Anything is possible, but the dice make some outcomes more probable than others.</p>
				<p>In the Dungeons & Dragons game, each player creates an <strong>adventurer (also called a character)</strong> and teams up with other adventurers (played by friends). Working together, the group might explore a dark dungeon, a ruined city, a haunted castle, a lost temple deep in a jungle, or a lava-filled cavern beneath a mysterious mountain. The adventurers can solve puzzles, talk with other characters, battle fantastic monsters, and discover fabulous magic items and other treasure.</p>
				<blockquote>
                    <p><strong>Adventurer/Character (PC)</strong>: The Player's Character that will traverse through the imaginary world of Dungeons & Dragons.</p>
                </blockquote>
				<p>One player, however, takes on the role of the <strong>Dungeon Master (DM)</strong>, the game’s lead storyteller and referee. The DM creates adventures for the characters, who navigate its hazards and decide which paths to explore. The DM might describe the entrance to Castle Ravenloft, and the players decide what they want their adventurers to do. Will they walk across the dangerously weathered drawbridge? Tie themselves together with rope to minimize the chance that someone will fall if the drawbridge gives way? Or cast a spell to carry them over the chasm?</p>
				<blockquote>
                    <p><strong>Dungeon Master (DM)</strong>: This player creates no character, instead they will create and guide the adventurers through thier story and act as any non-player character as needed.</p>
                </blockquote>
				<p>Then the DM determines the results of the adventurers’ actions and narrates what they experience. Because the DM can improvise to react to anything the players attempt, D&D is infinitely flexible, and each adventure can be exciting and unexpected.</p>
				<p>The game has no real end; when one story or quest wraps up, another one can begin, creating an ongoing story called a <strong>campaign</strong>. Many people who play the game keep their campaigns going for months or years, meeting with their friends every week or so to pick up the story where they left off. The adventurers grow in might as the campaign continues. Each monster defeated, each adventure completed, and each treasure recovered not only adds to the continuing story, but also earns the adventurers new capabilities. This increase in power is reflected by an adventurer’s level.</p>
				<blockquote>
                    <p><strong>Campaign</strong>: A large encompassing story arc leading up to an end goal or boss fight.</p>
                </blockquote>
				<p>There’s no winning and losing in the Dungeons & Dragons game—at least, not the way those terms are usually understood. Together, the DM and the players create an exciting story of bold adventurers who confront deadly perils. Sometimes an adventurer might come to a grisly end, torn apart by ferocious monsters or done in by a nefarious villain. Even so, the other adventurers can search for powerful magic to revive their fallen comrade, or the player might choose to create a new character to carry on. The group might fail to complete an adventure successfully, but if everyone had a good time and created a memorable story, they all win.</p>
			</div>
			<!-- end Into tab -->

			<div role="tabpanel" class="tab-pane fade" id="play">
				<br>
				<p>The play of the Dungeons & Dragons game unfolds according to this basic pattern.</p>
				<ol>
					<strong><li>The DM describes the environment</li></strong>
					<p>The Dungeon Master tells the players where their adventurers are and what’s around them, presenting the basic scope of options that present themselves (how many doors lead out of a room, what’s on a table, who’s in the tavern, and so on).</p>
					<strong><li>The players describe what they want to do</li></strong>
					<p>Sometimes one player speaks for the whole party, saying, “We’ll take the east door,” for example. Other times, different adventurers do different things: one adventurer might search a treasure chest while a second examines an esoteric symbol engraved on a wall and a third keeps watch for monsters. The players don’t need to take turns, but the DM listens to every player and decides how to resolve those actions</p>
					<p>Sometimes, resolving a task is easy. If an adventurer wants to walk across a room and open a door, the DM might just say that the door opens and describe what lies beyond. But the door might be locked, the floor might hide a deadly trap, or some other circumstance might make it challenging for an adventurer to complete a task. In those cases, the DM decides what happens, often relying on the roll of a die to determine the results of an action</p>
					<strong><li>The DM narrates the results of the adventurers’ actions</li></strong>
					<p>Describing the results often leads to another decision point, which brings the flow of the game right back to step 1.</p>
				</ol>

				<p>This pattern holds whether the adventurers are cautiously exploring a ruin, talking to a devious prince, or locked in mortal combat against a mighty dragon. In certain situations, particularly combat, the action is more structured and the players (and DM) do take turns choosing and resolving actions. But most of the time, play is fluid and flexible, adapting to the circumstances of the adventure.</p>
				<p>Often the action of an adventure takes place in the imagination of the players and DM, relying on the DM’s verbal descriptions to set the scene. Some DMs like to use music, art, or recorded sound effects to help set the mood, and many players and DMs alike adopt different voices for the various adventurers, monsters, and other characters they play in the game. Sometimes, a DM might lay out a map and use tokens or miniature figures to represent each creature involved in a scene to help the players keep track of where everyone is.</p>

				<h3>Game Dice</h3>
				<p>The game uses polyhedral dice with different numbers of sides. You can find dice like these in game stores and in many bookstores.</p>
				<p>In these rules, the different dice are referred to by the letter d followed by the number of sides: d4, d6, d8, d10, d12, and d20. For instance, a d6 is a six-sided die (the typical cube that many games use).</p>
				<p>Percentile dice, or d100, work a little differently. You generate a number between 1 and 100 by rolling two different ten-sided dice numbered from 0 to 9. One die (designated before you roll) gives the tens digit, and the other gives the ones digit. If you roll a 7 and a 1, for example, the number rolled is 71. Two 0s represent 100. Some ten-sided dice are numbered in tens (00, 10, 20, and so on), making it easier to distinguish the tens digit from the ones digit. In this case, a roll of 70 and 1 is 71, and 00 and 0 is 100.</p>
				<p>When you need to roll dice, the rules tell you how many dice to roll of a certain type, as well as what modifiers to add. For example, “3d8 + 5” means you roll three eight-sided dice, add them together, and add 5 to the total.</p>
				</p>The same d notation appears in the expressions “1d3” and “1d2.” To simulate the roll of 1d3, roll a d6 and divide the number rolled by 2 (round up). To simulate the roll of 1d2, roll any die and assign a 1 or 2 to the roll depending on whether it was odd or even. (Alternatively, if the number rolled is more than half the number of sides on the die, it’s a 2.)</p>

				<h3>The D20</h3>
				<p>Does an adventurer’s sword swing hurt a dragon or just bounce off its iron-hard scales? Will the ogre believe an outrageous bluff? Can a character swim across a raging river? Can a character avoid the main blast of a fireball, or does he or she take full damage from the blaze? In cases where the outcome of an action is uncertain, the Dungeons & Dragons game relies on rolls of a 20-sided die, a d20, to determine success or failure.</p>
				<p>Every character and monster in the game has capabilities defined by six <strong>ability scores</strong>. The abilities are Strength, Dexterity, Constitution, Intelligence, Wisdom, and Charisma, and they typically range from 3 to 18 for most adventurers. (Monsters might have scores as low as 1 or as high as 30.) These ability scores, and the <strong>ability modifiers</strong> derived from them, are the basis for almost every d20 roll that a player makes on a character’s or monster’s behalf.</p>
				<p>Ability checks, attack rolls, and saving throws are the three main kinds of d20 rolls, forming the core of the rules of the game. All three follow these simple steps.</p>

				<ol>
					<strong><li>Roll the die and add a modifier</li></strong>
					<p>Roll a d20 and add the relevant modifier. This is typically the modifier derived from one of the six ability scores, and it sometimes includes a proficiency bonus to reflect a character’s particular skill. (See chapter 1 for details on each ability and how to determine an ability’s modifier.)</p>
					<strong><li>Apply circumstantial bonuses and penalties</li></strong>
					<p>A class feature, a spell, a particular circumstance, or some other effect might give a bonus or penalty to the check.</p>
					<strong><li>Compare the total to a target number</li></strong>
					<p>If the total equals or exceeds the target number, the ability check, attack roll, or saving throw is a success. Otherwise, it’s a failure. The DM is usually the one who determines target numbers and tells players whether their ability checks, attack rolls, and saving throws succeed or fail.</p>
				</ol>

				<p>The target number for an ability check or a saving throw is called a <strong>Difficulty Class (DC)</strong>. The target number for an attack roll is called an <strong>Armor Class (AC)</strong>.</p>
				<p>This simple rule governs the resolution of most tasks in D&D play. Chapter 7 in the official Player's Handbook provides more detailed rules for using the d20 in the game.</p>

				<h3>Advantage and Disadvantage</h3>
				<p>Sometimes an ability check, attack roll, or saving throw is modified by special situations called advantage and disadvantage. Advantage reflects the positive circumstances surrounding a d20 roll, while disadvantage reflects the opposite. When you have either advantage or disadvantage, you roll a second d20 when you make the roll. Use the higher of the two rolls if you have advantage, and use the lower roll if you have disadvantage. For example, if you have disadvantage and roll a 17 and a 5, you use the 5. If you instead have advantage and roll those numbers, you use the 17.</p>
				<p>More detailed rules for advantage and disadvantage are presented in chapter 7 of the official Player's Handbook.</p>

				<h3>Specific Beats General</h3>
				<p>This book contains rules, especially in parts 2 and 3, that govern how the game plays. That said, many racial traits, class features, spells, magic items, monster abilities, and other game elements break the general rules in some way, creating an exception to how the rest of the game works. Remember this: If a specific rule contradicts a general rule, the specific rule wins.</p>
				<p>Exceptions to the rules are often minor. For instance, many adventurers don’t have proficiency with longbows, but every wood elf does because of a racial trait. That trait creates a minor exception in the game. Other examples of rule-breaking are more conspicuous. For instance, an adventurer can’t normally pass through walls, but some spells make that possible. Magic accounts for most of the major exceptions to the rules.</p>

				<h3>Round Down</h3>
				<p>There’s one more general rule you need to know at the outset. Whenever you divide a number in the game, round down if you end up with a fraction, even if the fraction is one-half or greater.</p>

			</div>
			<!-- end Play tab -->

			<div role="tabpanel" class="tab-pane fade" id="adventure">
				<br>
				<p>The Dungeons & Dragons game consists of a group of characters embarking on an adventure that the Dungeon Master presents to them. Each character brings particular capabilities to the adventure in the form of ability scores and skills, class features, racial traits, equipment, and magic items. Every character is different, with various strengths and weaknesses, so the best party of adventurers is one in which the characters complement each other and cover the weaknesses of their companions. The adventurers must cooperate to successfully complete the adventure.</p>
				<p>The adventure is the heart of the game, a story with a beginning, a middle, and an end. An adventure might be created by the Dungeon Master or purchased off the shelf, tweaked and modified to suit the DM’s needs and desires. In either case, an adventure features a fantastic setting, whether it’s an underground dungeon, a crumbling castle, a stretch of wilderness, or a bustling city. It features a rich cast of characters: the adventurers created and played by the other players at the table, as well as nonplayer characters (NPCs). Those characters might be patrons, allies, enemies, hirelings, or just background extras in an adventure. Often, one of the NPCs is a villain whose agenda drives much of an adventure’s action.</p>
				<p>Over the course of their adventures, the characters are confronted by a variety of creatures, objects, and situations that they must deal with in some way. Sometimes the adventurers and other creatures do their best to kill or capture each other in combat. At other times, the adventurers talk to another creature (or even a magical object) with a goal in mind. And often, the adventurers spend time trying to solve a puzzle, bypass an obstacle, find something hidden, or unravel the current situation. Meanwhile, the adventurers explore the world, making decisions about which way to travel and what they’ll try to do next.</p>
				<p>Adventures vary in length and complexity. A short adventure might present only a few challenges, and it might take no more than a single game session to complete. A long adventure can involve hundreds of combats, interactions, and other challenges, and take dozens of sessions to play through, stretching over weeks or months of real time. Usually, the end of an adventure is marked by the adventurers heading back to civilization to rest and enjoy the spoils of their labors.</p>
				<p>But that’s not the end of the story. You can think of an adventure as a single episode of a TV series, made up of multiple exciting scenes. A campaign is the whole series—a string of adventures joined together, with a consistent group of adventurers following the narrative from start to finish.</p>

				<h3>The Three Pillars of Adventure</h3>
				<p>Adventurers can try to do anything their players can imagine, but it can be helpful to talk about their activities in three broad categories: exploration, social interaction, and combat.</p>
				<p><strong>Exploration</strong> includes both the adventurers’ movement through the world and their interaction with objects and situations that require their attention. Exploration is the give-and-take of the players describing what they want their characters to do, and the Dungeon Master telling the players what happens as a result. On a large scale, that might involve the characters spending a day crossing a rolling plain or an hour making their way through caverns underground. On the smallest scale, it could mean one character pulling a lever in a dungeon room to see what happens.</p>
				<p><strong>Social interaction</strong> features the adventurers talking to someone (or something) else. It might mean demanding that a captured scout reveal the secret entrance to the goblin lair, getting information from a rescued prisoner, pleading for mercy from an orc chieftain, or persuading a talkative magic mirror to show a distant location to the adventurers.</p>
				<p>The rules in chapters 7 and 8 of the official Player's Handbook support exploration and social interaction, as do many class features in chapter 3 and personality traits in chapter 4.</p>
				<p><strong>Combat</strong>, the focus of chapter 9, involves characters and other creatures swinging weapons, casting spells, maneuvering for position, and so on—all in an effort to defeat their opponents, whether that means killing every enemy, taking captives, or forcing a rout. Combat is the most structured element of a D&D session, with creatures taking turns to make sure that everyone gets a chance to act. Even in the context of a pitched battle, there’s still plenty of opportunity for adventurers to attempt wacky stunts like surfing down a flight of stairs on a shield, to examine the environment (perhaps by pulling a mysterious lever), and to interact with other creatures, including allies, enemies, and neutral parties.</p>

				<h3>The Wonders of Magic</h3>
				<p>Few D&D adventures end without something magical happening. Whether helpful or harmful, magic appears frequently in the life of an adventurer, and it is the focus of chapters 10 and 11.</p>

				<p>In the worlds of Dungeons & Dragons, practitioners of magic are rare, set apart from the masses of people by their extraordinary talent. Common folk might see evidence of magic on a regular basis, but it’s usually minor—a fantastic monster, a visibly answered prayer, a wizard walking through the streets with an animated shield guardian as a bodyguard.</p>

				<p>For adventurers, though, magic is key to their survival. Without the healing magic of clerics and paladins, adventurers would quickly succumb to their wounds. Without the uplifting magical support of bards and clerics, warriors might be overwhelmed by powerful foes. Without the sheer magical power and versatility of wizards and druids, every threat would be magnified tenfold.</p>

				<p>Magic is also a favored tool of villains. Many adventures are driven by the machinations of spellcasters who are hellbent on using magic for some ill end. A cult leader seeks to awaken a god who slumbers beneath the sea, a hag kidnaps youths to magically drain them of their vigor, a mad wizard labors to invest an army of automatons with a facsimile of life, a dragon begins a mystical ritual to rise up as a god of destruction—these are just a few of the magical threats that adventurers might face. With magic of their own, in the form of spells and magic items, the adventurers might prevail!</p>
			</div>
			<!-- end Dice tab -->

			<div role="tabpanel" class="tab-pane fade" id="settings">
				<br>
				Settings
			</div>
		</div>
	</div>
</div>

@stop