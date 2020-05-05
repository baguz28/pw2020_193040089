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

    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data)
    {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $gambar = htmlspecialchars($data['gambar']);
    $cara = htmlspecialchars($data['cara']);
    $asal = htmlspecialchars($data['asal']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE alat_musik
            SET 
            nama = '$nama',
            gambar = '$gambar',
            cara = '$cara',
            asal = '$asal',
            harga = '$harga'
            WHERE  id = '$id'
            ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data) 
    {
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["username"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan!');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>