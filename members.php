<?php $aprilfools = false;
if ($aprilfools) {
$hello = "Goodbye";
$offtopicgc = "OnTopicGC";
$logo = "ontopicgc";
}
else {
$hello = "Hello";
$offtopicgc = "Virtue Development";
$logo = "otgclogo";
}
$servername = "mysql.ct8.pl";
$username = "m23523";
$password = "Canada.,24";
$dbname = "m23523_otgcdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die(mysqli_connect_error());
}



function getTheFuckingMembersHiNeek($tfisit, $conn, $project = true)
{
	$a = '"vertical-align:super;display:inline-block;font-size:10px;margin-bottom:4px;"';
	$sql = "SELECT * FROM `members` 
	WHERE type='$tfisit'";
	$result = mysqli_query($conn, $sql);
	if (!$result)
	{
		echo "ohno, this is what went wrong: " . mysqli_error($conn);
	}
	if (!empty($result) AND mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo '
		<div class="col-md-3 mt-2" style="width: 45%;">
	<div class="card card-body">
	<div class="tab-content" style="text-align:center;">
	
	<img src="'.$row["avatar"].'" style="border-radius:50%; box-shadow: -2px 3px 4px rgb(0 0 0 / 22%);" width="50%"><div class="mt-0"></div>
	<strong style="background-color: #7463c23d; border-radius: 3px; padding-left: 3px; padding-right: 3px; color: purple; white-space: nowrap; margin-top: 5px; display: inline-block; font-size: 75%;">@'.$row["name"].'</strong><div class="mt-0"></div>
        <!--<figure class="p-2 rounded mt-1" style="box-shadow: -3px 5px 12px rgb(0 0 0 / 7%); border-left: .25rem solid #0dcaf0; background-color: rgb(255 255 255 / 4%);">'.$row["status"].'</figure>-->
	</div>
	</div>
	</div>
		';  }
	} else {
	echo "No $tfisit? <img src='https://i.imgflip.com/64ll02.png' width='30' height='100' />";
	}
    // qunjz
    if (!$row['description'] == "") {
        echo 'No description provided!';
    }
	
}
	
	function projects($conn)
	{
		/**/
		$sql = "SELECT * FROM `goddamnprojectslol` WHERE publicity=1";
	$result = mysqli_query($conn, $sql);
	if (!$result)
	{
		echo "ohno, this is what went wrong: " . mysqli_error($conn);
	}
	if (!empty($result) AND mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo '
		<div class="col-md-5 mt-2">
<div class="card card-body">
<img src="'.$row["picture"].'">
<h6 style="text-align: center;">'.$row["name"].'</h6>
<hr>
<p>'.$row["description"].'</p>
<a type="button" class="btn btn-info" style="color:#ffffff; box-shadow: -3px 4px 4px rgb(0 0 0 / 12%);" href="'.$row["url"].'" target="_blank">View</a>
</div>
</div>';  }
	} else {
	echo "No projects? <img src='https://i.imgflip.com/64ll02.png' width='30' height='100' />";
	}
	
	}

?>
<?php
  include("header.php");
?>


<html> <!-- im not gonna be mad like neek cuz of the hformatting -nexo -->
<head>
  <title>OffTopicGC</title>
</head>
<style>
  
  body {
   background-image: url("https://cdn.discordapp.com/attachments/853212388807802910/992556206411501648/Untitled234_20220701112238.png");
  }
  
  h1 { 
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
  
  <h1 style="text-shadow: -2px 3px 2px rgb(0 0 0 / 17%);"><?php echo $_SERVER['SERVER_NAME']; ?></h1>
  <a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%); margin-top: -5px !important;" class="btn btn-primary bi bi-discord mt-3" target="_blank" href="https://discord.gg/Nn9Udatmyz"></a> 
  <a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%); margin-top: -5px !important;" class="btn btn-danger bi bi-youtube mt-3" target="_blank" href="https://www.youtube.com/channel/UC7kkSQPmGwrrYFwrzw34kiQ/"></a> 
  <a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%); margin-top: -5px !important; color:white;" class="btn btn-info bi bi-twitter mt-3" target="_blank" href="https://twitter.com/offtopicgc"></a>
  <br>
  <a class="headerlink" href=""><?php echo $home; ?></a><span> | </span><a class="headerlink" href=""><?php echo $projects; ?></a><span> | </span><a class="headerlink" href=""><?php echo $members; ?></a><span> | </span><a class="headerlink" href=""><?php echo $more; ?></a><span> </span>
  <div class="card" style="color:212121; border: 0px;">
  <div class="card-header" style="color:fff; font-size:25px; background: rgb(14,0,255); background: linear-gradient(180deg, rgba(14,0,255,1) 0%, rgba(146,93,197,1) 0%, rgba(146,93,197,1) 0%, rgba(116,68,166,1) 100%);">
<?php echo $welcome; ?>
  </div>
  <div class="content" style="padding:8px;">
    <h2><?php echo $leaders ?></h2>
<div class="row">
<?php 
	getTheFuckingMembersHiNeek("lead", $conn);
  ?>
  </div>
<hr class="mt-4">
<h2><?php echo $exclusives ?></h2>
<div class="row">
<?php 
	getTheFuckingMembersHiNeek("exclusives", $conn);
  ?>
  </div>
<hr class="mt-4">
<h2><?php echo $members ?></h2>
<div class="row">
<?php 
	getTheFuckingMembersHiNeek("members", $conn);
  ?>
 </div>
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
  </div>
<div style="display: inline-block; position: relative; top: 4px;"><?php echo $footer; ?></div>
</div>
  </footer>



 </div>

  </div>
  </div>
  
</body>
</html>