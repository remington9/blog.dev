<!DOCTYPE html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>
    <h2>Your guess: <?= $number; ?></h2>
    <h2>Dice rolled <?= $dice; ?></h2>

    <?php if($number == $dice): ?>
        <h1>You guessed right!</h1>
    <?php endif; ?>

</body>
</html>