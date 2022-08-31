<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--memanggil Css-->
     <link rel="stylesheet" href="style.css">
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    body{
        min-height: 120vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #115538;
    }
    .container{
        position: center;
        max-width: 500px;
        width: 100%;
        border-radius: 10px;
        padding: 40px;
        margin: 0 0px;
        background-color: #44695BFF;
        box-shadow: 90%;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    </style>

	<title>AFDAL</title>
</head>
<body>
  

  <div>
     <div class="container">
      <h1>Form Mahasiswa</h1>


    <form action="hasil.php"method="POST">
        <div class="form first">
          <div class="Data Pribadi">
             <span class="title">Masukkan Data Diri Anda</span>
           <div class="field">   
             <div class="input-field">
                <label>Nama:</label><br>
                <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
             </div>



              <div class="input-field">
                <label>Nim:</label><br>
                <input type="text" name="nim" placeholder="Nomor Induk Mahasiswa" required>
             </div>


             <div class="input-field">
                <label>Tempat Lahir:</label><br>
                <input type="text" name="tempat_lahir"placeholder="Tempat Lahir Anda" required>
             </div>


             <div class="input-field">
                <label>Tanggal Lahir:</label><br>
                <input type="date" name="tgl_lahir"placeholder="Tanggal lahir Anda" required>
             </div>


             <div class="input-field">
                <label>Departemen:</label><br>
                  <select name="departemen">
                    <option disabled selected>Select Departemen:</option><option>Teknik Sipil</option><option>Teknik Mesin</option><option>Teknik Perkapalan</option><option>Teknik Elektro</option><option>Teknik Arsitektur</option><option>Teknik Geologi</option><option>Teknik Industri</option><option>Teknik Kelautan</option><option>Teknik Sistem Perkapalan</option><option>Teknik Perencanaan WilayaH Kota</option><option>Teknik Pertambangan</option><option>Teknik Informatika</option><option>Teknik Lingkungan</option>
                  </select>


            <div class="input-field">
                <label>Jenis Kelamin</label><br>
                <select name="jk"required>
                   <option disabled selected>Select gender</option>
                   <option>Laki-Laki</option>
                   <option>Perempuan</option>
                   <option>Netral</option>
                 </select>
            </div>



             <div class="input-field">
                <label>Kewarganegaraan:</label><br>
                <input type="text" name="kewarganegaraan"placeholder="Negara Anda" required>
             </div>



             <div class="input-field">
                <label>Semester:</label><br>
                <input type="Number" name="semester"placeholder="Semester Anda" required>
             </div>



             <div class="input-field">
                <label>Alamat:</label><br>
                <input type="text" name="alamat" placeholder="Alamat Anda" required>
             </div>



             <div class="input-field">
                <label>Kelainan Khusus:</label><br>
                <input type="text" name="kelainan"placeholder="Kelainan Khusus" required>
             </div>


              <div class="input-field">
                <label>Hobi & Bakat:</label><br>
                <input type="text" name="hobibakat"placeholder="Di isi Jika Ada" required>
              </div>

              <div>
                <label>Foto Anda:</label><br>
                <input type="file" name="File_kirim"><br><br>
              </div>

              <div>    
                <input type="submit" value="Submit"> <href="Data Mahasiswa.html">
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>