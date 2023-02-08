<?php error_reporting(0);
(@include($_SERVER['DOCUMENT_ROOT'].'/config.php')) || die('Unable to display status');
if (!$carlystatus){
$carlystatus = "Unable to display status";
}
// echo $carlystatus
echo "<script>let carlystatus = \"".$carlystatus."\"</script>";
?>