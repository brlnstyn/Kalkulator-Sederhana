<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator</title>
</head>

<body>
    <h1><strong>Kalkulator Sederhana</strong></h1>
    <?php
    $b1 = [1, 2, 3, '+', 4, 5, 6, '-', 7, 8, 9, '*', 0, '.', '/', '='];
    $bc = ['C'];
    $tombol = '';
    if (isset($_POST['tombol']) && in_array($_POST['tombol'], $b1)) {
        $tombol = $_POST['tombol'];
    }
    $hitungan = '';
    if (isset($_POST['hitungan']) && preg_match('~^(?:[\d.]+[* /+-]?)+$~', $_POST['hitungan'], $out)) {
        $hitungan = $out[0];
    }
    $tampilan = $hitungan . $tombol;

    if ($tombol == 'C') {
        $tampilan = '';
    } elseif ($tombol == '=' && preg_match('~^\d*\.?\d+(?:[*/+-]\d*\.?\d+)*$~', $hitungan)) {
        $tampilan .= eval("return $hitungan;");
    }
    echo "<div class='index'>";
    echo "<form method='POST'>";
    echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<input class='form-control inpt' type='text' name='hitungan' value='$tampilan' placeholder='0' autocomplete='off'";
    echo "<div class='card-number'>";

    foreach (array_chunk($b1, 4) as $chunk) {

        foreach ($chunk as $button) {
            echo "<button ", (sizeof($chunk) != 4 ? " " : ""), " name='tombol' value='$button' class='btn btn-info butn'>$button</button>";
        }
    }

    foreach ($bc as $clear) {
        echo "<button name='tombol' value='$clear' class='btn btn-danger butn-clear'>$clear</button>";
    }

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</form>";
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>