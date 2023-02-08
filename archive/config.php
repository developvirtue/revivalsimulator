<?php // GO TO THE STATUS PHP FILE TO SET YOUR STATUS

include($_SERVER['DOCUMENT_ROOT']."/statuses.php");

// NEEK YOUR CODE IS SHITTY!!!!
// idk php :troll: - neek
// we all know neek is shit at php and sql, maybe not php so much -nexo

$groupname = "OffTopicGC";
$aprilfools = false; // doesn't matter what value you set since this doesn't work lol
$logo = "/resources/img/otgclogo.png";
$icon = "/resources/img/otgcicon.png";
$announcement = 'We are working on getting RH back up.'; // put announcement here
// $conn_string = "host=mysql.ct8.pl port=21 dbname=p27563_main user=main password=zgtGeR76-+M1oON!-gsd75;N9Tq8L;";
// $dbconn4 = pg_connect($conn_string);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

// set to true if its april 1st, set to false on april 2nd
if($aprilfools = false) { 
    $groupname = "OnTopicGC";
    $logo = "https://doy2mn9upadnk.cloudfront.net/uploads/default/original/4X/9/e/7/9e75a73eb83dde9c37f54055915e11d32e909382.png";
    $icon = "https://tr.rbxcdn.com/696eb934a80af91996f93eed8070e186/150/150/Image/Png";
}
// svg's

$discordbtn = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">

  <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>

</svg>';

$youtubebtn = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">

  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>

</svg>';



$lineremover = 'text-decoration-none';// LOL

$colsize = 'col-md-4';


$pfpsize = '50%';
// $members = '<br>Something went wrong...';
$members = '


<div class="row" id="members">

<!-- gameguy -->

<div class="mt-3 '.$colsize.'">

<div class="card card-body">

<img src="https://yt3.ggpht.com/_-hut_HAZWkj8dC4ftv3f1cByL2CPUDNFDZXftHO_u8GYFFslVJXFVKgKKrNz7u80nKA3pjC1oo=s88-c-k-c0x00ffffff-no-rj" width="'.$pfpsize.'" style="border-radius:50%;margin:auto;">

<h5 style="text-align:center;">gameguy</h5>
<h6 style="text-align:center;"><i class="fa fa-quote-left" aria-hidden="true"></i>'.$gameguystatus.'<i class="fa fa-quote-right" aria-hidden="true"></i></h6>

<b style="text-align:center;">group chat and server owner</b>

<p style="text-align:center;">gameguy created OffTopicGC and is the lean lord!</p>

<hr/>

<a type="button" class="btn btn-primary" href="https://discord.com/users/849667719359496222" target="_blank">Discord</a>

</div>

</div>

<!-- carly <3 IS THAT A HEART?!?!?-->

<div class="mt-3 '.$colsize.'">

<div class="card card-body">

<img src="https://images-ext-2.discordapp.net/external/Y7eTmgyAcizCdjYUp1jBhWavujaGWrGLDCHGqOWTABM/%3Fsize%3D4096/https/cdn.discordapp.com/avatars/345265102137720842/8c373126ac39cc43eeb403d3083eb413.png" width="'.$pfpsize.'" style="border-radius:50%;margin:auto;">

<h5 style="text-align:center;">Naheyo</h5>

<h6 style="text-align:center;"><i class="fa fa-quote-left" aria-hidden="true"></i>'.$carlystatus.'<i class="fa fa-quote-right" aria-hidden="true"></i></h6>

<b style="text-align:center;">member</b>

<p style="text-align:center;">Hi, my name is (what?) My name is (who?) My name is Carly.<br>I am madly in love with neek and require estrogen.</p>

<hr style="color:white">

<a type="button" class="btn btn-danger" href="https://youtube.com/BaguetteBling" target="_blank">YouTube</a>
<a type="button" class="mt-2 btn btn-primary" href="https://discord.com/users/345265102137720842" target="_blank">Discord</a>
<a href="https://twitter.com/theofficial608" target="_blank" type="button" class="mt-2 btn btn-primary">Twitter</a>
<a type="button" class="mt-2 btn btn-danger" href="https://github.com/real608" target="_blank">Github</a>
<a type="button" class="mt-2 btn btn-danger" href="http://carlynet.cf/" target="_blank">Website</a>

</div>

</div>

<!-- jaredyoshi --> <!-- HECK I ALREADY TOLD YOU IM JARKEE BUT ILL FORGIVE YOU THIS TIME XD -->

<div class="mt-3 '.$colsize.'">

<div class="card card-body">

<img src="https://yt3.ggpht.com/X6haBC7X0n00Lz3VLv5GDn7zQthlsoP0gJr5CzNoMLbWu6Ztai-udsbdbYO0LHHV_R4onq3F-A" width="'.$pfpsize.'" style="border-radius:50%;margin:auto;">

<h5 style="text-align:center;"><!--<a href="http://jarkee.ml">-->jarkee<!--</a>--></h5>

