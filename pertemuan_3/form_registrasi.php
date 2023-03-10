<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <h4 style="text-align: center;">Form Registrasi Data Science</h4>
    <div class="container">
    <form method="POST" action="form_registrasi.php">
    <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
    </div>
</div>
    <div class="form-group row">
    <label for="" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="name" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">jenis kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki- laki"> 
        <label for="jk_0" class="custom-control-label">Laki- Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="Program studi" name="studi" class="custom-select">
        <option value="TI">Teknik Informatika</option>
        <option value="BD">Bisnis Digital</option>
        <option value="SI">Sistem Informasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="skill[]_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="boostrap"> 
        <label for="skill[]_3" class="custom-control-label">Boostrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="phyton"> 
        <label for="skill[]_5" class="custom-control-label">Phyton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</body>
</html>

<?php
//ambil data yang di input user berdasarkan unik namenya
//fungsi isset() di gunakan untuk memeriksa apakah suatu variable sudah di isi & sudah di atur atau belum
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $studi = $_POST['studi'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];

    $nilai = 0;

    foreach($skill as $data){
        switch ($data){
            case'html' :
                $nilai += 10;
                break;
            case'css' :
                $nilai += 10;
                break;
            case'js' :
                $nilai += 20;
                break;
            case'boostrap' :
                $nilai += 20;
                break;
            case'php' :
                $nilai += 30;
                break;
            case'phyton' :
                $nilai += 30;
                break;
            case'java' :
                $nilai += 0;
                break;
        }
    }
    function predikat($nilai){
        {
            if($nilai >=100 && $nilai <=150){
                return "sangat baik";
            }
            elseif($nilai >=60 && $nilai <=100){
                return"baik";
            }
            elseif($nilai >=40 && $nilai <=60){
                return"cukup";
            }
            elseif($nilai >=0 && $nilai <=40){
                return"kurang";
            }
            elseif($nilai = 0){
                return"tidak memadai";
            }
        }
    }
    $predikat = predikat($nilai);
}
?>

<?php
// cetak hasil input user
echo"<h4>infomasi yang anda kirim: </h4>";
echo "<br/>email : $email";
echo"<br/>Nama : $nama";
echo"<br/>NIM  : $nim";
echo"<br/>jenis kelamin : $jk";
echo"<br/> Program studi : $studi";
echo"<br/> skill : ";
foreach($skill as $data){
    echo $data;
}
echo "<br/> skor Skill : $nilai";
echo $predikat;
?>