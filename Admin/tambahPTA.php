<?php

require 'function.php';


?>

<!DOCTYPE html>
<html>
<head>
  <title>Perpanjangan TA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styleTA.css">
</head>
<body>
  <header>
    <img src="Assets/Untar_logo_gif.gif" alt="Header Image" class="headerimg">
  </header>
  <div class="alert alert-warning" role="alert">
    Mohon untuk tidak menutup tab agar Isi yang anda masukkan tidak hilang!
  </div>
  <div class="center-box1">
    <div class="container1">
      <h1>Permohonan Perpanjangan Waktu Penyelesaian TA</h1>
      <!-- <h4>Semester Genap 2022/2023</h4> -->
    </div>
    <div class="center-box">
      <form id="myForm" action="" method="post">
      <br>
      <div class="container">
            <div class="form-group">
              <label for="formGroupExampleInput">Nama Mahasiswa - lengkap, sesuai KSM</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="nama" value="<?php echo (isset($_POST['nama']) ? 
              $_POST['nama'] : ''); ?>" placeholder="Masukkan Nama Lengkap KSM mu" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">NIM - lengkap, sesuai KSM</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="nim" value="<?php echo (isset($_POST['nim']) ? $_POST['nim'] : ''); ?>" placeholder="Masukkan NIM Lengkap KSM mu" required>
            </div>
      </div>
      <br>
      <div class="container">
            <div class="form-group">
              <label for="formGroupExampleInput">Nomor Handphone Aktif</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="nomor_hp" value="<?php echo (isset($_POST['nomor_hp']) ? $_POST['nomor_hp'] : ''); ?>" placeholder="Masukkan Nomor HP mu" required>
            </div>
      </div>
      <br>
      <div class="container">
        <div class="form-group">
          <label for="exampleInputEmail1">Email - @stu.untar.ac.id</label>
          <input type="email" class="form-control" id="Email" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : ''); ?>" placeholder="Masukkan email UNTAR mu" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
      </div>
      <br>
      <div class="container">
            <div class="form-group">
              <label for="formGroupExampleInput">Judul Tugas Akhir</label>
              <input type="text" class="form-control" id="Akhir" name="judul_ta" value="<?php echo (isset($_POST['judul_ta']) ? $_POST['judul_ta'] : ''); ?>" placeholder="Masukkan Judul Tugas Akhir mu" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Nama Pembimbing - nama, tanpa gelar</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_pembimbing" value="<?php echo (isset($_POST['nama_pembimbing']) ? $_POST['nama_pembimbing'] : ''); ?>" placeholder="Masukkan Nama Pembimbing tanpa gelar" required>
            </div>
      </div>
      <br>
      <div class="container">
            <div class="form-group">
              <label for="exampleFormControlFile1">Silahkan Unggah KSM (format .jpg)</label>
              <input type="text" class="form-control-file" name="ksm" value="<?php echo (isset($_POST['ksm']) ? $_POST['ksm'] : ''); ?>" id="exampleFormControlFile1" required>
            </div>
      </div>
      <br>
      <div class="container">
            <div class="form-group">
              <label for="exampleFormControlFile1">Silakan mengunggah logbook bimbingan TA - pdf, cetak dari akun Lintar
              </label>
              <input type="text" class="form-control-file" name="logbook" value="<?php echo (isset($_POST['logbook']) ? $_POST['logbook'] : ''); ?>" id="exampleFormControlFile1" required>
            </div>
      </div>
      <br>
      <div class="container">
            <div class="form-group">
              <label for="exampleFormControlFile1">Silakan mengunggah Formulir Permohonan Perpanjangan Waktu Penyelesaian TA <br>- pdf, ditandatangani mahasiswa dan Pembimbing 
              </label>
              <input type="text" class="form-control-file" name="formulir_perpanjangan" value="<?php echo (isset($_POST['formulir_perpanjangan']) ? $_POST['formulir_perpanjangan'] : ''); ?>" id="exampleFormControlFile1" required>
            </div>
      </div>
      <br>
      <div class="container">
        <div>
          <label for="formGroupExampleInput">Dengan mengisi formulir ini saya memahami aturan Ujian TA yang berlaku di FK Untar.
            <br> Masa perpanjangan waktu yang diberikan adalah 1 (satu) semester sejak permohonan ini diajukan.
          </label>
          </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
          <label class="form-check-label" for="defaultCheck1">
            Ya, saya mengerti
          </label>
        </div>
      </div>
      <br>
      <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
      <br>
      <br>
      <br>
    </form>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script type="text/javascript" src="js/Notification.js"></script> -->
</body>
</html>

<?php

if(isset($_POST["submit"])){
  if(tambahPTA($_POST) > 0){
    echo "<script>
      if (!inputEmail.value.endsWith(email)) {
        Swal.fire({
          icon: 'error',
          title: 'Berhasil',
          text: 'Data telah disimpan!',
        });
      };
    </script>
    ";
  } else{
    echo "<script>
      if (!inputEmail.value.endsWith(email)) {
        Swal.fire({
          icon: 'success',
          title: 'Berhasil',
          text: 'Data telah disimpan!',
        });
      };
    </script>
    ";
  }
}

?> 