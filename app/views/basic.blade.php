@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">Basic Rules</h1>
	<div>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#intro" aria-controls="intro" role="tab" data-toggle="tab">Introduction</a></li>
			<li role="presentation"><a href="#play" aria-controls="play" role="tab" data-toggle="tab">How to Play</a></li>
			<li role="presentation"><a href="#dice" aria-controls="dice" role="tab" data-toggle="tab">Game Dice</a></li>
			<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="intro">
				<br>
				<p>The Dungeons & Dragons roleplaying game is about storytelling in worlds of swords and sorcery. It shares elements with childhood games of make-believe. Like those games, D&D is driven by imagination. It’s about picturing the towering castle beneath the stormy night sky and imagining how a fantasy adventurer might react to the challenges that scene presents.</p>
				{{ HTML::image('images/dndwallpaper.jpg', '', array('class' => 'col-xs-12 img-responsive')) }}

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
					<p>This pattern holds whether the adventurers are cautiously exploring a ruin, talking to a devious prince, or locked in mortal combat against a mighty dragon. In certain situations, particularly combat, the action is more structured and the players (and DM) do take turns choosing and resolving actions. But most of the time, play is fluid and flexible, adapting to the circumstances of the adventure</p>
					<p>Often the action of an adventure takes place in the imagination of the players and DM, relying on the DM’s verbal descriptions to set the scene. Some DMs like to use music, art, or recorded sound effects to help set the mood, and many players and DMs alike adopt different voices for the various adventurers, monsters, and other characters they play in the game. Sometimes, a DM might lay out a map and use tokens or miniature figures to represent each creature involved in a scene to help the players keep track of where everyone is.</p>
				</ol>
			</div>
			<!-- end Play tab -->

			<div role="tabpanel" class="tab-pane fade" id="dice">
				<br>
				<p>The game uses polyhedral dice with different numbers of sides. You can find dice like these in game stores and in many bookstores.</p>
				{{ HTML::image('images/dice.jpg', '', array('class' => 'col-xs-12 img-responsive')) }}

				<p>In these rules, the different dice are referred to by the letter d followed by the number of sides: <strong>d4, d6, d8, d10, d12, and d20</strong>. For instance, a d6 is a six-sided die (the typical cube that many games use).</p>
				<p><strong>Percentile dice, or d100</strong>, work a little differently. You generate a number between 1 and 100 by rolling two different ten-sided dice numbered from 0 to 9. One die (designated before you roll) gives the tens digit, and the other gives the ones digit. If you roll a 7 and a 1, for example, the number rolled is 71. Two 0s represent 100. Some ten-sided dice are numbered in tens (00, 10, 20, and so on), making it easier to distinguish the tens digit from the ones digit. In this case, a roll of 70 and 1 is 71, and 00 and 0 is 100.</p>
				<p>When you need to roll dice, the rules tell you how many dice to roll of a certain type, as well as what modifiers to add. For example, “3d8 + 5” means you roll three eightsided dice, add them together, and add 5 to the total.</p>
				<p>The same d notation appears in the expressions “1d3” and “1d2.” To simulate the roll of 1d3, roll a d6 and divide the number rolled by 2 (round up). To simulate the roll of 1d2, roll any die and assign a 1 or 2 to the roll depending on whether it was odd or even. (Alternatively, if the number rolled is more than half the number of sides on the die, it’s a 2.)</p>

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