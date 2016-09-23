<?php
if(!(isset($_COOKIE["visited_before"]))){
	setcookie("visited_before",1,time()+60*60*24*365);
	header("location:video.php?backpage=index.php");
}
?>
<!DOCTYPE html>
<html>
        <head>
                <title>Rogue Entertainment</title>
        </head>
        <body>
                <center>
                        <h1>Rogue Entertainment</h1>
                </center>
                <p>
                        Our projects:
                        <ul>
                                <li>
                                        <a href="projects/trapped.html">
                                                Trapped
                                        </a>
                                </li>
                        </ul>
                </p>
        </body>
</html>
