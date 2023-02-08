<?php
  include("header.php");
?>


<html> <!-- im not gonna be mad like neek cuz of the formatting -nexo -->
<head>
  <title><?php echo $brandname; ?></title>
</head>
<style>
  
  body {
   background-image: url("https://cdn.discordapp.com/attachments/991468360355283034/1072688320636796938/virtuebg.png");
  }
  
  h1 { 
    color:white;
   font-size:50px;
    font-family:"Montserrat Alternates";
  }
  
  .joe { 
    color:white;
   font-size:50px;
    font-family:"Montserrat Alternates";
  }
  
  a {
    color:white;
   font-size:25px;
  }
  
  .card-header {
  color:white;
  font-family: 'Ferrite Core DX', sans-serif;
  }
  
  .content {
  color:black;
  font-family:"Montserrat", sans-serif;
  }
  
  
</style>
<body>
  
  <h1 style="text-shadow: -2px 3px 2px rgb(0 0 0 / 17%);"><?php echo strtolower($brandname); ?></h1>
  <a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%); margin-top: -5px !important;" class="btn btn-primary bi bi-discord mt-3" target="_blank" href="https://discord.gg/zvX8n35Vwp"></a> 
  <a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%); margin-top: -5px !important;" class="btn btn-danger bi bi-youtube mt-3" target="_blank" href="https://www.youtube.com/@virtuedev"></a> 
  <a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%); margin-top: -5px !important; color:white;" class="btn btn-info bi bi-twitter mt-3" target="_blank" href="#"></a>
  <br>
  <a class="headerlink" href="/<?php if ($_GET['lang']){ echo '?lang='; echo $_GET['lang']; } ?>"><?php echo $home; ?></a><span> | </span><a class="headerlink" href=""><?php echo $projects; ?></a><span> | </span><a class="headerlink" href="/members.php<?php if ($_GET['lang']){ echo '?lang='; echo $_GET['lang']; } ?>"><?php echo $members; ?></a><span> | </span><a class="headerlink" href=""><?php echo $more; ?></a><span> </span>
  <div class="card" style="color:212121; border: 0px;">
  <div class="card-header" style="color:fff; font-size:25px; background: rgb(14,0,255); background: linear-gradient(180deg, rgba(14,0,255,1) 0%, rgba(33,33,33,1) 0%, rgba(33,33,33,1) 0%, rgba(15,15,15,1) 100%);">
<?php echo $welcome; ?>
  </div>
  <div class="content" style="padding:8px;">
    <?php echo $indexcontent; ?>
  </div>
  </div>
  <footer>
  <div class="dropdown">
  <button style="padding: 7px; padding-left: 14px; padding-right: 14px; margin-top: 5px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-globe mr-2"></i> <i class="fa fa-chevron-up"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="transform: translate3d(0px, 38.7px, 0px)!important;">
    <a class="dropdown-item" href="?lang=en">English</a>
    <a class="dropdown-item" href="?lang=de">Deutsch</a>
    <a class="dropdown-item" href="?lang=de">Old English</a>
  </div>
<div style="display: inline-block; position: relative; top: 4px;"><?php echo $footer; ?></div>
</div>
  </footer>

</body>
</html>