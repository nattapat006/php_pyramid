<?php
include("font.php");
for($non=5;$non>=1;$non--)
{
	for($n=1;$n<=$non;$n++)
	{
	echo (6-$non);
	}
	for($n=1;$n<=(6-$non);$n++)
	{
	echo ("&nbsp;&nbsp;&nbsp;");
	}
	for($n=1;$n<=$non;$n++)
	{
	echo (6-$non);
	}
	echo "<br>";
}
?>