<h6 style="text-align:center;"><i class="fa fa-quote-left" aria-hidden="true"></i>'.$jarkeestatus.'<i class="fa fa-quote-right" aria-hidden="true"></i></h6>

<b style="text-align:center;">member</b>

<p style="text-align:center;">im the best</p>

<hr style="color:white">

<a type="button" class="mt-2 btn btn-danger" href="http://www.revhill.com/user?id=62" target="_blank">Revolution Hill</a><a type="button" class="mt-2 btn btn-danger" href="https://www.twitch.tv/jaredyoshi" target="_blank">Twitch</a><a type="button" class="mt-2 btn btn-danger" href="https://github.com/JaredYoshi" target="_blank">Github</a><a type="button" class="mt-2 btn btn-danger" href="https://www.reddit.com/user/JaredYoshi" target="_blank">Reddit</a><a type="button" class="mt-2 btn btn-danger" href="https://www.twitter/JaredYoshi" target="_blank">Twitter</a><a type="button" class="mt-2 btn btn-danger" href="https://www.jarkee.ml" target="_blank">Website</a><a type="button" class="mt-2 btn btn-danger" href="https://www.youtube.com/channel/UCAuveavDuX6oFlwaYoTFBLQ" target="_blank">YouTube</a><a type="button" class="mt-2 btn btn-primary" href="https://discord.com/users/673252478602444800" target="_blank">Discord</a>

</div>

</div>

<!-- nexo -->

<div class="mt-3 '.$colsize.'">

<div class="card card-body">

<img src="https://static-cdn.jtvnw.net/jtv_user_pictures/d50ae75e-921a-4997-a956-3cb4d5ead0ad-profile_image-300x300.png" width="'.$pfpsize.'" style="border-radius:50%;margin:auto;">

<h5 style="text-align:center;">nexo</h5> <!-- it does look like the fortnite battle pass tho -nexo-->

<h6 style="text-align:center;"><i class="fa fa-quote-left" aria-hidden="true"></i>'.$nexostatus.'<i class="fa fa-quote-right" aria-hidden="true"></i></h6>

<b style="text-align:center;">member</b>

<p style="text-align:center;">indian lore (real)</p>

<hr style="color:white">

<a type="button" class="btn btn-danger" href="https://www.youtube.com/channel/UC-io8cahGWQrdQnE_zltF8Q" target="_blank">YouTube</a><a type="button" class="btn btn-primary" href="https://twitch.tv/NexoDeveloper" target="_blank">Twitch</a><a type="button" class="btn btn-primary" href="https://discord.com/users/791297512274526238" target="_blank">Discord</a><a type="button" class="btn btn-primary" href="https://devscontent.ml" target="_blank">Website</a><a type="button" class="btn btn-primary" href="https://twitter.com/devnexo" target="_blank">Twitter</a>

</div>

</div>

<!-- warkee  YOU MEAN WAFKEE? --> 

<div class="mt-3 '.$colsize.' mt-2">

<div class="card card-body">

<img src="/resources/img/wafkee.png" width="'.$pfpsize.'" style="border-radius:50%;margin:auto;">

<h5 style="text-align:center;">wafkee</h5>

<h6 style="text-align:center;"><i class="fa fa-quote-left" aria-hidden="true"></i>'.$wafkeestatus.'<i class="fa fa-quote-right" aria-hidden="true"></i></h6>

<b style="text-align:center;">member</b>

<p style="text-align:center;">ceo of gravitar,sans god</p>
<p style="text-align:center;">professional sans finder</p>


<hr style="color:white">

<a type="button" class="btn btn-danger" href="https://www.youtube.com/channel/UCHxiLovkz6lqyBYYQBBcYrg" target="_blank">YouTube</a><a type="button" class="mt-2 btn btn-primary" href="https://discord.com/users/833531564436094987" target="_blank">Discord</a>

</div>

</div>

<!-- anonymous user if he wants to be back then add him -->

<div class="mt-3 '.$colsize.'">

<div class="card card-body">

<img src="https://c.tenor.com/-faIYyW2MxkAAAAS/zajebisty-chomik-chomik-box.gif" width="'.$pfpsize.'" style="border-radius:50%;margin:auto;"> <!-- waiting for his icon too -->

<h5 style="text-align:center;">GDPR0001</h5>

<h6 style="text-align:center;"><i class="fa fa-quote-left" aria-hidden="true"></i>'.$worldcashstatusalsopeoplewontseethisvariablesname.'<i class="fa fa-quote-right" aria-hidden="true"></i></h6>

<b style="text-align:center;">chomik</b>

<p style="text-align:center;">member has not added an about yet</p>

<hr style="color:white"><!-- idk if he has a youtube so im commenting this forXDDD now

<a type="button" class="btn btn-danger" href="https://www.youtube.com/watch?v=iik25wqIuFo" target="_blank">???</a>--><a type="button" class="btn btn-primary" href="https://discord.com/users/791297512274526238" target="_blank">Discord</a>

</div>

</div>

<!-- sauce --> <!-- what its zauce LOL -->

<div class="mt-3 '.$colsize.'">

