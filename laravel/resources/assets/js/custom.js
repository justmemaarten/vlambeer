/* phrases */
$(document).ready(function () {
 var phrases =
[
 ['"KARATE is that scene where Bruce Lee fights like a thousand men in a row, ad infinitum."', ' - RPS','http://www.rockpapershotgun.com/2011/04/12/free-karate-game/'],
 ['"Super Crate Box is pure fun in a perfect little package"',' - GameTunnel','http://www.gametunnel.com/?game=super-crate-box'],
 ['"Also, I freaking love Vlambeer"',' - Markus `Notch` Persson','https://twitter.com/#!/notch/status/127430936882192384'],
 ['"Any day with a new game from Super Crate Box weirdo-heads Vlambeer is a good day."',' - RPS', 'http://www.rockpapershotgun.com/2011/04/12/free-karate-game/'],
 ['"I think of them as crate terrorists, which makes Super Crate Box patriotic."',' - dig Boston','http://digboston.com/experience/2011/04/indie-game-of-the-week-super-crate-box/'],
 ['"There is no more useful recommendation than my ridiculous desire to keep playing."',' - RPS','http://www.rockpapershotgun.com/2011/10/25/wit-serious-sam-the-random-encounter/#comments'],
 ['"It is damn near a perfect game."',' - IGF on Super Crate Box','http://www.igf.com/'],
 ['"My idea of fun is mashing buttons to make pretend-dudes fall over. Ergo, this is fun."',' - RPS','http://www.rockpapershotgun.com/2011/04/12/free-karate-game/'],
 ['"Vlambeer is well on its way to eventually becoming an unstoppable juggernaut."',' - GameSetWatch','http://www.gamesetwatch.com/2011/10/serious_sam_the_random_encount.php'],
 ['"Super Crate Box is like condensed milk, only with fun instead of milk."',' - Rock, Paper, Shotgun','http://www.rockpapershotgun.com/2010/10/20/oh-my-goodness-super-crate-box/'],
 ['"Vlambeer is the best new gaming studio out there.. the end"',' - Edmund McMillen','https://twitter.com/#!/EdmundMcMillen/status/131860697918357505'],
 ['"SS:TRE is perhaps the most unique take on a shooter since the magic bullet theory."',' - IGN','http://uk.pc.ign.com/articles/121/1211560p1.html'],
 ['"Vlambeer is building their name upon solid gameplay. It is kind of their thing."',' - DIYGamer', 'http://www.diygamer.com/2011/11/treadmill-combat-sam-random-encounter-review/'],
 ['"Like Jackie Chan movies: silly, often violent & made by obsessive craftsmen."',' - The Happy Medium','http://thehappymedium.tumblr.com/post/9656019627/everything-else-we-consider-nonsense'],
 ['"A Netherlands Beavis and Butthead team of brilliant designers"',' - Fantastic Arcade','http://fantasticfest.com/blog/entry/dispatch_from_fantastic_arcade_day_three'],
 ['"Catching fish is a lot of fun, especially when you do it Vlambeer style."',' - IndieGames.com','http://indiegames.com/2011/07/preview_ridiculous_fishing_vla.html']
];

 var phrasenum = Math.floor(Math.random()*phrases.length);
 var phrase = phrases[phrasenum][0];
 var author = phrases[phrasenum][1];
 var link = phrases[phrasenum][2];
 document.getElementById("quote").innerHTML = phrase + '<a href="' + link + '" target="_blank"><span class="name">' + author + '</span></a>';
});


/* end phrase */