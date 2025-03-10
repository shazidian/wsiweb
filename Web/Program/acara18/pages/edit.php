<div class="px-3">
   <h4 class="col-lg-6">Form DTS VSGA 2021</h4>
   <h5 class="col-lg-6"><b>Tambah Data</b></h5>
   <div class="col-lg-6">
      <?php
      include 'koneksi.php';
      $id = $_GET['id'];
      $sql = "SELECT * FROM diri WHERE id='$id'";
      $hasil = mysqli_query($conn, $sql);
      $nomer = 1;
      while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
         ?>
         <form name="satu" action="update.php" method="post">
            <div class="form-group">
               <label for="id">ID Anda:</label>
               <input type="text" name="id" id="id" class="form-control" value="<?php
               echo $data['id']; ?>">
            </div>
            <div class="form-group">
               <label for="nama">Nama Anda:</label>
               <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama']; ?>"
                  placeholder="Masukan nama lengkap anda 
   dengan gelar">
            </div>
            <div class="form-group mb-2">
               <label for="tgl">Tanggal Lahir Anda:</label>
               <input type="date" name="tgl" id="tgl" class="form-control" value="<?php
               echo $data['lahir']; ?>">
            </div>
            <div class="form-group mb-2">
               <label for="email">E-Mail Anda:</label>
               <input type="email" name="email" id="email" name="email" class="form-control"
                  value="<?php echo $data['email']; ?>" placeholder="Masukan email 
   anda">
            </div>
            <div class="form-group mb-2">
               <label for="tlpn">Nomer Telpon Anda:</label>
               <input type="number" name="tlpn" id="tlpn" pattern="[0-9]{12}" onkeypress="return hanyaAngka(event)"
                  class="form-control" value="<?php echo
                     $data['telpon']; ?>" placeholder="Masukan nomor telpon anda">
            </div>

            <div class="form-group mb-2">
               <label for="alamat">Alamat Anda:</label>
               <input class="form-control" name="alamat" id="alamat" rows="3" value="<?php echo $data['alamat']; ?>"
                  placeholder="Masukan alamat 
   anda"></input>
            </div>
            <div class="form-group mb-2">
               <label for="kelamin">Jenis Kelamin:</label>
               <select name="kelamin" id="Kelamin" value="" class="form-control">
                  <option value="<?php echo $data['kelamin']; ?>">
                     <?php echo
                        $data['kelamin']; ?>
                  </option>
                  <option value="<?php
                  if ($data['kelamin'] == 'Pria') {
                     echo 'Wanita';
                  } else {
                     echo 'Pria';
                  }
                  ?>">
                     <?php
                     if ($data['kelamin'] == 'Pria') {
                        echo 'Wanita';
                     } else {
                        echo 'Pria';
                     }
                     ?>
                  </option>
               </select>
            </div>
            <button type="submit" class="btn btn-primary" onclick="ValidateEmail(document.satu.email)">Simpan</button>
         </form>
         <?php
      }
      ?>
   </div>
</div>
<script>
   function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
         return false;
      return true;
   }
   function ValidateEmail(inputText) {
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (inputText.value.match(mailformat)) {
         alert("Valid email address!");
         document.satu.email.focus();
         return true;
      }
      else {
         alert("You have entered an invalid email address!");
         document.satu.email.focus();
         return false;
      }
   }
</script>