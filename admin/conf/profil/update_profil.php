<?php 
    include('../conn.php');

    date_default_timezone_set('Asia/Jakarta');
    $waktu_edit=date('Y-m-d H:i:s');

    $kd_profil=$_GET['id'];
	$kategori=$_POST['kategori'];
    $judul=$_POST['judul'];
    $tag=$_POST['tag'];
    $deskripsi=$_POST['isi'];

	// Ambil Data yang Dikirim dari Form
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    // Set path folder tempat menyimpan gambarnya
    $path = "../../../images/profil/".$nama_file;

    if(empty($tmp_file)){
        $query = "UPDATE profil SET kategori='$kategori',judul='$judul',tag='$tag',deskripsi='$deskripsi',waktu_edit='$waktu_edit' WHERE kd_profil='$kd_profil'";
        $save=mysqli_query($connect, $query);
        if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
            header("location: ../../pages/profil/view_profil.php");
        }else{  //jika update gagal maka muncul pesan
            header("location: ../../pages/profil/edit_pelayanan.php?id=$kd_profil");
        }
    }else{
        if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG  
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :  
            if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB    
            // Jika ukuran file kurang dari sama dengan 1MB, lakukan :    
            // Proses upload    
                if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload/tidak      
                    // Jika gambar berhasil diupload, Lakukan :        
                    // Proses simpan ke Database      
                    $query = "UPDATE profil SET kategori='$kategori',judul='$judul',tag='$tag',deskripsi='$deskripsi',nm_foto='$nama_file',uk_foto='$ukuran_file',type_foto='$tipe_file',waktu_edit='$waktu_edit' WHERE kd_profil='$kd_profil'";
                    $sql = mysqli_query($connect, $query); 
                    // Eksekusi/ Jalankan query dari variabel $query            
                    if($sql){ // Cek jika proses simpan ke database sukses atau tidak        
                        // Jika Sukses, Lakukan :        
                        header("location: ../../pages/profil/view_profil.php"); // Redirectke halaman index.php      
                    }else{        
                        // Jika Gagal, Lakukan :        
                        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";        
                        // header("location: ../../editor.php");
                    }    
                }else{ 
                    // Jika gambar gagal diupload, Lakukan :      
                    echo "Maaf, Gambar gagal untuk diupload.";      
                    // header("location: ../../editor.php"); 
                }
            }else{    // Jika ukuran file lebih dari 1MB, lakukan :    
                echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";    
                // header("location: ../../editor.php");
            }
        }else{  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :  
            echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";  
            // header("location: ../../editor.php");
        }
    }

    $connect->close();
?>

