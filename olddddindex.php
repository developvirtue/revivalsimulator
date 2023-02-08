<?php include "resources/nav.php"; ?>
<div style="text-align:center;"><img src="<?php echo $logo; ?>" width="50%"></div>
<h3>hello!</h3>
<p>welcome to the official <?php echo $groupname; ?> website!</p>
<p>we like to clone random or dead websites like brick-hill and random social avatar network script sites.</p>
<!--<iframe src="https://discord.com/widget?id=934190424556453930&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>-->
<hr>
<h3>projects</h3>
<?php echo $projects; ?>

<h3>group chat members</h3>
(click on a member <!--tag-->username to view their Discord profile!)
<!--<h4>(members, add more social media to your list if needed, i (neek) rushed this lol)</h4>-->
<?php echo $members; ?>
<?php include "resources/footer.php"; ?>