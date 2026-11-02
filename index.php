<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Analiza liczb 1-100</title>
<style>
    body { font-family: Arial, sans-serif; max-width: 700px; margin: 20px auto; padding: 0 10px; }
    div { background: #eee; padding: 6px; margin-bottom: 6px; }
    hr { margin: 16px 0; }
</style>
</head>
<body>

<h1>Analiza liczb od 1 do 100</h1>

<h2>Lista liczb</h2>
<div><?php
$sumaWszystkich = 0;
$sumaParzystych = 0;
$sumaNieparzystych = 0;
$ilePodzielnychPrzez3 = 0;

for ($i = 1; $i <= 100; $i++) {
    echo $i . " - ";

    if ($i % 2 == 0) {
        echo "parzysta";
        $sumaParzystych += $i;
    } else {
        echo "nieparzysta";
        $sumaNieparzystych += $i;
    }

    if ($i % 3 == 0) {
        echo ", podzielna przez 3";
        $ilePodzielnychPrzez3++;
    }

    $sumaWszystkich += $i;
    echo "<br>";
}
?></div>
<hr>

<h2>Podsumowanie</h2>
<div>
    Suma wszystkich liczb: <?= $sumaWszystkich ?><br>
    Suma liczb parzystych: <?= $sumaParzystych ?><br>
    Suma liczb nieparzystych: <?= $sumaNieparzystych ?><br>
    Liczb podzielnych przez 3: <?= $ilePodzielnychPrzez3 ?>
</div>

</body>
</html>