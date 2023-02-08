<?php $brandname = "virtue development";
  
  // might not be neccessary but who cares, right?!??!?! - nexo
  // i made it necessary :troll: - carly

?>

<?php

  // languages uwu - carly

  // defaults (aka english)

  // navigation
    $home = "Home"; $projects = "Projects"; $members = "Members"; $more = "More";
  // title (and later on, account setting maybe)
    $welcome = "<div class='joe'>welcome!</div>";
  // member roles
    $leaders = "Leaders"; $exclusives = "Exclusives";
  // about
    $indexcontent = $brandname.' is a group chat and organization owned by <a href="http://carlyy.net/" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@carly</strong></a>.
    <br>
    There is lots and lots to do on the site, so...
    <br>
    <h2>Have fun!</h2>';
  // footer
    $footer = "©".date("Y")." ".$brandname.". All rights reserved.";


 if ($_GET['lang'] == "en")
{
    $home = "Home"; $projects = "Projects"; $members = "Members"; $more = "More";
    $welcome = "welcome!";
    $indexcontent = $brandname.' is a group chat and organization owned by <a href="http://carlyy.net/" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@carly</strong></a>.
    <br>
    There is lots and lots to do on the site, so...
    <br>
    <h2>Have fun!</h2>';
    $footer = "©".date("Y")." ".$brandname.". All rights reserved.";
} else {

    if ($_GET['lang'] == "pt")
{
    $home = "Início"; $projects = "Projetos"; $members = "Membros"; $more = "Mais";
    $welcome = "Bem-vindo!";
    $indexcontent = $brandname.' é um grupo e organização criado por <a href="http://carlyy.net/" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@carly</strong></a>.
    <br>
    Há muitas coisas para explorar ne website!
    <br>
    <h2>Diverte-te!</h2>';
    $footer = "©".date("Y")." ".$brandname.". Todos os direitos reservados.";

}
  
if ($_GET['lang'] == "de")
{
    $home = "Hauptseite"; $projects = "Produkte"; $members = "Angestellte"; $more = "Andere";
    $welcome = "hallo!";
    $indexcontent = $brandname.' ist ein Chat und eine Organisation von <a href="http://carlyy.net/" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@carly</strong></a>.
    <br>
    Auf unserer Website gibt es viel zu entdecken!
    <br>
    <h2>Guten Tag!</h2>';
    $footer = "©".date("Y")." ".$brandname.". Alle Rechte vorbehalten.";
}

if ($_GET['lang'] == "jp")
{
    $home = "ホーム"; $projects = "プロジェクト"; $members = "メンバーズ"; $more = "もっと";
    $welcome = "hajimemashite!";
    $indexcontent = $brandname.' はチャットと組織に <a href="http://carlyy.net/" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@carly</strong></a>.
    <br>
    たくさんのものをあります、だから、
    <br>
    <h2> 楽しんでください!\(^ω^)/</h2>';
    $footer = "©".date("Y")." ".$brandname."。 全著作権所有。";
}


if ($_GET['lang'] == "tp")
{
    $home = "tomo"; $projects = "pali"; $members = "jan kulupu"; $more = "mute";
    $welcome = "kama pona a!";
    $indexcontent = $brandname.' li lipu Saiko toki kulupu tan jan <a href="http://carlyy.net/" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@carly</strong></a>.
    <br>
    lon weka li mute pali.
    <br>
    <h2>olin pona!</h2>';
    $footer = "©".date("Y")." ".$brandname.". nasin sewi ken ali. (very bad translation i know)";
}

if ($_GET['lang'] == "zh-simp")
{
    $home = "家"; $projects = "项目"; $members = "会员"; $more = "更多";
    $welcome = "huanying!";
    $indexcontent = $brandname.'是组和组织由<a href="http://carlyy.net/" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@carly</strong></a>.
    <br>
    有很多去做, 所以,
    <br>
    <h2> 玩的开心!\(^ω^)/</h2>';
    $footer = "©".date("Y")." ".$brandname."。 版权所有。";
}
  
if ($_GET['lang'] == "zh-trad")
{
    $home = "家"; $projects = "項目"; $members = "會員"; $more = "更多";
    $welcome = "huanying!";
    $indexcontent = $brandname.'是組和組織由<a href="#" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@gameguy</strong></a>。
    <br>
    有很多去做, 所以,
    <br>
    <h2> 玩的開心!\(^ω^)/</h2>';
    $footer = "©".date("Y")." ".$brandname."。 版权所有。";
}

 if ($_GET['lang'] == "sh")
{
    $home = "Home"; $projects = "Products"; $members = "W'rk'rs"; $more = "M're";
    $welcome = "greetings!";
    $leaders = "Royals"; $exclusives = "Associates";
    $indexcontent = $brandname.' is a group discussion board and company owned by the lad known as <a href="http://carlyy.net/" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@carly</strong></a>.
    <br>
    Th\'re doth be a multitude of things to doeth on the site, so...
    <br>
    <h2>Has\'t excit\'ment!</h2>';
    $footer = "©".date("Y")." ".$brandname.". All rights res'rv'd.";
}

 if ($_GET['lang'] == "lo")
{
    $home = "hoem"; $projects = "kat food"; $members = "ownrz (giv food!!!!!!!)"; $more = "mor";
    $welcome = "halo kan i haz chezbrgr!!!! :3";
    $indexcontent = $brandname.' iz grupchat and company owned by mai owner <a href="#" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@gameguy</strong></a> :3!!!
    <br>
    ther is lots to du on dis intawebz sait, so...
    <br>
    <h2>DU IT!!!!!!!!!!</h2>';
    $footer = "©".date("Y")." ".$brandname.". all rigtz rezrvd";
}
 
  if ($_GET['lang'] == "hx")
{
    $home = "h0m3"; $projects = "pr0j3c7s"; $members = "m3mb3rs"; $more = "m0r3";
    $welcome = "w31c0m3!";
    $indexcontent = $brandname.' is 4 gr0up ch47 & 0rg4niz4ti0n pwned by <a href="#" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@g4m3guy</strong></a>.
    <br>
    th3r3 is l07s 4nd l07s 7o do 0n th3 sit3, s0...
    <br>
    <h2>st4r7 pwning!</h2>';
    $footer = "©".date("Y")." ".$brandname.". All rights reserved.";
}

 if ($_GET['lang'] == "ae")
{
    $home = "ᚻᚪᛘ"; $projects = "ᚷᛖᛋᚳᛁᛖᛈᛈᚪᚾ"; $members = "ᚷᛖᛋᚳᛠᛈ"; $more = "ᛘᚪᚱᚪ";
    $welcome = "ᚹᛖᛚᚳᚢᛘᛖᚾ!";
    $indexcontent = $brandname.' ᛒᛖᚩᚾ ᚷᛖᚠᛖᚱᛋᚳᛁᛈᛖ ᚠᚱᚩᛘ <a href="#" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@gameguy</strong></a>.
    <br>
    ᚦᛇᚱ ᛒᛖᚩᚾ ᛁᚾ ᛘᛁᚳᛖᛚ ᚦᛁᛝ, ᚠᚩᚱ‐ᚹᛖᛚ...
    <br>
    <h2>ᛒᛖᚾᛠᚻ!</h2>';
    $footer = "©".date("Y")." ".$brandname.". ᛠᛚᛚᛖ ᚦᛁᛝ ᛚᛇᛏᚪᚾ.";
}

 if ($_GET['lang'] == "lv")
{
    $home = "Sākums"; $projects = "Projekti"; $members = "Dalībnieki"; $more = "Vairāk";
    $welcome = "sveiki!";
    $indexcontent = $brandname.' ir group chats un organizācija kura pieder <a href="#" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@gameguy</strong></a>.
    <br>
    Šeit ir daudz un daudz ko darīt uz šīs saites...
    <br>
    <h2>Baudat!</h2>';
    $footer = "©".date("Y")." ".$brandname.". All rights reserved.";
}

  if ($_GET['lang'] == "pf")
{
    $home = "Noochweiser"; $projects = "Brodukde"; $members = "Leit"; $more = "Meh";
    $welcome = "willkumm!";
    $indexcontent = $brandname.' sei en Gruppenchat und Organisation hergestellt aus <a href="#" style="font-size: unset!important; text-decoration: none;"><strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; padding-bottom: 2px; color: purple;">@gameguy</strong></a>.
    <br>
    Daa sei en Latt es Gefucker do, so...
    <br>
    <h2>Entschoiye!</h2>';
    $footer = "©".date("Y")." ".$brandname.". All rights reserved.";
}
  
}
  
?>

<html>
<head>
  <link href="https://bootswatch.com/5/zephyr/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Montserrat+Alternates:wght@600&family=Montserrat:wght@500;600&display=swap" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
  body { color:white; }
  a { text-decoration:none; }
  .headerlink { font-family:"Montserrat"; font-weight:500; -webkit-text-stroke: 0.9px #00000038; text-shadow: -1.7px 1.9px 0px rgb(0 0 0 / 18%); }
  card-header { background: rgb(14,0,255); background: linear-gradient(180deg, rgba(14,0,255,1) 0%, rgba(146,93,197,1) 0%, rgba(146,93,197,1) 0%, rgba(116,68,166,1) 100%); }
  .dropdown-item { padding: 0px!important; font-size: 1rem!important; margin-bottom: 3px!important; }
  .dropdown-toggle::after { display: none!important; }
</style>
<body>
  
  <div class="container" style="padding-top:185px; padding-left:725px;">
 
</body>
</html>