<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>FORMULIR PESERTA DIDIK</title>
    <style>

        .warning {color: #FF0000;}
 

    </style>
    </head>
    <body>
    <?php 
        $error_nik ="";
        $error_jp ="";
        $error_noujian="";
        $error_paud="";
        $error_tk="";
        $error_noskhun="";
        $error_hobi="";
        $error_nama="";
        $error_jk="";
        $error_nisn="";
        $error_tempatlahir="";
        $error_tanggallahir="";
        $error_agama="";

        $nik="";
        $jp="";
        $noujian="";
        $paud="";
        $tk="";
        $noskhun="";
        $hobi="";
        $nama="";
        $jk="";
        $nisn="";
        $tempatlahir="";
        $tanggallahir="";
        $agama="";

        ?>
        <div class="row">
        <div class="col-md-11">
        <div class="card">
          <div class="card-header">
           <label> DATA PRIBADI</label>
          </div>
          <div class="card-body">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
          <div class="form-group row">
              <label for="nik" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-10">
                  <input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : "");?>" 
                  id="nik" placeholder="NIK" requiredvalue="<?php echo $nik; ?>">
      <span class="warning" ><?php echo $error_nik; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="jp" class="col-sm-2 col-form-label "> Jenis Pendaftaran      </label>
    <div class="col-sm-10">
    <input type="radio" name="jp" value="Siswa Baru">Siswa Baru</label>
      <input type="radio" name="jp" value="Pindahan">Pindahan</label> 
      <span class="warning" ><?php echo $error_jp; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="noujian" class="col-sm-2 col-form-label ">Nomor Peserta Ujian</label>
    <div class="col-sm-10">
      <input type="text" name="noujian" class="form-control <?php echo($error_noujian !="" ? "is-invalid" : "");?>" 
      id="noujian" placeholder="Nomor ujian" value="<?php echo $noujian; ?>">
      <span class="warning" ><?php echo $error_noujian; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="paud" class="col-sm-2 col-form-label "> Apakah Pernah PAUD?</label>
    <div class="col-sm-10">
    <input type="radio" name="paud" value="Ya">Ya</label>
      <input type="radio" name="paud" value="Tidak">Tidak</label> 
      <span class="warning" ><?php echo $error_paud; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tk" class="col-sm-2 col-form-label "> Apakah Pernah TK?</label>
    <div class="col-sm-10">
    <input type="radio" name="tk" value="Ya">Ya</label>
      <input type="radio" name="tk" value="Tidak">Tidak</label> 
      <span class="warning" ><?php echo $error_tk; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="noskhun" class="col-sm-2 col-form-label ">No.Seri SKHUN Sebelumnya</label>
    <div class="col-sm-10">
      <input type="text" name="noskhun" class="form-control <?php echo($error_noskhun !="" ? "is-invalid" : "");?>" 
      id="noskhun" placeholder="No.Seri SKHUN Sebelumnya" value="<?php echo $noskhun; ?>">
      <span class="warning" ><?php echo $error_noskhun; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
    <div class="col-sm-10">
    <select name="hobi">
            <option value="Olahraga"> Olahraga </option>
            <option value="Kesenian"> Kesenian</option>
            <option value="Membaca"> Membaca</option>
            <option value="Menulis"> Menulis </option>
            <option value="Traveling"> Traveling </option>
            </select>
      <span class="warning" ><?php echo $error_hobi; ?></span>
    </div>
  </div>
  
  <div class="form-group row">
  <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : "");?>" 
      id="nama" placeholder="Nama Lengkap" requiredvalue="<?php echo $nama; ?>">
      <span class="warning" ><?php echo $error_nama; ?></span>
    </div>
  </div> 

  <div class="form-group row">
  <label for="jk" class="col-sm-2 col-form-label ">Jenis Kelamin</label>
    <div class="col-sm-10">
    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki</label> 
      <input type="radio" name="jk" value="Perempuan">Perempuan</label> 
      <span class="warning" ><?php echo $error_jk; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="nisn" class="col-sm-2 col-form-label ">NISN</label>
    <div class="col-sm-10">
      <input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : "");?>" 
      id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>">
      <span class="warning" ><?php echo $error_nisn; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tempatlahir" class="col-sm-2 col-form-label ">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" name="tempatlahir" class="form-control <?php echo($error_tempatlahir !="" ? "is-invalid" : "");?>" 
      id="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $tempatlahir; ?>">
      <span class="warning" ><?php echo $error_tempatlahir; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tanggallahir" class="col-sm-2 col-form-label ">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" name="tanggallahir" class="form-control <?php echo($error_tanggallahir !="" ? "is-invalid" : "");?>" 
      id="tanggallahir" placeholder="Tanggal Lahir" value="<?php echo $tanggallahir; ?>">
      <span class="warning" ><?php echo $error_tanggallahir; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
    <div class="col-sm-10">
    <select name="agama">
            <option value="Islam"> Islam </option>
            <option value="Kristen"> Kristen/Protestan</option>
            <option value="Katholik"> Katholik</option>
            <option value="Hindu"> Hindu </option>
            <option value="Budha"> Budha </option>
            <option value="Khong Hu Chu"> Khong Hu Chu </option>
            <option value="Lainnya"> Lainnya </option>
            </select>
      <span class="warning" ><?php echo $error_agama; ?></span>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
     <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

  
  </form>
        </div> 
      </div>
    </div>
  </div>

  <?php 
  include("koneksidata.php");
  if(isset($_POST['Submit'])) {
    $nik = $_POST['nik'];
    $jp = $_POST['jp'];
    $noujian = $_POST['noujian'];
    $paud = $_POST['paud'];
    $tk = $_POST['tk'];
    $noskhun = $_POST['noskhun'];
    $hobi = $_POST['hobi'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $nisn = $_POST['nisn'];
    $tempatlahir= $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $agama= $_POST['agama'];

    
    $sql = "INSERT INTO tb_pesdik (nik,jp,noujian,paud,tk,noskhun,hobi,nama,jk,nisn,tempatlahir,tanggallahir,agama) 
    VALUES 
    ('$nik','$jp','$noujian','$paud','$tk','$noskhun','$hobi','$nama','$jk','$nisn','$tempatlahir','$tanggallahir','$agama')";
    $tb_pesdik= mysqli_query($koneksi, $sql);

    if ($tb_pesdik) {
        echo "Tambah data berhasil";
        exit;
      }
  else {
    echo "Gagal";
    exit;
  }
}
?>

</body>
</html>
   

