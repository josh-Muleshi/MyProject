<?php

    function conversion(float $amount, float $rate, string $conversion): float {
        return $conversion === "USD to CDF" ? $amount * $rate : $amount / $rate; 
    }

    $error = null;
    if (!empty($_POST)) {
        $amount = isset($_POST["amount"]) ? (float)$_POST["amount"] : null; 
        $rate = isset($_POST["rate"]) ? (float)$_POST["rate"] : null; 
        $conversion = $_POST["conversion"] ?? "";

        if ($amount == 0 || $rate == 0) {
            $error = "Fill all the field please !";
        }


        if ($amount < 0 || $rate < 0) {
            $error = "Fill all the field with positive number please !";
        }

        if ($error == null) {
            $result = round(conversion($amount, $rate, $conversion), 2);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="../index.php">Retour</a></p>
    <h1>Calculatrice</h1>
    <form action="" method="post">
        <input type="number" name="amount" value="<?= $amount?>" step="any" placeholder="Amount">
        <input type="number" name="rate" value="<?= $rate?>" step="any" placeholder="Rate">
        <select name="conversion">
            <option value="USD to CDF" <?= $operateur === 'USD to CDF' ? 'selected' : '' ?>>USD to CDF</option>
            <option value="CDF to USD" <?= $operateur === 'CDF to USD' ? 'selected' : '' ?>>CDF to USD</option>
        </select>
        <?php if (isset($result)) {
            echo $result;
        }?>
        <button type="submit">Convert</button>
    </form>
    <?php if ($error != null) : ?>
        <div style="color: red;"><?= $error ?></>
    <?php endif; ?>
</body>
</html>