<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3> Detail Mahasiswa</h3>
    <table border="1">
        <thead>
            <tr align='center'>
                <th width='40'>id</th>
                <th width='200'>NIM</th>
                <th width='200'>Nama</th>
                <th width='200'>Gender</th>
                <th width='200'>Tempat Lahir</th>
                <th width='200'>Tanggal Lahir</th>
                <th width='200'>IPK</th>
                <!-- <th width='200'>Action</th> -->
                <!-- <th width='200'>Predikat</th> -->
            </tr>
        </thead>
        <tbody>
            <!-- //<?php
            //$nomor =1;
            //foreach ($mahasiswa as $mhs) {
            // ?> -->
            <tr align='center'>
                <td><?php echo $siswa -> id ?></td>
                <td><?php echo $siswa -> nim ?></td>
                <td><?php echo $siswa -> nama ?></td>
                <td><?php echo $siswa -> gender ?></td>
                <td><?php echo $siswa -> tmp_lahir ?></td>
                <td><?php echo $siswa -> tgl_lahir ?></td>
                <td><?php echo $siswa -> ipk ?> </td>
                <!-- <td>
                    <a href="">Detail; </a>
                </td> -->
                <!-- <td><//?php echo $mhs -> predikat() ?></td> -->
            </tr>
            <!-- <?php
            //$nomor++;
            //}
            ?> -->
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$siswa->id?>.jpeg" widht="300"/>
                    <div class="mt-4">
                        <h4><?=$siswa->nama?></h4>
                        <p>Foto Mahasiswa</p>
                        <?php echo $error;?>
                        <br/><br/>
                        <a href="https://www.instagram.com/milalstarii/" target="_blank"><button class ="btn btn-outline-info">Instagram</button></a>
                        <br/><br/>
                        <?php echo form_open_multipart('mahasiswa/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="idmahasiswa" value="<?=$siswa->id?>"/>
                        <br/><br/>
                        <input type="submit" value="Upload Foto" class="bts btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>