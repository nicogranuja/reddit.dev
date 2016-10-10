<!DOCTYPE html>
<html>
<head>
	<title>Roll Dice</title>
	<!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Roll the dice</h1>
		<p>The random number is = <?=$randomNum?></p>
		<p>Your guess is= <?=$guess?> </p>
		<?php 
			if($correct){
				echo "<p>You guessed right!</p>";
			}
			else{
				echo "<p>Try again</p>";
			}
		?>
	</div>
	
</body>
</html>