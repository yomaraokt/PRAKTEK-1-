<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
        body{
            background-color:orange;
            font-family: Verdana, sans-serif;
        }
        .row  {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
        .btn-primary{
            background-color:orange;
            border:none;
            font-weight:bold;
        }
        .btn-primary:hover{
            background-color:#343a40;
        }
        .bg{
            background-color:#0d6efd;
        }
    </style>
</head>

<body>
    <?php
    //Variabel Error Data Peserta Didik
    $error_jenpen = ""; // Jenis Pendaftar
    $error_tglmsk = ""; // Tanggal Masuk Sekolah
    $error_nis = ""; // Nomor Induk Siswa
    $error_npu = ""; // Nomor Peserta Ujian
    $error_pilihan_paud = ""; // Pilihan Ya/Tidak
    $error_pilihan_tk =  ""; // Pilihan Ya/Tidak
    $error_skhun = ""; // NOMOR Seri SKHUN Sebelumnya
    $error_ijazah = ""; // Nomor Seri ijazah sebelumnya
    $error_hobi = ""; // Hobi 
    $error_cita2 = ""; // Cita-cita

    //Variabel Error Data Pribadi
    $error_nama = ""; //Nama Pribadi
    $error_jenkel = ""; //Jenis Kelamin
    $error_nisn = ""; //NISN
    $error_nik = "";//NIK
    $error_tmpt_lahir = ""; //Tempat Lahir
    $error_tgl_lahir = "";//Tanggal Lahir
    $error_agama = "";//Agama
    $error_bk = ""; //Berkebutuhan Khusus
    $error_alamat = ""; //Alamat alamat
    $error_rt = ""; //RT
    $error_rw = ""; // RW
    $error_dusun = ""; //Nama Dusun
    $error_desa = ""; //Nama Desa
    $error_kecamatan = ""; //Nama Kecamatan
    $error_kodepos = ""; //Kode Pos
    $error_tmpt_tinggal = ""; //Tempat Tinggal
    $error_transportasi = ""; //Moda Transportasi
    $error_nohp = ""; //Nomor HP
    $error_notelp = ""; //Nomor Telepon
    $error_email = ""; //Email
    $error_kps = ""; //Penerima KPS
    $error_nokps = ""; //Nomor KPS
    $error_kwn = ""; //Kewarganegaraan

    
    //Variabel Data Peserta Didik
    $jenpen = "";
    $tglmsk = "";
    $nis = "";
    $npu = "";
    $pilihan_paud = "";
    $pilihan_tk = "";
    $skhun = "";
    $ijazah = "";
    $hobi = "";
    $cita2 = "";

    //Variabel Data Pribadi
    $nama = "";
    $jenkel  = "";
    $nisn = "";
    $nik = "";
    $tmpt_lahir = "";
    $tgl_lahir = "";
    $agama = "";
    $bk = "";
    $alamat = "";
    $rt = "";
    $rw = "";
    $dusun = "";
    $desa = "";
    $kecamatan = "";
    $kodepos = "";
    $tmpt_tinggal = "";
    $transportasi = "";
    $nohp = "";
    $notelp = "";
    $email = "";
    $kps = "";
    $nokps = "";
    $kwn = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // jenis pendaftaran Siswa baru/pindahan
        if (empty($_POST["jenpen"])) {
            $error_jenpen = "Jenis Pendaftaran tidak boleh kosong";
        } else {
            $jenpen = cek_input($_POST["jenpen"]);
        }

        // tanggal masuk sekolah
        if (empty($_POST["tglmsk"])) {
            $error_tglmsk = "Tanggal Masuk tidak boleh kosong";
        } else {
            $tglmsk = cek_input($_POST["tglmsk"]);
        }

        // NIS
        if (empty($_POST["nis"])) {
            $error_nis = "NIS tidak boleh kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "Nomor Induk Siswa hanya boleh angka";
            }
        }

        // Nomor Peserta Ujian
        if (empty($_POST["npu"])) {
            $error_npu = "Nomor Pesarta Ujian tidak boleh kosong";
        } else {
            $npu = cek_input($_POST["npu"]);
            if (!is_numeric($npu)) {
                $error_npu = "Nomor Peserta Ujian hanya boleh angka";
            }
        }

        if (empty($_POST["pilihan_paud"])) {
            $error_pilihan_paud = "tidak boleh kosong";
        } else {
            $pilihan_paud = cek_input($_POST["pilihan_paud"]);
        }

        if (empty($_POST["pilihan_tk"])) {
            $error_pilihan_tk = "tidak boleh kosong";
        } else {
            $pilihan_tk = cek_input($_POST["pilihan_tk"]);
        }

        if (empty($_POST["skhun"])) {
            $error_skhun = "No. Seri SKHUN tidak boleh kosong";
        } else {
            $skhun = cek_input($_POST["skhun"]);
            if (!is_numeric($skhun)) {
                $error_skhun = "No. Seri SKHUN hanya boleh angka";
            }
        }

        if (empty($_POST["ijazah"])) {
            $error_ijazah = "No. Seri Ijazah tidak boleh kosong";
        } else {
            $ijazah = cek_input($_POST["ijazah"]);
            if (!is_numeric($ijazah)) {
                $error_ijazah = "No. Seri Ijazah hanya boleh angka";
            }
        }

        if (empty($_POST["hobi"])) {
            $error_hobi = "Hobi tidak boleh kosong";
        } else {
            $hobi = cek_input($_POST["hobi"]);
        }

        if (empty($_POST["cita2"])) {
            $error_cita2 = "Cita-cita tidak boleh kosong";
        } else {
            $cita2 = cek_input($_POST["cita2"]);
        }

        if (empty($_POST["nama"])) {
            $error_nama = "Nama tidak boleh kososng";
        } else {
            $nama = cek_input($_POST["nama"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                $error_nama = "Inputan Hanya boleh hururf dan spasi";
            }
        }

        if (empty($_POST["jenkel"])) {
            $error_jenkel = "Jenis Kelamin tidak boleh kosong";
        } else {
            $jenkel = cek_input($_POST["jenkel"]);
        }

        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN tidak boleh kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN hanya boleh angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "NIK tidak boleh kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK hanya boleh angka";
            }
        }

        // tempat lahir
        if (empty($_POST["tmpt_lahir"])) {
            $error_tmpt_lahir = "Tempat lahir tidak boleh kosong";
        } else {
            $tmpt_lahir = cek_input($_POST["tmpt_lahir"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $tmpt_lahir)) {
                $error_tmpt_lahir = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        // tgl lahir
        if (empty($_POST["tgl_lahir"])) {
            $error_tgl_lahir = "Tanggal lahir tidak boleh kosong";
        } else {
            $tgl_lahir = cek_input($_POST["tgl_lahir"]);
        }

        // agama
        if (empty($_POST["agama"])) {
            $error_agama = "Agama tidak boleh kosong";
        } else {
            $agama = cek_input($_POST["agama"]);
        }

        // berkebutuhan khusus
        if (empty($_POST["bk"])) {
            $error_bk = "Pilihan ini tidak boleh kosong";
        } else {
            $bk = cek_input($_POST["bk"]);
        }

        // Alamat alamat
        if (empty($_POST["alamat"])) {
            $error_alamat = "Alamat alamat tidak boleh kosong";
        } else {
            $alamat = cek_input($_POST["alamat"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $alamat)) {
                $error_alamat = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        // RT
        if (empty($_POST["rt"])) {
            $error_rt = "RT tidak boleh kosong";
        } else {
            $rt = cek_input($_POST["rt"]);
            if (!is_numeric($rt)) {
                $error_rt = "RT hanya boleh angka";
            }
        }

        // RW
        if (empty($_POST["rw"])) {
            $error_rw = "RW tidak boleh kosong";
        } else {
            $rw = cek_input($_POST["rw"]);
            if (!is_numeric($rw)) {
                $error_rw = "RW hanya boleh angka";
            }
        }

        // Dusun
        if (empty($_POST["dusun"])) {
            $error_dusun = "Dusun tidak boleh kosong";
        } else {
            $dusun = cek_input($_POST["dusun"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $dusun)) {
                $error_dusun = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        //Kelurahan / Desa
        if (empty($_POST["desa"])) {
            $error_desa = "Kelurahan / Desa tidak boleh kosong";
        } else {
            $desa = cek_input($_POST["desa"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $desa)) {
                $error_desa = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        // Kecamatan
        if (empty($_POST["kecamatan"])) {
            $error_kecamatan = "Kecamatan tidak boleh kosong";
        } else {
            $kecamatan = cek_input($_POST["kecamatan"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $kecamatan)) {
                $error_kecamatan = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        // Kodepos
        if (empty($_POST["kodepos"])) {
            $error_kodepos = "Kodepos tidak boleh kosong";
        } else {
            $kodepos = cek_input($_POST["kodepos"]);
            if (!is_numeric($kodepos)) {
                $error_kodepos = "Kodepos hanya boleh angka";
            }
        }

        // Tempat Tinggal
        if (empty($_POST["tmpt_tinggal"])) {
            $error_tmpt_tinggal = "Pilihan ini tidak boleh kosong";
        } else {
            $tmpt_tinggal = cek_input($_POST["tmpt_tinggal"]);
        }

        // Moda Transportasi
        if (empty($_POST["transportasi"])) {
            $error_transportasi = "Pilihan ini tidak boleh kosong";
        } else {
            $transportasi = cek_input($_POST["transportasi"]);
        }

        // No HP
        if (empty($_POST["nohp"])) {
            $error_nohp = "Nomor HP tidak boleh kosong";
        } else {
            $nohp = cek_input($_POST["nohp"]);
            if (!is_numeric($nohp)) {
                $error_nohp = "Nomor HP hanya boleh angka";
            }
        }

        // No Telp  
        if (empty($_POST["notelp"])) {
            $error_notelp = "Nomor Telp tidak boleh kosong";
        } else {
            $notelp = cek_input($_POST["notelp"]);
            if (!is_numeric($notelp)) {
                $error_notelp = "Nomor Telp hanya boleh angka";
            }
        }

        // email
        if (empty($_POST["email"])) {
            $error_email = "Email tidak boleh kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Salah";
            }
        }

        // Penerima KPS/PKH/KIP
        if (empty($_POST["kps"])) {
            $error_kps = "Pilihan ini tidak boleh kosong";
        } else {
            $kps = cek_input($_POST["kps"]);
        }

        // No KPS/KKS/PKH/KIP 
        if (empty($_POST["nokps"])) {
            $error_nokps = "Nomor KPS tidak boleh kosong";
        } else {
            $nokps = cek_input($_POST["nokps"]);
            if (!is_numeric($nokps)) {
                $error_nokps = "Nomor Telp hanya boleh angka";
            }
        }

        // Kewarganegaraan
        if (empty($_POST["kwn"])) {
            $error_kwn = "Kewarganegaraan tidak boleh kosong";
        } else {
            $kwn = cek_input($_POST["kwn"]);
            if (!preg_match("/^[a-z A-Z]*$/", $kwn)) {
                $error_kwn = "Inputan hanya boleh huruf dan spasi";
            }
        }

        // Cek Konektivitas
        $namaserver = "localhost";
        $username = "root";
        $password = "";
        $dbname = "data.siswa";
        try {
            $conn = mysqli_connect($namaserver, $username, $password, $dbname) or die("Koneksi gagal!");
            $sql = "INSERT INTO `data`
            (`jenpen`, `tglmsk`, `nis`, `npu`, `pilihan_paud`, `pilihan_tk`, `skhun`, `ijazah`, `hobi`, `cita2`, 
            `nama`, `jenkel`, `nisn`, `nik`, `tmpt_lahir`, `tgl_lahir`, `agama`, `bk`, `alamat`, `rt`, `rw`,
            `dusun`, `desa`, `kecamatan`, `kodepos`, `tmpt_tinggal`, `transportasi`, `nohp`, `notelp`, 
            `email`, `kps`, `nokps`, `kwn` ) 
            VALUES ('$jenpen','$tglmsk','$nis','$npu','$pilihan_paud','$pilihan_tk','$skhun','$ijazah','$hobi','$cita2',
            '$nama','$jenkel','$nisn','$nik','$tmpt_lahir','$tgl_lahir','$agama','$bk','$alamat','$rt','$rw', 
            '$dusun', '$desa', '$kecamatan', '$kodepos', '$tmpt_tinggal', '$transportasi', '$nohp', '$notelp',
            '$email', '$kps', '$nokps', '$kwn')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        } catch (Exception $e) {
            echo $e;
        }
    }

    function cek_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        return $data;
    }

    ?>

    <h1 align="center" style="color:white; margin: 50px 50px; font-weight:bolder;">FORMULIR PESERTA DIDIK</h1>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <form method="post">
                        <!-- REGISTRASI PESERTA DIDIK -->
                        <div class="p-3 mb-2 bg-dark text-white">REGISTRASI PESERTA DIDIK</div>

                        <!-- Jenis Daftar Radio Button -->
                        <div class="form-group row">
                            <label for="jenpen" class="col-sm-3 col-form-label">Jenis Daftar</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="baru" name="jenpen" class="custom-control-input" value="Siswa Baru">
                                    <label class="custom-control-label" for="baru">Siswa Baru</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="pindahan" name="jenpen" class="custom-control-input" value="Pindahan">
                                    <label class="custom-control-label" for="pindahan">Pindahan</label>
                                </div>
                                <span class="warning"><?php echo $error_jenpen; ?></span>
                            </div>

                        </div>

                        <!-- Tanggal Masuk -->
                        <div class="form-group row">
                            <label for="tglmsk" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
                            <div class="col-sm-5">
                                <input type="date" name="tglmsk" class="form-control" <?php echo ($error_tglmsk != "" ? "is-invalid" : ""); ?> id="tglmsk" value="<?php echo $tglmsk; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tglmsk; ?></span>
                        </div>

                        <!-- NIS -->
                        <div class="form-group row">
                            <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                            <div class="col-sm-5">
                                <input type="text" name="nis" class="form-control" <?php echo ($error_nis != "" ? "is-invalid" : ""); ?> id="nis" placeholder="Silahkan isi NIS" value="<?php echo $nis; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nis; ?></span>
                        </div>

                        <!-- Nomor Peserta -->
                        <div class="form-group row">
                            <label for="npu" class="col-sm-3 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-sm-5">
                                <input type="text" name="npu" class="form-control" <?php echo ($error_npu != "" ? "is-invalid" : ""); ?> id="npu" placeholder="Silahkan isi Nomor Peserta Ujian" value="<?php echo $npu; ?>">

                            </div>
                            <span class="warning"><?php echo $error_npu; ?></span>
                        </div>

                        <!-- PAUD -->
                        <div class="form-group row">
                            <label for="pilihan_paud" class="col-sm-3 col-form-label">Apakah pilihan PAUD</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <input type="radio" name="pilihan_paud" value="Ya"> Ya
                                &nbsp;&nbsp;
                                <input type="radio" name="pilihan_paud" value="Tidak"> Tidak
                                <br>
                            </div>
                            <span class="warning"><?php echo $error_pilihan_paud; ?></span>
                        </div>

                        <!-- TK -->
                        <div class="form-group row">
                            <label for="pilihan_tk" class="col-sm-3 col-form-label">Apakah pilihan TK</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <input type="radio" name="pilihan_tk" value="Ya"> Ya
                                &nbsp;&nbsp;
                                <input type="radio" name="pilihan_tk" value="Tidak"> Tidak
                                <br>
                            </div>
                            <span class="warning"><?php echo $error_pilihan_tk; ?></span>
                        </div>

                        <!-- SKHUN -->
                        <div class="form-group row">
                            <label for="skhun" class="col-sm-3 col-form-label">No. Seri SKHUN</label>
                            <div class="col-sm-5">
                                <input type="text" name="skhun" class="form-control" <?php echo ($error_skhun != "" ? "is-invalid" : ""); ?> id="skhun" placeholder="Silahkan 16 Digit SKHUN SD" pattern="[0-9]{16}" value="<?php echo $skhun; ?>">
                            </div>
                            <span class="warning"><?php echo $error_skhun; ?></span>
                        </div>

                        <!-- Ijazah -->
                        <div class="form-group row">
                            <label for="ijazah" class="col-sm-3 col-form-label">No. Seri Ijazah</label>
                            <div class="col-sm-5">
                                <input type="text" name="ijazah" class="form-control" <?php echo ($error_ijazah != "" ? "is-invalid" : ""); ?> id="ijazah" placeholder="Silahkan 16 Digit Ijazah SD" pattern="[0-9]{16}" value="<?php echo $ijazah; ?>">
                            </div>
                            <span class="warning"><?php echo $error_ijazah; ?></span>
                        </div>

                        <!-- Hobi -->
                        <div class="form-group row">
                            <label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
                            <select id="hobi" name="hobi" class="form-control col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">Pilih Hobi</option>
                                <option value="Olah raga">Olah Raga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Membaca">Membaca</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Traveling">Traveling</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <br>
                            <span class="warning"><?php echo $error_hobi; ?></span>
                        </div>

                        <!-- Cita -->
                        <div class="form-group row">
                            <label for="cita2" class="col-sm-3 col-form-label">Cita-cita</label>
                            <select id="cita2" name="cita2" class="form-control col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">Pilih Cita-Cita</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI/POLRI">TNI / POLRI</option>
                                <option value="Guru/Dosen">Guru / Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Seni/Lukis">Seni / Lukis / Artis</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <br>
                            <span class="warning"><?php echo $error_cita2; ?></span>
                        </div>

                        <!-- DATA PRIBADI -->
                        <div class="p-3 mb-2 bg-danger text-white">DATA PRIBADI</div>
                        <br>

                        <!-- Nama -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama" class="form-control" <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="Silahkan isi Nama Anda" value="<?php echo $nama; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nama; ?></span>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="form-group row">
                            <label for="jenkel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="laki-laki" name="jenkel" class="custom-control-input" value="Laki-laki">
                                    <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="perempuan" name="jenkel" class="custom-control-input" value="Perempuan">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <span class="warning"><?php echo $error_jenkel; ?></span>
                        </div>

                        <!-- NISN -->
                        <div class="form-group row">
                            <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-5">
                                <input type="text" name="nisn" class="form-control" <?php echo ($error_nisn != "" ? "is-invalid" : ""); ?> id="nisn" placeholder="Silahkan isi NISN Anda" value="<?php echo $nisn; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nisn; ?></span>
                        </div>

                        <!-- NIK -->
                        <div class="form-group row">
                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-5">
                                <input type="text" name="nik" class="form-control" <?php echo ($error_nik != "" ? "is-invalid" : ""); ?> id="nik" placeholder="Silahkan isi NIK Anda" value="<?php echo $nik; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nik; ?></span>
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="form-group row">
                            <label for="tmpt_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" name="tmpt_lahir" class="form-control" <?php echo ($error_tmpt_lahir != "" ? "is-invalid" : ""); ?> id="tmpt_lahir" placeholder="Silahkan isi Tempat Lahir Anda" value="<?php echo $tmpt_lahir; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tmpt_lahir; ?></span>
                        </div>

                        <!-- Tanggal Lahir (Date) -->
                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-5">
                                <input type="date" name="tgl_lahir" class="form-control" <?php echo ($error_tgl_lahir != "" ? "is-invalid" : ""); ?> id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tgl_lahir; ?></span>
                        </div>

                        <!-- Agama (Dropdown) -->
                        <div class="form-group row">
                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                            <select name="agama" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Islam">Islam</option>
                                <option value="Kristen/Protestan">Kristen / Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khong Hu Chu">Khong Hu Chu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_agama; ?></span>
                        </div>

                        <!-- Berkebutuhan Khusus (Dropdown) -->
                        <div class="form-group row">
                            <label for="bk" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                            <select name="bk" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Tidak">Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Grahita Ringan">Grahita Ringan</option>
                                <option value="Grahita Sedang">Grahita Sedang</option>
                                <option value="Daksa Ringan">Daksa Ringan</option>
                                <option value="Daksa Sedang">Daksa Sedang</option>
                                <option value="Laras">Laras</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Syndrome">Down Syndrome</option>
                                <option value="Autis">Autis</option>
                            </select>
                            <span class="warning"><?php echo $error_bk; ?></span>
                        </div>

                        <!-- Alamat -->
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-5">
                                <textarea name="alamat" class="form-control" <?php echo ($error_alamat != "" ? "is-invalid" : ""); ?> id="alamat" placeholder="Silahkan Isi Alamat Rumah Anda" value="<?php echo $error_alamat; ?>"></textarea>
                            </div>
                            <span class="warning"><?php echo $error_alamat; ?></span>
                        </div>

                        <!-- RT -->
                        <div class="form-group row">
                            <label for="rt" class="col-sm-3 col-form-label">RT</label>
                            <div class="col-sm-5">
                                <input type="text" name="rt" class="form-control" <?php echo ($error_rt != "" ? "is-invalid" : ""); ?> id="rt" placeholder="RT" value="<?php echo $rt; ?>">
                            </div>
                            <span class="warning"><?php echo $error_rt; ?></span>
                        </div>

                        <!-- RW -->
                        <div class="form-group row">
                            <label for="rw" class="col-sm-3 col-form-label">RW</label>
                            <div class="col-sm-5">
                                <input type="text" name="rw" class="form-control" <?php echo ($error_rw != "" ? "is-invalid" : ""); ?> id="rw" placeholder="RW" value="<?php echo $rw; ?>">
                            </div>
                            <span class="warning"><?php echo $error_rw; ?></span>
                        </div>

                        <!-- Dusun -->
                        <div class="form-group row">
                            <label for="dusun" class="col-sm-3 col-form-label">Dusun</label>
                            <div class="col-sm-5">
                                <input type="text" name="dusun" class="form-control" <?php echo ($error_dusun != "" ? "is-invalid" : ""); ?> id="dusun" placeholder="Nama Dusun" value="<?php echo $dusun; ?>">
                            </div>
                            <span class="warning"><?php echo $error_dusun; ?></span>
                        </div>

                        <!-- Kelurahan -->
                        <div class="form-group row">
                            <label for="desa" class="col-sm-3 col-form-label">Nama Kelurahan / Desa</label>
                            <div class="col-sm-5">
                                <input type="text" name="desa" class="form-control" <?php echo ($error_desa != "" ? "is-invalid" : ""); ?> id="desa" placeholder="Kelurahan/Desa" value="<?php echo $desa; ?>">
                            </div>
                            <span class="warning"><?php echo $error_desa; ?></span>
                        </div>

                        <!-- Kecamatan -->
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kecamatan" class="form-control" <?php echo ($error_kecamatan != "" ? "is-invalid" : ""); ?> id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
                            </div>
                            <span class="warning"><?php echo $error_kecamatan; ?></span>
                        </div>

                        <!-- Kode pos -->
                        <div class="form-group row">
                            <label for="kodepos" class="col-sm-3 col-form-label">Kode Pos</label>
                            <div class="col-sm-5">
                                <input type="text" name="kodepos" class="form-control" <?php echo ($error_kodepos != "" ? "is-invalid" : ""); ?> id="kodepos" placeholder="Kodepos" value="<?php echo $kodepos; ?>">
                            </div>
                            <span class="warning"><?php echo $error_kodepos; ?></span>
                        </div>

                        <!-- Tempat Tinggal (Dropdown) -->
                        <div class="form-group row">
                            <label for="tmpt_tinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
                            <select name="tmpt_tinggal" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Orang Tua">Bersama Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_tmpt_tinggal; ?></span>
                        </div>

                        <!-- Transportasi (Dropdown) -->
                        <div class="form-group row">
                            <label for="transportasi" class="col-sm-3 col-form-label">Moda Transportasi</label>
                            <select name="transportasi" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Jalan Kaki">Jalan Kaki</option>
                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                <option value="Kendaraan Umum">Kendaraan Umum</option>
                                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Andong / Bendi / Becak">Andong / Bendi / Becak</option>
                                <option value="Perahu Penyebrangan">Perahu Penyebrangan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_transportasi; ?></span>
                        </div>

                        <!-- Nomor HP -->
                        <div class="form-group row">
                            <label for="nohp" class="col-sm-3 col-form-label">Nomor HP</label>
                            <div class="col-sm-5">
                                <input type="text" name="nohp" class="form-control" <?php echo ($error_nohp != "" ? "is-invalid" : ""); ?> id="nohp" placeholder="No HP" value="<?php echo $nohp; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nohp; ?></span>
                        </div>

                        <!-- Nomor Telp -->
                        <div class="form-group row">
                            <label for="notelp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-5">
                                <input type="text" name="notelp" class="form-control" <?php echo ($error_notelp != "" ? "is-invalid" : ""); ?> id="notelp" placeholder="Nomor Telepon" value="<?php echo $notelp; ?>">
                            </div>
                            <span class="warning"><?php echo $error_notelp; ?></span>
                        </div>

                        <!-- Email -->
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-5">
                                <input type="text" name="email" class="form-control" <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>">
                            </div>
                            <span class="warning"><?php echo $error_email; ?></span>
                        </div>

                        <!-- KPS (Radio) -->
                        <div class="form-group row">
                            <label for="kps" class="col-sm-3 col-form-label">Penerima KPS</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <input type="radio" name="kps" value="Ya"> Ya
                                &nbsp;&nbsp;
                                <input type="radio" name="kps" value="Tidak"> Tidak
                                <br>
                            </div>
                            <span class="warning"><?php echo $error_kps; ?></span>
                        </div>

                        <!-- Nomor KPS -->
                        <div class="form-group row">
                            <label for="nokps" class="col-sm-3 col-form-label">Nomor KPS</label>
                            <div class="col-sm-5">
                                <input type="text" name="nokps" class="form-control" <?php echo ($error_nokps != "" ? "is-invalid" : ""); ?>" id="nokps" placeholder="Nomor KPS" value="<?php echo $nokps; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nokps; ?></span>
                        </div>

                        <!-- Kewarganegaraan -->
                        <div class="form-group row">
                            <label for="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kwn" class="form-control" <?php echo ($error_kwn != "" ? "is-invalid" : ""); ?> id="kwn" placeholder="Kewarganegaraan" value="<?php echo $kwn; ?>">
                            </div>
                            <span class="warning"><?php echo $error_kwn; ?></span>
                        </div>

                        <!-- Button Kirim -->
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Export to Excel</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>