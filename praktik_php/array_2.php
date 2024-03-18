<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tampilan Dosen</title>
        <link rel="stylesheet" href="prak2Style.css">
    </head>
    <body>
        <?php
            $Dosen=[
                'nama'=>'Elok Nur Hamdana',
                'domisili'=>'Malang',
                'jenis_kelamin'=>'Perempuan'
            ];
        ?>
        <table>
            <tr>
                <th>Informasi Dosen</th>
                <th>Detail</th>
            </tr>
            <?php foreach ($Dosen as $key => $value): ?>
                <tr>
                    <td><?php echo ucfirst(str_replace('_', ' ', $key)); ?></td>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
