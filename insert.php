<?php 
require_once("./koneksi.php");
if(isset($_POST['submit'])){
    $no = $_POST['no_peserta'];
    $nama = $_POST['nama'];
    $bio = $_POST['bio'];
    $check_image = getimagesize($_FILES["gambar"]["tmp_name"]);

    if($check_image){
        $image = $_FILES['gambar']['name'];
        $allowed_extension = array('png', 'jpg', 'jpeg', 'JPG', 'JPEG');
        $x = explode('.', $image);
        $extension = strtolower(end($x));
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $new_file = "peserta_".rand(100,1000).".".$extension;
    
        if(in_array($extension, $allowed_extension) === true){
            move_uploaded_file($tmp_file, './img/'.$new_file);
            mysqli_query($conn, "INSERT INTO `peserta`(`no_peserta`, `nama`, `bio`, `gambar`) VALUES ('$no', '$nama', '$bio', '$new_file')");

            echo "<script> 
            alert('Data berhasil di input');
            document.location='list_peserta.php';
            </script>"; 
        }else{
            echo "<script> 
            alert('Ekstensi tidak diperbolehkan');
            document.location='./form_input_peserta.php';
            </script>";
        }
    }else{
        echo "<script>
        alert('File tidak ada');
        document.location='./form_input_peserta.php';
        </script>"; 
    } 
};

?>