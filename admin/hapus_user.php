<?php
    require '../function/function.php';
    
    $id = $_GET['id'];
    $no_file = $_GET['no_file'];
    // var_dump($_GET);
    $query = hapus($id);

    if($query != null) {
        echo "<script>
            window.location.replace('user.php');    
        </script>";
    }
    else {
        echo "<script>
                alert('Gagal gemink');
            </script>"; 
    }
?>