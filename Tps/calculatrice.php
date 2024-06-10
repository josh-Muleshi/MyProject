<?php

function calculator(float $number1, float $number2, string $operateur):float|string {
    return match ($operateur) {
        "+" => $number1 + $number2,
        "-" => $number1 - $number2,
        "/" => $number1 / $number2,
        "*" => $number1 * $number2,
        default => "",
    };
}

$error = null;
$number1 = isset($_POST['number1']) ? (float)$_POST['number1'] : 0;
$number2 = isset($_POST['number2']) ? (float)$_POST['number2'] : 0;
$operateur = isset($_POST['operateur']) ? $_POST['operateur'] : "+";

if ($operateur === "/" && $number2 == 0) {
    $error = "Erreur division par zero";
}

if ($error == null) {
    $result = calculator($number1, $number2, $operateur);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <p><a href="../index.php">Retour</a></p>
    <h1>Calculatrice</h1>
    <form action="" method="post">
        <input type="number" name="number1" value="<?= $number1?>" step="any">
        <select name="operateur">
            <option value="+" <?= $operateur === '+' ? 'selected' : '' ?>>+</option>
            <option value="-" <?= $operateur === '-' ? 'selected' : '' ?>>-</option>
            <option value="/" <?= $operateur === '/' ? 'selected' : '' ?>>/</option>
            <option value="*" <?= $operateur === '*' ? 'selected' : '' ?>>*</option>
        </select>
        <input type="number" name="number2" value="<?= $number2?>" step="any">
        <button type="submit">Calculer</button>
    </form>
    <hr>
    <?php if (isset($result)) : ?>
        <p>Result = <?= $result ?></p>
    <?php else : ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
</body>
</html>
