<?php
require_once("koneksi.php");

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $no = $_POST['no_peserta'];
    $nama = $_POST['nama'];
    $bio = $_POST['bio'];
    $check_image = FALSE;

    if(getimagesize($_FILES["gambar"]["tmp_name"])){
        $check_image = getimagesize($_FILES["gambar"]["tmp_name"]);
    };

    if($check_image){
        $image = $_FILES['gambar']['name'];
        $allowed_extension = array('png', 'jpg', 'jpeg', 'JPG', 'JPEG');
        $x = explode('.', $image);
        $extension = strtolower(end($x));
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $new_file = "peserta_".rand(100,1000).".".$extension;
    
        if(in_array($extension, $allowed_extension) === true){
            move_uploaded_file($tmp_file, './img/'.$new_file);
            mysqli_query($conn, "UPDATE `peserta` SET `no_peserta`='$no', `nama`='$nama', `bio`='$bio', `gambar`='$new_file' WHERE id='$id'");
            
            echo "<script> 
            alert('Data berhasil di update');
            document.location='list_peserta.php';
            </script>"; 
        }else{
            echo "<script> 
            alert('Ekstensi tidak diperbolehkan');
            document.location='./form_edit_peserta.php';
            </script>";
        }
    }else{
        mysqli_query($conn, "UPDATE `peserta` SET `no_peserta`='$no', `nama`='$nama', `bio`='$bio' WHERE id='$id'");
        
        echo "<script> 
        alert('Data berhasil di update');
        document.location='./list_peserta.php';
        </script>"; 
    } 
};
?>