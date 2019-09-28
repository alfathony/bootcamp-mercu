<?php
/**
 * BELAJAR VARIABLE
 * Bikin variabel gak boleh pake:
 * - spasi
 * - angka di depan
 */

/**
 * Variable Tipe String
 * Contoh: "Gungun Berapi", "Mencitai Orang lain sebanyak 300", "Ah"
 * Harus pake kutip ye
 */

$namaDepan = "Abdul";
$namaBelakang = "Latief Fathoni";
$lahir = "Jambi";

/**
 * Variable Tipe Integer
 * Integer itu tipe angka ya, Contoh: 20, 3, 0
 * Jangan pake kutip ya
 */

$tahunLahir = 2000;
$tahunSekarang = date('Y'); //ini 2019

$usia = $tahunSekarang - $tahunLahir;

/**
 * Variable Tipe boolean
 * Terdiri dari TRUE dan FALSE doang isinye
 */

 $apakahPerempuan = TRUE;

if ($apakahPerempuan == TRUE) {
    $jenisKelamin = "Perempuan";
    $tampang = "Cantik";
}else{
    $tampang = "Ganteng";
    $jenisKelamin = "Laki-laki";
}

/**
 * Tipe Data Array
 * Ini tipe data yang dalam satu variable bisa banyak data gitu contoh:
 * Hobi: Mancing, Tidur, Mandi, Keramas, Mancing Lagi
 */

$hobi = ['Mancing', 'Tidur', 'Mandi', 'Keramas', 'Mancing Lagi', 'Demo'];
// cek array nya kek gimane
// print_r($hobi);

$pendidikan = 
    array(
        [
            'nama_sekolah' => 'SDN Budiharti', 
            'tahun' => '2000 - 2006',
            'alamat' => 'Subang'
        ],
        [
            'nama_sekolah' => 'SMPN 1 Subang', 
            'tahun' => '2006 - 2009',
            'alamat' => 'Subang'
        ],
        [
            'nama_sekolah' => 'SMKN 1 Subang', 
            'tahun' => '2006 - 2009',
            'alamat' => 'Subang'
        ],
        [
            'nama_sekolah' => 'Mercu Buana', 
            'tahun' => '2006 - 2009',
            'alamat' => 'Jakarta'
        ]
    );



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar PHP</title>

    <!-- panggil styl.css -->
    <link rel="stylesheet" href="basic-php/assets/css/style.css">
    
</head>
<body>
    <h3>Cerita tentang saya</h3>
    <p>
        Nama saya adalah <?php echo $namaDepan ?> <?php echo $namaBelakang ?>, saya lahir di <?php echo $lahir ?>. Saya lahir pada tahun <?= $tahunLahir ?>
             dan saat ini usia saya <?= $usia ?> tahun. Saya adalah seorang <?= $jenisKelamin ?> yang <?= $tampang ?>.
    </p>
    <p><strong>Hobi saya:</strong></p>
    <ol>
        <?php
            foreach($hobi as $value){
               echo "<li>$value</li>"; 
            }
        ?>
    </ol>

            
    <pre>
        <!-- <?php print_r($pendidikan); ?> -->
    </pre>

    <p><strong>Pendidikan:</strong></p>

    <table class="table-style">
        <tr>
            <th>Sekolah</th>
            <th>Tahun</th>
            <th>Alamat</th>
        </tr>

        <?php
            foreach($pendidikan as $value){
               echo "
               <tr>
                    <td>".$value['nama_sekolah']."</td>
                    <td>".$value['tahun']."</td>
                    <td>".$value['alamat']."</td>
                </tr>
               "; 
            }
        ?>
    </table>


<h4>For</h4>

<?php
    $batasNilaiTerakhir = 20;
    $kelipatan2 = 2;

    $batasTengah = 10;

    for ($i=1; $i <= $batasNilaiTerakhir; $i++) { 
        
        if ($i <= 10) {
            for ($a=1; $a <= $i; $a++) { 
                echo "<div class='box'> $a </div>";
            }
        }else{
            for ($a=1; $a <= $i-$kelipatan2; $a++) { 
                echo "<div class='box'> $a </div>";
            }
            $kelipatan2 = $kelipatan2+2;
        }

        echo "<br>";
    }
    
?>

</body>
</html>