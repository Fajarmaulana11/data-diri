<?php
    
    $nama = $_POST['nama'];

    if($nama==""){
        header("location:task.php?nama=kosong");
    }else{
        echo "Nama anda adalah : ".$nama;
    }

    $usia = $_POST['usia'];

    if($usia==""){
        header("location:task.php?usia=kosong");
    }else{
        echo "<br/>Usia anda adalah :".$usia;
    }

    $tempat = $_POST['tempat'];

    if($tempat==""){
        header("location:task.php?tempat=kosong");
    }else{
        echo "<br/>Tempat, Tanggal lahir anda adalah : ".$tempat;
    }

    $jenis = $_POST['jenis'];

    if($jenis==""){
        header("location:task.php?jenis=kosong");
    }else{
        echo "<br/>Jenis kelamin anda adalah : ".$jenis;
    }

    $alamat = $_POST['alamat'];

    if($alamat==""){
        header("location:task.php?alamat=kosong");
    }else{
        echo "<br/>Alamat anda berada di : ".$alamat;
    }
?>