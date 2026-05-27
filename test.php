<?php
$mesaj = "Ziua 3: Verificarea numerelor pare și impare folosind if și for.";

$numere = [12, 4, 7, 19, 22, 31, 8, 15, 40, 10];

$pare = 0;
$impare = 0;
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Ziua 3 PHP</title>
</head>
<body>

<h2><?php echo $mesaj; ?></h2>

<p>Șirul de numere este: <?php echo implode(", ", $numere); ?></p>

<ul>
<?php
for ($i = 0; $i < count($numere); $i++) {
    if ($numere[$i] % 2 == 0) {
        $pare++;
    } else {
        $impare++;
    }
}
?>
</ul>

<h3>Rezultat final:</h3>
<p>Numere pare: <?php echo $pare; ?></p>
<p>Numere impare: <?php echo $impare; ?></p>

</body>
</html>