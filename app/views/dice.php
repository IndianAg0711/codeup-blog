<html>
<head>
	<title>Dice</title>
</head>
<body>


<h1><center> Die: <?= $die; ?> &nbsp; Guess: <?= $guess; ?></center></h1>

<br>

<?php 

if ('die' == 'guess') {
	echo("<p><center>You guessed correct!</center></p>");
}	else {
	echo ("<p><center>Guess Again!</center></p>");
}

?>

</body>
</html>