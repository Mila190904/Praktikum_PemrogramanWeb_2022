<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Edit Dosen</h1>
<!-- akan open ke method save -->
<?php echo form_open("dosen/save"); ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Silahkan Masukkan Nama" type="text" value="<?=$obj_dosen->nama?>" class="form-control"  spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <input id="gender" name="gender" placeholder="Silahkan Masukkan Jenis Kelamin anda" value="<?=$obj_dosen->gender?>" type="text" value="<?=$obj_dosen->nama?>" class="form-control"  spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" value="<?=$obj_dosen->tmp_lahir?>" placeholder="Silahkan Masukkan Tempat Lahir" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="text" value="<?=$obj_dosen->tgl_lahir?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nidn" class="col-4 col-form-label">NIDN</label> 
    <div class="col-8">
      <input id="nidn" name="nidn" value="<?=$obj_dosen->nidn?>" placeholder="Silahkan Masukkan NIDN" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="pendidikan" class="col-4 col-form-label">Pendidikan</label> 
    <div class="col-8">
      <input id="pendidikan" name="pendidikan" value="<?=$obj_dosen->pendidikan?>" placeholder="Silahkan Masukkan Pendidikan" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
    </div>
  </div>
<?php echo form_close()?>
</div>