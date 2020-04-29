<?php
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040089") or die("Database Salah");
        
        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data)
    {
        $conn = koneksi();

        $nama = htmlspecialchars($data['nama']);
        $gambar = htmlspecialchars($data['gambar']);
        $cara = htmlspecialchars($data['cara']);
        $asal = htmlspecialchars($data['asal']);
        $harga = htmlspecialchars($data['harga']);

        $query = "INSERT INTO alat_musik
                        VALUES
                        ('', '$nama', '$gambar', '$cara', '$asal', '$harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>