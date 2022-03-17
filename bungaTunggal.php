<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunga Tunggal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #F0EBD6;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-size: 38px;"><strong>MATEMATIKA</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="kalkulator.php">Kalkulator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="diskon.php">Diskon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pajak.php">Pajak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Bunga Tunggal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 style="color: #9BBA74;"><strong> Menghitung Bunga Tunggal </strong></h1>
    <div class="index">
        <form action="" method="POST">
            <div class="card" style="width: 25rem; margin-left: 485px;">
                <div class="card-body">
                    <input type="number" name="modal" class="form-control mt-3" autocomplete="off" placeholder="Masukkan modal awal">
                    <input type="number" name="persen" class="form-control mt-3" autocomplete="off" placeholder="Masukkan persentase bunga">
                    <input type="number" name="waktu" class="form-control mt-3" autocomplete="off" placeholder="Masukkan waktu">
                    <input type="submit" name="hitung" value="Hitung" class="btn btn-success mt-3">
        </form>
        <br>
        <?php
        if (isset($_POST['hitung'])) {
            $modal = @$_POST['modal'];
            $persen = @$_POST['persen'];
            $waktu = @$_POST['waktu'];
            $bunga = $modal * $persen / 100 * $waktu;
            echo "Besar bunganya adalah Rp " . $bunga;
            echo "<br>";
            echo "Besar modal akhirnya adalah Rp " . $modal + $bunga;
        }
        ?>
    </div>
    </div>
    </div>

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