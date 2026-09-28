<?php
function suma($a, $b)
{
    echo "Suma: " . ($a + $b);
}


function podstawy($a, $b)
{
    echo "Różnica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";

    if ($b != 0) {
        echo "Iloraz: " . ($a / $b);
    } else {
        echo "Nie można dzielić przez 0";
    }
}


function kalkulator($a, $b, $dzialanie)
{
    if ($dzialanie == "+") {
        $wynik = $a + $b;
    }

    if ($dzialanie == "-") {
        $wynik = $a - $b;
    }

    if ($dzialanie == "*") {
        $wynik = $a * $b;
    }

    if ($dzialanie == "/") {
        if ($b != 0) {
            $wynik = $a / $b;
        } else {
            $wynik = "Nie można dzielić przez 0";
        }
    }

    echo "<div id='wynik'>$wynik</div>";
}


function maks($a, $b, $c)
{
    $najwieksza = $a;

    if ($b > $najwieksza) {
        $najwieksza = $b;
    }

    if ($c > $najwieksza) {
        $najwieksza = $c;
    }

    echo "Największa liczba: " . $najwieksza;
}

function wzrost($wzrost)
{
    if ($wzrost < 150) {
        echo "Niski";
    } elseif ($wzrost > 180) {
        echo "Wysoki";
    } else {
        echo "Średni";
    }
}

function BMI($wzrost, $waga)
{
    $wzrost = $wzrost / 100;

    $bmi = $waga / ($wzrost * $wzrost);

    echo "<div id='wynik'>";
    echo "BMI: " . round($bmi, 2) . "<br>";

    if ($bmi < 18.5) {
        echo "Za mało!";
    } elseif ($bmi > 25) {
        echo "Za dużo!";
    } else {
        echo "OK!";
    }

    echo "</div>";
}


function starszy($data1, $data2)
{
    if ($data1 < $data2) {
        echo "Osoba 1 jest starsza";
    } elseif ($data2 < $data1) {
        echo "Osoba 2 jest starsza";
    } else {
        echo "Osoby są w tym samym wieku";
    }
}


function przestepny($rok)
{
    if ($rok % 400 == 0) {
        echo "Rok $rok jest przestępny";
    } elseif ($rok % 100 == 0) {
        echo "Rok $rok nie jest przestępny";
    } elseif ($rok % 4 == 0) {
        echo "Rok $rok jest przestępny";
    } else {
        echo "Rok $rok nie jest przestępny";
    }
}


function sila($haslo)
{
    $silne = true;

    if (strlen($haslo) <= 4) {
        $silne = false;
    }

    if (!preg_match("/[0-9]/", $haslo)) {
        $silne = false;
    }

    if (!preg_match("/[A-Z]/", $haslo)) {
        $silne = false;
    }

    if (!preg_match("/[a-z]/", $haslo)) {
        $silne = false;
    }

    if (!preg_match("/[^a-zA-Z0-9]/", $haslo)) {
        $silne = false;
    }

    if ($silne == true) {
        echo "Hasło mocne";
    } elseif (strlen($haslo) <= 8) {
        echo "Hasło średnie";
    } else {
        echo "Hasło słabe";
    }
}

function trojkat($a, $b, $c)
{
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Można utworzyć trójkąt";
    } else {
        echo "Nie można utworzyć trójkąta";
    }
}


function szyfr($tekst)
{
    $wynik = "";

    for ($i = 0; $i < strlen($tekst); $i++) {

        $znak = $tekst[$i];

        if ($znak == 'a') {
            $wynik .= 'c';
        } elseif ($znak == 'b') {
            $wynik .= 'd';
        } elseif ($znak == 'c') {
            $wynik .= 'e';
        } elseif ($znak == 'd') {
            $wynik .= 'f';
        } elseif ($znak == 'e') {
            $wynik .= 'g';
        } elseif ($znak == 'f') {
            $wynik .= 'h';
        } elseif ($znak == 'g') {
            $wynik .= 'i';
        } elseif ($znak == 'h') {
            $wynik .= 'j';
        } elseif ($znak == 'i') {
            $wynik .= 'k';
        } elseif ($znak == 'j') {
            $wynik .= 'l';
        } elseif ($znak == 'k') {
            $wynik .= 'm';
        } elseif ($znak == 'l') {
            $wynik .= 'n';
        } elseif ($znak == 'm') {
            $wynik .= 'o';
        } elseif ($znak == 'n') {
            $wynik .= 'p';
        } elseif ($znak == 'o') {
            $wynik .= 'q';
        } elseif ($znak == 'p') {
            $wynik .= 'r';
        } elseif ($znak == 'q') {
            $wynik .= 's';
        } elseif ($znak == 'r') {
            $wynik .= 't';
        } elseif ($znak == 's') {
            $wynik .= 'u';
        } elseif ($znak == 't') {
            $wynik .= 'v';
        } elseif ($znak == 'u') {
            $wynik .= 'w';
        } elseif ($znak == 'v') {
            $wynik .= 'x';
        } elseif ($znak == 'w') {
            $wynik .= 'y';
        } elseif ($znak == 'x') {
            $wynik .= 'z';
        } elseif ($znak == 'y') {
            $wynik .= 'a';
        } elseif ($znak == 'z') {
            $wynik .= 'b';
        } else {
            $wynik .= $znak;
        }
    }

    echo $wynik;
}

?>
