<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h3>Mahasiswa</h3>
    <table border="1">
        <thead>
            <tr align='center'>
                <th width='40'>No</th>
                <th width='200'>NIM</th>
                <th width='200'>Nama</th>
                <th width='200'>Gender</th>
                <th width='200'>IPK</th>
                <th width='200'>Action</th>
                <!-- <th width='200'>Predikat</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($mahasiswa as $mhs) {
            ?>
            <tr align='center'>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mhs -> nim ?></td>
                <td><?php echo $mhs -> nama ?></td>
                <td><?php echo $mhs -> gender ?></td>
                <td><?php echo $mhs -> ipk ?> </td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id") ?>">Detail; </a>
                </td>
                <!-- <td><//?php echo $mhs -> predikat() ?></td> -->
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>