<?php
// koneksi db
$conn = mysqli_connect("localhost", "root", "", "desa_samangki");


// function untuk tiap query SELECT
function view($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    return $result;
}

// function untuk insert data
function insert($data)
{
    global $conn;

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $nama = $data['nama'];
    $username = $data['user'];
    $password = $data['pass'];
    $query = "INSERT INTO tb_login (nama, username, password, profile) VALUES ('$nama', '$username', '$password', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function upload gambar
// no file untuk pembeda upload direktori file
function upload()
{

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

    $fileDIR = "../img/profile/";

    $fileUpload = $fileDIR . basename($namaFile);

    $tes = move_uploaded_file($tmpFile, $fileUpload);

    return $namaFile;
}

// function update data
function update($data)
{
    global $conn;


    $gambarLama = $data['gambarLama'];

    // validasi user input gambar atau tidak
    if ($_FILES['gambar']['error'] === 4) {

        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

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


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// function hapus data
function hapus($id)
{
    global $conn;

    $sql = "DELETE FROM tb_login WHERE id_login = $id";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
