<?php
    // koneksi db
    $conn = mysqli_connect("localhost", "root", "", "desa_samangki");

    
    // function untuk tiap query SELECT
    function view($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        return $result;
    }

    // function untuk insert data
    function insert($data, $no_file) {
        global $conn;
        
        $no_upload = $no_file;

        $gambar = upload($no_upload);
        if ( !$gambar ) {
            return false;
        }

        // Note 
        // 1 = registrasi
        // 2 = wisata 
        // 3 = produk
        // 4 = informasi
        if ($no_file == 1) {
            $nama = $data['nama'];
            $username = $data['user'];
            $password = $data['pass'];
            $query = "INSERT INTO tb_login (nama, username, password, profile) VALUES ('$nama', '$username', '$password', '$gambar')";
        }
        elseif ($no_file == 2){
            $judul = $data['judul'];
            // $thumbnail = $data['gambar'];
            $deskripsi = $data['deskripsi'];

            $query = "INSERT INTO tb_wisata (judul, gambar_utama, deskripsi) VALUES ('$judul', '$gambar', '$deskripsi')"; 
        }
        elseif ($no_file == 3){
            $judul = $data['judul'];
            // $gambar_produk = $data['gambar'];
            $uploaded = $data['uploaded'];

            $query = "INSERT INTO tb_produk (gambar, judul, uploaded) VALUES ('$gambar', '$judul', '$uploaded')";
        }
        elseif ($no_file == 4){
            $judul = $data['judul'];
            $deskripsi = $data['deskripsi'];
            $penulis = $data['penulis'];
            $uploaded = $data['uploaded'];
            $query = "INSERT INTO tb_informasi (gambar, judul, deskripsi, penulis, uploaded) VALUES ('$gambar', '$judul', '$deskripsi', '$penulis', '$uploaded')";
        }
        else
            return false;

        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    // function upload gambar
    // no file untuk pembeda upload direktori file
    function upload($no_upload) {

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $tmpFile = $_FILES['gambar']['tmp_name'];
        $error = $_FILES['gambar']['error'];
        $ekstensiValid = ['jpg', 'png', 'jpeg'];
        
        // validasi ekstensi
        // $ekstensi = explode(".", $namaFile);
        // $ekstensi = strtolower(end($ekstensi));
        // if ( !in_array($ekstensi, $ekstensiValid) ) {
        //     echo "<script>
        //         alert('File harus Ber-Ekstensi jpg,jpeg,atau png');
        //         </script>
        //     ";
        //     return false;
        // }        
        
        // validasi size
        if ($ukuranFile > 10000000) {
            echo "<script>
                alert('Ukuran file terlalu besar');
                </script>
            ";
            return false;
        }
        
        // Note 
        // 1 = registrasi
        // 2 = wisata 
        // 3 = produk
        // 4 = informasi

        if ($no_upload == 1) {
            $fileDIR = "../img/profile/";
        }
        elseif ($no_upload == 2) {
            $fileDIR = "../img/samangki/wisata/";
        }
        elseif ($no_upload == 3) {
            $fileDIR = "../img/samangki/produk/";
        }
        elseif ($no_upload == 4) {
            $fileDIR = "../img/samangki/informasi/";
        }
        else {
            return false;
        }

        $fileUpload = $fileDIR . basename($namaFile);
        
        $tes = move_uploaded_file($tmpFile, $fileUpload);
        
        return $namaFile;
    }

    // function update data
    function update($data ,$no_file) {
        global $conn;
        
        
        $gambarLama = $data['gambarLama'];

        $no_upload = $no_file;
        
        // Note 
        // 1 = registrasi
        // 2 = wisata 
        // 3 = produk
        // 4 = informasi
        
        // validasi user input gambar atau tidak
        if ($_FILES['gambar']['error'] === 4) {
            
            $gambar = $gambarLama;

           
        }
        else {
            $gambar = upload($no_upload);
        }

        if($no_file == 1) {
            $id = $data['id'];
            $nama = $data['nama'];
            $username = $data['username'];
            $password = $data['password'];

            $query = "UPDATE tb_login SET
                    profile = '$gambar',
                    nama = '$nama',
                    username = '$username',
                    password = '$password'
                    WHERE id_login = $id
            ";
        }

        elseif ($no_file == 2) {
            $id = $data['id'];
            $judul = $data['judul'];
            $deskripsi = $data['deskripsi'];

            $query = "UPDATE tb_wisata SET
            gambar_utama = '$gambar',
            judul = '$judul',
            deskripsi = '$deskripsi'
            WHERE id_wisata = $id
            ";
        }

        elseif ($no_file == 3) {
            $id = $data['id'];
            $judul = $data['judul'];
            $uploaded = $data['uploaded'];

            $query = "UPDATE tb_produk SET 
                gambar = '$gambar',
                judul = '$judul',
                uploaded = '$uploaded'
                WHERE id_produk = $id;
            ";
        }
        
        elseif ($no_file == 4) {
            $id = $data['id'];
            $judul = $data['judul'];
            $deskripsi = $data['deskripsi'];
            $penulis = $data['penulis'];
            $uploaded = $data['uploaded'];

            $query = "UPDATE tb_informasi SET 
            gambar = '$gambar',
            judul = '$judul',
            deskripsi = '$deskripsi',
            penulis = '$penulis',
            uploaded = '$uploaded'
            WHERE id_informasi = $id
            ";
        }
        
        

        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }


    // function hapus data
    function hapus($id, $no_file) {
        global $conn;

        // Note 
        // 1 = registrasi
        // 2 = wisata 
        // 3 = produk
        // 4 = informasi

        if ($no_file == 1) {
            $sql = "DELETE FROM tb_login WHERE id_login = $id";
        }
        elseif ($no_file == 2){
            $sql = "DELETE FROM tb_wisata WHERE id_wisata = $id";
        }
        elseif ($no_file == 3){
            $sql = "DELETE FROM tb_produk WHERE id_produk = $id";
        }
        elseif ($no_file == 4) {
            $sql = "DELETE FROM tb_informasi WHERE id_informasi = $id";
        }
        else{
            return false;
        }
        
        mysqli_query($conn, $sql);

        return mysqli_affected_rows($conn);
    }

    

?>