<div class="card card-body">

<img src="/resources/img/zauce.png" width="'.$pfpsize.'" style="border-radius:50%;margin:auto;">

<h5 style="text-align:center;">zauce</h5>

<h6 style="text-align:center;"><i class="fa fa-quote-left" aria-hidden="true"></i>'.$zaucestatus.'<i class="fa fa-quote-right" aria-hidden="true"></i></h6>

<b style="text-align:center;">member</b>
<p style="text-align:center;">que onda titio, choose uno<span style="display:inline; color: white;"> coke</span> or <span style="display:inline; color: purple;">lean</span> </p>


<hr style="color:white"><!--

<a type="button" class="btn btn-danger" href="https://www.youtube.com/channel/UCsd6ll5osXq7Api8-BAW7sg" target="_blank">YouTube</a>--><a type="button" class="btn btn-primary" href="https://discord.com/users/344865008292724739" target="_blank">Discord</a>

</div>

</div>

<!-- noynac (gavin) -->

<div class="mt-3 '.$colsize.'">

<div class="card card-body">

<img src="https://cdn.discordapp.com/avatars/639667553832140833/36ca6c5837eb1c8ca27b700ab6286e99.png?size=4096" width="'.$pfpsize.'" style="border-radius:50%;margin:auto;"> <!-- waiting for noynacs fucking image -nexo -->

<h5 style="text-align:center;">noynac</h5>

<h6 style="text-align:center;"><i class="fa fa-quote-left" aria-hidden="true"></i>'.$noynacstatus.'<i class="fa fa-quote-right" aria-hidden="true"></i></h6>

<b style="text-align:center;">member</b>

<p style="text-align:center;">member has not added an about yet</p>

<hr style="color:white"><!--

<a type="button" class="btn btn-danger" href="https://discord.com/users/639667553832140833" target="_blank">Discord</a>--><a type="button" class="btn btn-primary" href="https://discord.com/users/337142586823278603" target="_blank">Discord</a>

</div>

</div>

</div>





';






$membersold = '



<b>lead</b><br>



<a href="https://discord.com/users/849667719359496222" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;gameguy</a> - group and discord server owner<br>



<a href="https://discord.com/users/831359931419721779" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;neek <!-- formerly CUKESIM --></a> - roblox group owner<br>



<b>members</b><br>



<a href="https://discord.com/users/345265102137720842" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;Mischief <!-- formerly or still presents BaguetteBling --></a><br>



<a href="https://discord.com/users/791297512274526238" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;Nexo</a><br>



<a href="https://discord.com/users/673252478602444800" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;jarkee <!-- formerly JaredYoshi --></a><br>



<!--<a href="https://discord.com/users/869692907970494484" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;snoopydogg</a><br>-->



<a href="https://discord.com/users/833531564436094987" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;wafkee</a><br>



<a href="https://discord.com/users/632025609970647051" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;XlXi <!-- formerly Mizk --></a><br>



<a href="https://discord.com/users/344865008292724739" target="_blank" style="color:#5865f2" class="<?php echo $lineremover; ?>">&commat;Zauce</a><br>



';



$projects = '



<div class="row" id="projects">

<div class="col-md-3">

<div class="card card-body">

<div style="text-align:center;">

<a href="https://shopium.cf" target="_blank"><img src="https://i.postimg.cc/28xB6CFn/Shopium.png" width="100%"></a>

<p>Shopium is a ROBLOX 2008 mod created by Carly</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card card-body">

<div style="text-align:center;">

<a href="https://revhill.com" target="_blank"><img src="http://revhill.com/assets/RH.png" width="40%" style="margin-bottom:3px;"></a>

<p>Revolution Hill is a Brick-Hill clone, created because the staff team at Brick-Hill sucks. <br>(CURRENTLY IN MAINTENANCE)</p>

</div>

</div>

</div>



<div class="col-md-3">

<div class="card card-body">

<div style="text-align:center;">

<a href="https://gravitar.ga" target="_blank"><img src="https://gravitar.ga/assets/G.png" width="20%"></a>

<p>Gravitar is a 2D social avatar network script site.</p>

</div>

</div>

</div>



<div class="col-md-3">

<div class="card card-body">

<div style="text-align:center;">

<a href="https://www.roblox.com/games/7642104876/ElevatorPlus" target="_blank"><img src="https://tr.rbxcdn.com/2884802ef97597b4215bf983c7a0357b/768/432/Image/Png" width="60%"></a>

<p>In Elevator+, you ride in a very familiar elevator, but with new friends and floors!</p>

</div>

</div>

</div>




<div class="col-md-3">

<div class="card card-body">

<div style="text-align:center;">

<a href="https://hromi.xyz/" target="_blank"><img src="https://hromi.xyz/resources/images/navlogo.png" width="60%"></a>

<p>The revival is back as a sandbox! <br> Now managed by OTGC <br>(and neek, sorta)!</p>

</div>

</div>

</div>




</div>



';


// GLOBAL STATUSES

$carlystatus = "ily neek <3";

?>