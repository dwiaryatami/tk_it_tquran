<?php 
session_start();
include '../koneksi.php';
if(!isset($_SESSION['status_login'])) {
    echo "<script>window.location = '../login.php?msg= Harap Login Terlebih Dahulu'</script>";
}
date_default_timezone_set("Asia/Jakarta");
$identitas =mysqli_query($conn, "SELECT * FROM profil ORDER BY id DESC LIMIT 1");
$d  =mysqli_fetch_object($identitas);

?>
<!DOCTYPE html>
<html>
    <head>
 

        <link rel="icon" href="../uploads/identitas/<?= $d->favicon ?>">
        <title> Panel Admin-<?= $d->nama ?></title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


        <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
            </head>
            
        <div class="content">

            <div class="container">

                <div class="box">

                    <div class="box-header">
                         Kepala Sekolah
                    </div>

                    <div class="box-body">

                    <?php
                        if(isset($_GET['success'])) {
                            echo "<div class='alert alert-success'>".$_GET['success']."</div>";

                        }
                        ?>
                        
                    <form action="" method="POST" enctype="multipart/form-data">
                           
                            <div class="form-group">
                                <label>Nama</label>
                               <input type="text" name="nama" class="input-control" placeholder="Nama Kepala Sekolah" value="<?= $d->nama_kepsek ?>">
                            </div>


                            <div class="form-group">
                                <label>Sambutan</label>
                                <textarea name="sambutan" class="input-control" placeholder="Sambutan Kepala Sekolah"   id="mytextarea"><?= $d->sambutan_kepsek ?></textarea>
                             
                            </div>

                            <div class="form-group">
                                <label> Foto Kepala Sekolah</label>
                                <img src="../uploads/identitas/<?= $d->foto_kepsek?>" width="200px" class="image">
                                <input type="hidden" name="foto_lama" value="<?= $d->foto_kepsek ?>">
                                <input type="file" name="foto_baru" class="input-control" >
                            </div>

                            <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-blue">

                        </form>


                        <?php
                            if(isset($_POST['submit'])){
                                
                              
                                $nama = addslashes(ucwords($_POST['nama']));
                                $sambutan = addslashes($_POST['sambutan']);

                                $currdate = date('Y-m-d H:i:s');

                              //validasi data foto sekolah

                                if($_FILES['foto_baru']['name'] != ''){


                                $filename  =$_FILES['foto_baru']['name'];
                                $tmpname =$_FILES['foto_baru']['tmp_name'];
                                $filesize  =$_FILES['foto_baru']['size'];

                                $formatfile =pathinfo($filename, PATHINFO_EXTENSION);
                                $rename   ='kepsek'.time().'.'.$formatfile;
    
                                $allowedtype   = array('png', 'jpg', 'jpeg','gif');
    
                                if(!in_array($formatfile, $allowedtype)){
                                 echo '<div class="alert alert-error">Format file foto kepsek sekolah tidak di izinkan.</div>';
                                
                                 return false;
    
                                }elseif($filesize> 1000000){
                                    echo '<div class="alert alert-error">Ukuran file foto kepsek sekolah tidak boleh lebih dari 1 MB.</div>';
                                    return false;

                                }else{
                                        if(file_exists("../uploads/identitas/".$_POST['foto_lama'])){
                                            unlink("../uploads/identitas/".$_POST['foto_lama']);

                                        }
                                        move_uploaded_file($tmpname, "../uploads/identitas/".$rename);
                                    }
                                     }else{
                                    $rename =$_POST['foto_lama'];
                                }

                                $update = mysqli_query($conn, "UPDATE pengaturan SET
                                       
                                        nama_kepsek ='".$nama."',
                                        sambutan_kepsek ='".$sambutan."',
                                        foto_kepsek  ='".$rename."',
                                        updated_at  ='".$currdate."'
                                        WHERE id    ='".$d->id."'
                                    ");
    
                                        if($update){
                                            echo "<script>window.location='kepala-sekolah.php?success=Edit Data Berhasil'</script>";
                                        }else{
                                            echo 'Gagal Edit'.mysqli_error($conn);
                                        }
                                    }

                        ?>
                        
                    </div>

                </div>

            </div>
    </div>
