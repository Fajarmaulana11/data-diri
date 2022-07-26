<html>
<head>
    <title>Task PHP</title>
</head>
<body>
    <h1>Mengisi Data Pribadi <br/> -----------</h1>
<?php
    if(isset($_GET['nama'])) {
        if($_GET['nama'] == "kosong") {
            echo "<h4 style='color:red'>Nama belum di masukkan !</h4>";
        }
    }
    if(isset($_GET['usia'])) {
        if($_GET['usia'] == "kosong") {
            echo "<h4 style='color:red'>umur belum di masukkan !</h4>";
        }
    }
    if(isset($_GET['tempat'])) {
        if($_GET['tempat'] == "kosong") {
            echo "<h4 style='color:red'>Tempat, tanggal lahir belum di masukkan !</h4>";
        }
    }
    if(isset($_GET['jenis'])) {
        if($_GET['jenis'] == "kosong") {
            echo "<h4 style='color:red'>Jenis kelamin belum di masukkan !</h4>";
        }
    }
    if(isset($_GET['alamat'])) {
        if($_GET['alamat'] == "kosong") {
            echo "<h4 style='color:red'>Alamat belum di masukkan !</h4>";
        }
    }
?>
    <h4>Masukkan data anda :</h4>
<form action="masukkan.php" method ="post">

    <table>
    <tr>
    <td>Nama :</td>
    <td><input type="text" name="nama"></td>
    </tr>

    <tr>
    <td>Usia :</td>
    <td><input type="text" name="usia"></td>
    </tr>

    <tr>
    <td>Tempat, Tanggal lahir :</td>
    <td><input type="text" name="tempat"></td>
    </tr>

    <tr>
    <td>Jenis kelamin :</td>
    <td><input type="text" name="jenis"></td>
    </tr>

    <tr>
    <td>Alamat :</td>
    <td><input type="text" name="alamat"></td>
    
    <td><input type="submit" value="klik"></td>
    </tr>

    </table>
</form>
</body>
</html>