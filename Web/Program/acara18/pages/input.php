<div onload="document.satu.email.onFocus()" class="px-3">
    <h4 class="col-lg-6">Form DTS VSGA 2021</h4>
    <h5 class="col-lg-6"><b>Tambah Data</b></h5>
    <div class="col-lg-6">
        <form name="satu" action="tambah.php" method="post">
            <div class="form-group mb-2">
                <label for="nama">Nama Anda:</label>
                <input type="text" name="nama" id="nama" class="form-control"
                    placeholder="Masukan nama lengkap anda dengan gelar" required>
            </div>
            <div class="form-group mb-2">
                <label for="tgl">Tanggal Lahir Anda:</label>
                <input type="date" name="tgl" id="tgl" class="form-control" placeholder="Masukan tanggal lahir anda"
                    required>
            </div>
            <div class="form-group mb-2">
                <label for="email">E-Mail Anda:</label>
                <input type="email" name="email" id="email" name="email" class="form-control"
                    placeholder="Masukan email anda" required>
            </div>
            <div class="form-group mb-2">
                <label for="tlpn">Nomer Telpon Anda:</label>
                <input type="number" name="tlpn" id="tlpn" pattern="[0-9]{12}" onkeypress="return hanyaAngka(event)"
                    class="form-control" placeholder="Masukan nomor telpon anda">
            </div>

            <div class="form-group mb-2">
                <label for="alamat">Alamat Anda:</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"
                    placeholder="Masukan alamat anda"></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="kelamin">Jenis Kelamin:</label>
                <select name="kelamin" id="Kelamin" class="form-control" required>
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" onclick="ValidateEmail(document.satu.email)">Simpan</button>
        </form>
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
        } else {
            alert("You have entered an invalid email address!");
            document.satu.email.focus();
            return false;
        }
    }
</script>