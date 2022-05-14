<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <h3> Detail Dosen</h3>
    <table border="1">
        <thead>
            <tr align='center'>
                <th width='40'>ID</th>
                <th width='200'>Nama</th>
                <th width='200'>Gender</th>
                <th width='200'>Tempat Lahir</th>
                <th width='200'>Tanggal Lahir</th>
                <th width='200'>NIDN</th>
                <th width='200'>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr align='center'>
                <td><?php echo $dos -> id ?></td>
                <td><?php echo $dos -> nama ?></td>
                <td><?php echo $dos -> gender ?></td>
                <td><?php echo $dos -> tmp_lahir ?></td>
                <td><?php echo $dos -> tgl_lahir ?></td>
                <td><?php echo $dos -> nidn ?> </td>
                <td><?php echo $dos -> pendidikan ?> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>