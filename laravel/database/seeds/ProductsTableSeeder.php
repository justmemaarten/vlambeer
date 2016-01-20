<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_products')->truncate();

        DB::setFetchMode(PDO::FETCH_ASSOC);
        $ids = DB::table('tbl_categories')->get();
        DB::setFetchMode(PDO::FETCH_CLASS);


            \App\Product::create([
                'name' => '“Nuclear Throne” Mens & Ladies T-Shirt',
                'price' => 13.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-nuclearthrone-yellow-on-black-220.jpg',
                'description' => '<p>A lonely fire surrounded by an unlikely group of travelers. Mutants spending their days fighting for the throne of a post-apocalyptic world.
Each tries to get ahead, using the radioactive waste to mutate new limbs and abilities on the fly.
Making use of powerful weaponry scattered across the land, each hopes to reach the Nuclear Throne and become the one and only Wasteland King.
Support both Vlambeer and these struggling mutants by sporting a Nuclear Throne t-shirt, which has mutated into four different colors!</p>',
                'stock' => mt_rand(1, 150),
                'category_id' => 1,
                'is_sale' => 1,
                'size' => 'Men Small (gold), Men medium (gold), Men large (gold), Men XL (gold), Men 2XL (gold), Men 3XL (gold), Men 4XL (gold), Men 5XL (gold), Ladies Small (yellow), Ladies medium (yellow), Ladies large (yellow), Ladies XL (yellow), Ladies 2XL (yellow), Men Small (black), Men medium (black), Men large (black), Men XL (black), Men 2XL (black), Men 3XL (black), Men 4XL (black), Men 5XL (black), Ladies Small (black), Ladies medium (black), Ladies large (black), Ladies XL (black), Ladies 2XL (black) '

            ]);
            \App\Product::create([
                'name' => '“The Super Crate Network” Print',
                'price' => 5.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-indieprints-vlambeer-450.jpg',
                'description' => '<p>There are a lot of crates out there, each filled with powerful weapons.
You want to make it to the top of the leaderboards? Well let me tell you something, you’re gonna have to fight your way there.
Pick up this The Social Network inspired Vlambeer print today, and let your friends know that when it comes to Super Crate Box, you mean business!</p>',
                'stock' => mt_rand(1, 150),
                'category_id' => 2,
                'is_sale' => 0,
                'size' => ''

            ]);
            \App\Product::create([
                'name' => 'Luftrausers Limited Edition',
                'price' => 29.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-luftrausers-le-1-750.jpg',
                'description' => '<p>Many years ago, the Luftrausers were an elite group of fighter pilots who couldn’t be brought down. Now is your chance to not only own a copy of the game, but also a piece of history itself; a carriage bolt taken from a decommissioned Luftrauser. Only 100 of these were salvaged, so get yours quick!</p><ul><li>&bull; Includes a key to unlock<br>&nbsp;Luftrausers in your Steam<br>&nbsp;Library</li><li>&bull; Includes a real life salvaged<br>&nbsp;piece of a Luftrauser</li><li>&bull; Each certificate is <br>&nbsp;individually numbered, only <br>&nbsp;100 in existence.</li></ul>',
                'stock' => mt_rand(1, 150),
                'category_id' => 2,
                'is_sale' => 1,
                'size' => ''

            ]);
            \App\Product::create([
                'name' => '“Billy’s Hat” Fishing Cap',
                'price' => 19.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-billycapcombo-750.jpg',
                'description' => '<p>Any angler worth his salt will tell you that fishing in the high seas is a dangerous sport.
From the torrential rains of the Stormy Seas to the icey winds of the Arctic Floes… there’s no shortage of hazards that Billy has faced in his quest for redemption.
How does he survive it all? With the help of proper headwear of course!
And now you too can protect your delicate head from the elements with this stylish replica of Billy’s fishing hat!
Also as an added bonus, every hat comes with a limited edition Ridiculous Fishing print!</p>',
                'stock' => mt_rand(1, 150),
                'category_id' => 1,
                'is_sale' => 0,
                'size' => ''

            ]);

            \App\Product::create([
                'name' => '“Clone Jelly” Mens & Ladies T-Shirt',
                'price' => 14.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-clonejelly-mens-750.jpg',
                'description' => '<p>Billy’s been fishing the high seas for a long time, and if there’s one piece of advice he could give to an amateur like yourself… it would be to NEVER catch a Clone Jelly.
And if for some reason you do catch one, DO NOT shoot it.
Seriously, don’t.
Then again, if you want your fishing trip to get truly ridiculous, just keep blasting one! They’ll infinitely multiply and ruin your day!
A new design from the Vlambeer mobile game Ridiculous Fishing!</p>',
                'stock' => mt_rand(1, 150),
                'category_id' => 1,
                'is_sale' => 1,
                'size' => 'Men Small, Men Medium, Men Large, Men XL, Men 2XL, Men 3XL, Ladies Small, Ladies Medium, Ladies Large, Ladies XL, Ladies 2XL'

            ]);
            \App\Product::create([
                'name' => 'The Vlambeer Original Soundtrack',
                'price' => 12.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-vlambeerost-450.jpg',
                'description' => '<div id="product-choice2">
<p>Few Indie Game Devs get their paws wet with as many composers and artists as Vlambeer does, and the logical conclusion is this, the Vlambeer Original Soundtrack. Comprised of compositions from a variety of artists across a multitude of games, it&#8217;s the perfect collection for any gaming, music, or Vlambeer fan.</p>
<table width="263" border="0">
  <tr>
    <td width="3" valign="top" class="small">&nbsp;</td>
    <td width="123" align="left" valign="top"><span class="small">
      1. GG Main Theme<br>
      2. RF Theme<br>
      3. DZK Calm Seas<br>
      4. DZK Menu Theme<br>
      5. DZK Week #1<br>
      6. DZK Week #2<br>
      7. DZK Week #3<br>
      8. DZK Night Theme<br>
      9. LR Theme<br>
      10. SCB Theme<br>
      11. SCB Tutorial<br>
      12. SCB Construction Yar<br>
      13. SCB Rocket Silo<br>
      14. SCB Moon Temple<br>
      15. SCB Elevator Music<br>
      16. LRS Demo 1<br>
      17. LRS Demo 2<br>
      18. LRS Demo 3<br>
    </span><span class="small">19. SCB Interlude</span></td>
    <td width="123" align="left" valign="top"><span class="small">
      20. YH Day <br>
      21. YH Night<br>
      22. SS:TRE Menu Theme<br>
      23. SS:TRE Desert Theme<br>
      24. SS:TRE Temple Theme<br>
      25. SS:TRE Pyramid Theme<br>
      26. SS:TRE Boss Theme<br>
      27. RF Radical Fishing<br>
      28. GG Venus Supermax<br>
      29. GG Sewers<br>
      30. GG Boss Battle #1<br>
      31. GG Basement<br>
      32. GG Hotel Lobby<br>
      33. GG Boss Battle #2<br>
      34. SCB Early Test<br>
      35. SCB Construction Yard
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Kozilek Remix)<br>
      36. GG Phonecall<br>
    </span></td>
  </tr>
</table>
</div>

	<img src="http://www.levelupstudios.com/spacer.gif" height="1"><BR>

<div id="product-choice3">

<h3><img src="http://www.levelupstudios.com/spacer.gif" width="5">Features:<img src="http://www.levelupstudios.com/spacer.gif" width="4"></span></h3>
	  <ul>
		<li>&bull; 36 Tracks</li>
	 	<li>&bull; Tracks featuring Phlogiston,</li>
	 	<li>&nbsp;&nbsp;&nbsp;KOZILEK, Doseone, Alex</li>
	 	<li>&nbsp;&nbsp;&nbsp;Mauer, and Brother Android</li>
	 	<li>&bull; Limited Edition Art</li>
        <li>&bull; Unique Die-Cut Design</li>
        <li>&nbsp;&nbsp;&nbsp;featuring the Vlambeer </li>
        <li>&nbsp;&nbsp;&nbsp;Logo</li>
	  </ul>
	<img src="http://www.levelupstudios.com/spacer.gif" height="10"><BR>
</div>',
                'stock' => mt_rand(1, 150),
                'category_id' => 3,
                'is_sale' => 0,
                'size' => ''

            ]);
            \App\Product::create([
                'name' => '“GUN GODZ” Mens T-Shirt',
                'price' => 14.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-gungodz-450.jpg',
                'description' => '<p>Hey, man. If you’re gonna travel all the way to Venus to battle hip-hop gangsters with a golden revolver, you may as well do it in style!
Why not try wearing this stylish
double-sided (and limited edition) Venusian apparel, and display your love for Y.V., the demigod of guns!
A limited run shirt design from the Vlambeer game GUN GODZ!</p>',
                'stock' => mt_rand(1, 150),
                'category_id' => 1,
                'is_sale' => 1,
                'size' => 'Men Small, Men Medium, Men Large, Men XL, Ladies Small, Ladies Medium, Ladies Large, Ladies XL'

            ]);
            \App\Product::create([
                'name' => '“LUFTRAUSERS” Mens & Ladies T-Shirt',
                'price' => 17.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-luftrausers-450.jpg',
                'description' => '<p>Stylish. Deadly. Beautiful. Strong.
These are all words that not only describe the masterful airship that is a Luftrauser… but this shirt adorning the ships themselves!
What’s that rookie? You’ve never piloted a Luftrauser before? Pick up LUFTRAUSERS today on PC, Mac, PlayStation 3, PSVita or Linux!</p>',
                'stock' => mt_rand(1, 150),
                'category_id' => 1,
                'is_sale' => 0,
                'size' => 'Men Small, Men Medium, Men Large, Men XL, Men 2XL, Men 3XL, Men 4XL, Ladies Small, Ladies Medium, Ladies Large, Ladies XL, Ladies 2XL'

            ]);
            \App\Product::create([
                'name' => '“Dancing Vlambeer” Mens T-Shirt',
                'price' => 11.99,
                'img' => 'http://www.levelupstudios.com/lvlup-products/levelupstudios-vlambeer-dancingvlambeer-750.jpg',
                'description' => '<p>Why is he dancing? I don’t know!
He is on fire. I’d imagine it hurts.
Maybe he’s dancing because he’s on a shirt that represents the hard work and dedication of Vlambeer, the developer that loves to make hard indie games.
Games so hard that sometimes you might feel like you’re on fire!</p>',
                'stock' => mt_rand(1, 150),
                'category_id' => 1,
                'is_sale' => 1,
                'size' => 'Men Small, Men Medium, Men Large, Men XL, Men 2XL'

            ]);
    }
}
