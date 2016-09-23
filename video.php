<!DOCTYPE html>
<html>
	<head>
		<title>Rogue Entertainment</title>
	</head>
	<body style="background-color:black;">
		<center>
			<video autoplay id="intro">
				<source src="resources/Rouge Entertainment title.mp4" type="video/mp4">
			</video>
		</center>
		<script>
			document.getElementById("intro").addEventListener('ended',redirect,false);
			function redirect(){
				window.location="<?=$_GET['backpage']?>";
			}
		</script>
	</body>
</html>
