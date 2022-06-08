<?php
    // Load file koneksi.php
    include('../conn.php');

    date_default_timezone_set('Asia/Jakarta');
    $waktu_upload=date('Y-m-d H:i:s');

    $query = mysqli_query($connect, "SELECT max(kd_profil) as kodeTerbesar FROM profil");
    $data = mysqli_fetch_array($query);
    $kodeProfil = $data['kodeTerbesar'];

    // mengambil angka dari kode pelayanan terbesar, menggunakan fungsi substr
    // dan diubah ke integer dengan (int)
    $urutan = (int) substr($kodeProfil, 3, 3);

    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
    $urutan++;

    // membentuk kode pelayanan baru
    // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
    // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
    // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya PRF 
    $huruf = "PRF";
    $kodeProfil = $huruf . sprintf("%03s", $urutan);

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
    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG  
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :  
    	if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB    
    	// Jika ukuran file kurang dari sama dengan 1MB, lakukan :    
    	// Proses upload    
    		if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak      
    		// Jika gambar berhasil diupload, Lakukan :        
    		// Proses simpan ke Database      
    			$query = "INSERT INTO profil (kd_profil,kategori,judul,tag,deskripsi,nm_foto,uk_foto,type_foto,waktu_upload,waktu_edit) VALUES ('".$kodeProfil."','".$kategori."','".$judul."','".$tag."','".$deskripsi."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$waktu_upload."','".$waktu_upload."')";      
    			$sql = mysqli_query($connect, $query); 
    			// Eksekusi/ Jalankan query dari variabel $query            
    			if($sql){ // Cek jika proses simpan ke database sukses atau tidak        
    			// Jika Sukses, Lakukan :        
    				header("location: ../../pages/profil/view_profil.php"); 
                    // Redirectke halaman     
    			}else{        
    			// Jika Gagal, Lakukan :        
    				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";        
    				echo "<br><a href='../../pages/profil/form_profil.php'>Kembali Ke Form</a>";
    			}    
    		}else{ 
    			// Jika gambar gagal diupload, Lakukan :      
    			echo "Maaf, Gambar gagal untuk diupload.";      
    			echo "<br><a href='../../pages/profil/form_profil.php'>Kembali Ke Form</a>";
    		}  
    	}else{    // Jika ukuran file lebih dari 1MB, lakukan :    
    		echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";    echo "<br><a href='../../pages/profil/form_profil.php'>Kembali Ke Form</a>";
    	}
    }else{  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :  
    		echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";  echo "<br><a href='../../pages/profil/form_profil.php'>Kembali Ke Form</a>";
    }

    $connect->close();
?>