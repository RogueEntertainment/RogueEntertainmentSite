<?php
if(!(isset($_COOKIE["visited_before"]))){
	setcookie("visited_before",1,time()+60*60*24*365);
	header("location:video.php?backpage=index.php");
}
?>
