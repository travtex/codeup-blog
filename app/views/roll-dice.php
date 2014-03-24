<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dice Rolling</title>
</head>
<body>
	<h1>Your Guess is: <?= $guess; ?></h1>
	<h1>The random roll is: <?= $roll; ?></h1>
	<? if ($guess == $roll) : ?>
		<h1><mark>You guessed RIGHT!  Yay.</mark></h1>
	<? else: ?>
		<h1><mark>You guessed WRONG!  Boo.</mark></h1>
	<? endif; ?>
</body>
</html>