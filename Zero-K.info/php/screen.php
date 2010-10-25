<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Zero-K - Pics</title>
<?php include("inc_head.inc"); ?>
</head>

<?php include("inc_plainbg.inc"); ?>

<body>
	<div id="wrapper">
<!-------------------------------------------------------------- -->
<?php include("inc_menu.inc"); ?>
<!-------------------------------------------------------------- -->

<?php
$images = scandir('img/screenshots');
for ($i = 2; $i <= count($images); $i++)
{
	$picname = $images[$i];
	$picext = substr($picname, strlen($picname)-4);
	$picpre = substr($picname, 0, 6);
	if ( $picpre == "thumb_" ) continue;
	if ( $picext == ".png" or $picext == ".jpg" )
	{
		echo "<a href='img/screenshots/$picname'><img src='img/screenshots/thumb_$picname' class='border' /></img></a>\n";
	}
}
?>

<!-------------------------------------------------------------- -->
<?php include("inc_footer.inc"); ?>
<!-------------------------------------------------------------- -->
	</div><!close wrapper>
</body>
</html>