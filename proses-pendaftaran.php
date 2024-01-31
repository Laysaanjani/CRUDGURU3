
<?php
include("config.php");

if (isset($_POST['aksi'])) {
  
  if($_POST['aksi']=='add'){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $no_tel = $_POST['no_tel'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO guru01 (nama,  jk, alamat, no_tel, email) VALUE ('$nama', '$jk', '$alamat', '$no_tel', '$email')"; $query = mysqli_query($db, $sql);
 
   if( $query ){

        header('location: index.php?status-sukses');
    } else {

        header('location: index.php?status-gagal');
    }
    }else if($_POST['aksi']=='edit'){
      $id_guru = $_POST['id_guru'];
      $nama = $_POST['nama'];
      $jk = $_POST['jk'];
      $alamat = $_POST['alamat'];
      $no_tel = $_POST['no_tel'];
      $email = $_POST['email'];
      
      $sql = "UPDATE guru01 SET nama = '$nama', jk = '$jk', alamat = '$alamat', no_tel = '$no_tel', email = '$email' WHERE id_guru = '$id_guru'";
      $query = mysqli_query($db, $sql);
      
      if( $query ){

        header('location: index.php?status-sukses');
    } else {

        header('location: index.php?status-gagal');
    }
   }
  }
  
  if(isset($_GET['hapus'])){


    $id_guru = $_GET['hapus'];


    $sql="DELETE FROM guru01 WHERE id_guru ='$id_guru';";
    $query= mysqli_query($db,$sql);


    if( $query ){
        header('location:index.php?status=sukses');
    }else{
        header('location:index.php?status=gagal');
    }
  }
?>