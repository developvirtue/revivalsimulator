<?php $aprilfools = false;
if ($aprilfools) {
$hello = "Goodbye";
$offtopicgc = "OnTopicGC";
$logo = "ontopicgc";
}
else {
$hello = "Hello";
$offtopicgc = "OffTopicGC";
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
		<div class="col-md-2 mt-2">
	<div class="card card-body">
	<div class="tab-content" style="text-align:center;">
	
	<img src="'.$row["avatar"].'" style="border-radius:50%; box-shadow: -2px 3px 4px rgb(0 0 0 / 22%);" width="50%"><div class="mt-0"></div>
	'.$row["name"].'<div class="mt-0"></div>
	<i class="fa fa-quote-left" style='.$a.'></i>'.$row["status"].'<i class="fa fa-quote-right" style='.$a.'></i>
        <!--<figure class="p-2 rounded mt-1" style="box-shadow: -3px 5px 12px rgb(0 0 0 / 7%); border-left: .25rem solid #0dcaf0; background-color: rgb(255 255 255 / 4%);">'.$row["status"].'</figure>-->
        <hr>
        <p>'.$row["description"].'</p>
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
		<div class="col-md-2 mt-2">
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
<!DOCTYPE HTML>
<html>
<head>
<title>OffTopicGC</title>
<meta type="utf-8"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<style>
/* jared i hate you
.bg {
  background-image: url(/resources/img/bg.png);  
  background-repeat: no-repeat;
  background-position: center;
  height: 100vh;
  width: 100vw;
  position: fixed;
  z-index: -1;
}
*/
body{
    background-color:#0dcaf0;
    /*background-image: url(/resources/img/bg.png);*/
    background-repeat: repeat-x;
    background-attachment: fixed;
}
.card-header{
    background-color:#00ecfa;
    color:#ffffff;
}
.card-body{
    background-color:#ffffff;
}
</style>
<body>
<div class="bg"></div>
<div class="content">
<div class="container">
<div style="text-align:center;">
<img class="mt-5" src="/resources/img/<?php echo $logo; ?>.png" width="50%"/><br>
<a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%);" class="btn btn-primary bi bi-discord mt-3" target="_blank" href="https://discord.gg/Nn9Udatmyz"></a> <a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%);" class="btn btn-danger bi bi-youtube mt-3" target="_blank" href="https://www.youtube.com/channel/UC7kkSQPmGwrrYFwrzw34kiQ/"></a> <a type="button" style="box-shadow: -1px 2px 5px rgb(0 0 0 / 15%); color:white;" class="btn btn-info bi bi-twitter mt-3" target="_blank" href="https://twitter.com/offtopicgc"></a>
</div>
<div class="mt-2 text-light">
<h5 style="text-shadow: 2px 1px 3px rgb(0 0 0 / 43%);"><?php echo $hello ?>!</h5>
<hr style="box-shadow: 2px 2px 4px rgb(0 0 0 / 55%);height: 2px;">
<text style="text-shadow: 2px 1px 3px rgb(0 0 0 / 43%);">We are <?php echo $offtopicgc ?>, OTGC for short. We are from a group chat, and we like to create things and mess around with source codes. Because of that, we decided to create projects, and expand OTGC into a community!</text>
</div>
<div class="card" style="border: 0px;box-shadow: -2px 0px 4px 2px rgb(0 0 0 / 8%);">
<div class="card-header">
projects
</div>
<div class="card-body">
<div class="row">
<!-- i will only continue coding if someone connects to a db --><!-- look what an asshole -->
<?php projects($conn); ?>
</div>
</div>
</div>
<div class="card mt-2" style="border: 0px;box-shadow: -2px 0px 4px 2px rgb(0 0 0 / 8%);">
<div class="card-header">
group chat members <!-- team members -->
</div>
<div class="card-body">
<h2>Leaders</h2>
<div class="row">
<?php 
	getTheFuckingMembersHiNeek("lead", $conn);
  ?>
  </div>
<hr class="mt-4">
<h2>Exclusives</h2>
<div class="row">
<?php 
	getTheFuckingMembersHiNeek("exclusives", $conn);
  ?>
  </div>
<hr class="mt-4">
<h2>Members</h2>
<div class="row">
<?php 
	getTheFuckingMembersHiNeek("members", $conn);
  ?>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="mt-4"></div>
</div>
