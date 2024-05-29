<?php

function calculate_total_salary(int $hourly_wage, int $hours_worked, int $weekend_hours, int $normal_hours_per_week): float {
    $overtime_hours = $hours_worked - $normal_hours_per_week;
    $weekday_overtime_hours = $overtime_hours - $weekend_hours;
    $overtime_hours_at_130 = min($weekday_overtime_hours, 6);
    $overtime_hours_at_150 = max($weekday_overtime_hours - 6, 0);
    $overtime_hours_at_200 = $weekend_hours;

    $normal_salary = $hourly_wage * $normal_hours_per_week;
    $salary_overtime_at_130 = $hourly_wage * 1.3 * $overtime_hours_at_130;
    $salary_overtime_at_150 = $hourly_wage * 1.5 * $overtime_hours_at_150;
    $salary_overtime_at_200 = $hourly_wage * 2 * $overtime_hours_at_200;

    $total_salary = $normal_salary + $salary_overtime_at_130 + $salary_overtime_at_150 + $salary_overtime_at_200;

    return $total_salary;
}

$error = null;
$hourly_wage = isset($_POST['hourly_wage']) ? $_POST['hourly_wage'] : 25;
$hours_worked = isset($_POST['hours_worked']) ? $_POST['hours_worked'] : 70;
$weekend_hours = isset($_POST['weekend_hours']) ? $_POST['weekend_hours'] : 2;
$normal_hours_per_week = isset($_POST['normal_hours_per_week']) ? $_POST['normal_hours_per_week'] : 40;

if ($hourly_wage <= 0 || $hours_worked < 0 || $weekend_hours < 0 || $normal_hours_per_week < 40) {
    $error = "Entrez des valeurs correcte svp.";
}

if ($error == null) {
    $total_salary = calculate_total_salary($hourly_wage, $hours_worked, $weekend_hours, $normal_hours_per_week);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
</head>
<body>
    <h1>Salaire</h1>
    <form action="" method="post">
        <input type="number" name="hourly_wage" value="<?= $hourly_wage?>" placeholder="Salaire par heure"><br><br>
        <input type="number" name="hours_worked" value="<?= $hours_worked?>" placeholder="Heures prestees"><br><br>
        <input type="number" name="weekend_hours" value="<?= $weekend_hours?>" placeholder="Heures de Weekend"><br><br>
        <input type="number" name="normal_hours_per_week" value="<?= $normal_hours_per_week?>" placeholder="Heures Normal par semaine"><br><br>
        <button type="submit">Calculer</button>
    </form>
    <hr>
    <?php if (isset($total_salary) && $total_salary != 0) : ?>
        <p>Salaire par heure : <?= $hourly_wage ?> $</p>
        <p>Heures prestees : <?= $hours_worked ?> h</p>
        <p>Heures de Weekend : <?= $weekend_hours ?> h</p>
        <p>Heures Normal par semaine : <?= $normal_hours_per_week ?> h</p>
        <p>Salaire total : <?= $total_salary ?> $</p>
    <?php else : ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
</body>
</html>