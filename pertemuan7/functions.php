<?php
    // koneksi database
   $conn = mysqli_connect("localhost", "root", "", "phpdasar");


   function query($query){
       global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;

        }
        return $rows;
   }


   function tambah($tes){
        global $conn;

        $nama = $tes["nama"] ;
        $npm = $tes["npm"];
        $email = $tes["email"];
        $jurusan = $tes["jurusan"];
        $gambar = $tes["gambar"];

         $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nama','$npm', '$email', '$jurusan', '$gambar' )
                    
                    ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
   }
?>