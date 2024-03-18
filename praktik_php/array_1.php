<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h2>
            Array Terindeks Cuy
        </h2>
        <?php
            $listDosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
            $jumlahDosen = count($listDosen);
            for ($i = 0; $i < $jumlahDosen; $i++) {
                echo $listDosen[$i]."<br>";
            }
        ?>
    </body>
</html>
