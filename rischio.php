<?php
$rischio = 0;
$g = 0;
$p = 0;

// Recupero dati dal form (GET!)
$gravita = $_GET['gravita'] ?? null;
$probabilita = $_GET['probabilita'] ?? null;

switch($gravita) {
    case "g1":
        $g = 1;
        break;
    case "g2":
        $g = 2;
        break;
    case "g3":
        $g = 3;
        break;
    case "g4":
        $g = 4;
        break;
}

switch($probabilita) {
    case "p1":
        $p = 1;
        break;
    case "p2":
        $p = 2;
        break;
    case "p3":
        $p = 3;
        break;
    case "p4":
        $p = 4;
        break;
}

$rischio = $g * $p;

echo "Valore del rischio: ".$rischio."<br><br>";
echo "<img src='matrice del rischio.jpg'>";
?>