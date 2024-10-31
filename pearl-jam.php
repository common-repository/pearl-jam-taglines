<?php
/*
Plugin Name: Pearl Jam Taglines
Description: Randomize the tagline of your blog with a classic Pearl Jam lyric. 50 lyrics are included, and the tagline will update on each page load.
Version: 0.1
Author: Anthony Bubel
Author URI: http://anthonybubel.com/
*/

$pj_lyrics = array(
				"Don't call me 'daughter'.",
				"A dissident is here.",
				"Come to send, not condescend.",
				"We're safe tonight.",
				"I've no fear but for falling down.",
				"Restless soul, enjoy your youth.",
				"I'm still alive.",
				"Don't think, dumb is strength.",
				"A one-way ticket headstone.",
				"On a rocking horse of time.",
				"Baker's dozen parades.",
				"If nothing is everything, I'll have it all.", 
				"Off he goes with his perfectly unkept hope.",
				"Circumstance, clapping hands.",
				"Dedication, naive and true.",
				"Precipitation, which side are you on?",
				"Got some if you need it.",
				"How loud can silence get?",
				"Cut to later, now you're strong.",
				"I wanna put a little fixing on it.",
				"Sin still plays and preaches.",
				"It's an inside job today.",
				"Explore and not explode.",
				"Jumping trains just to survive.",
				"One uninvited chromosome.",
				"Blame it all on chemical intercourse.",
				"Designate my luck.",
				"Glorified version of a pellet gun.",
				"Like a word misplaced.",
				"Escape is never the safest path.",
				"I swear I recognize your breath.",
				"Of what was everything?",
				"Thoughts arrive like butterflies.",
				"Two oceans away.",
				"This could be the day.",
				"With my shadow flag.",
				"Buona Sera, cut my quick.",
				"I smile big with a toothless grin.",
				"I wish I was the evidence.",
				"The name they gave me.",
				"All this noise inside the quiet.",
				"Mix the light into grey.",
				"Longitudes, latitudes - it's so absurd.",
				"Better pony up.",
				"It's not in my past to presume.",
				"Mondays were made to fall.",
				"Going out with disco.",
				"Can't find a better man.",
				"Slide on next to me.",
				"Better loud than too late."
				);

$random_pj_lyric = $pj_lyrics[array_rand($pj_lyrics)];

if ( !empty($random_pj_lyric) )
	update_option('blogdescription', $random_pj_lyric);

?>