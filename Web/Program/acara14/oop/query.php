<?php
class crud extends koneksi
{

    // Fungsi untuk menampilkan data dari tabel user_detail
    public function lihatData()
    {
        $sql = "SELECT * FROM user_detail";  // Query SQL untuk mengambil semua data
        $result = $this->koneksi->prepare($sql);  // Menyiapkan query untuk dieksekusi
        $result->execute();  // Menjalankan query
        return $result;  // Mengembalikan hasil eksekusi query
    }

    // Fungsi untuk memasukkan data baru ke dalam tabel user_detail
    public function insertData($email, $pass, $name)
    {
        try {
            // Query SQL untuk memasukkan data dengan level default 2
            $sql = "INSERT INTO user_detail(user_email, user_password, user_fullname, id_level) 
                    VALUES (:email, :pass, :name, 2)";
            $result = $this->koneksi->prepare($sql);  // Menyiapkan query
            // Mengikat nilai parameter ke query
            $result->bindParam(":email", $email);
            $result->bindParam(":pass", $pass);
            $result->bindParam(":name", $name);
            $result->execute();  // Menjalankan query
            return true;  // Mengembalikan true jika berhasil
        } catch (PDOException $e) {
            // Menampilkan pesan error jika ada
            echo $e->getMessage();
            return false;  // Mengembalikan false jika gagal
        }
    }

    public function lihatDataById($id): bool|array
    {
        $query = "SELECT * FROM user_detail WHERE id = :id LIMIT 1";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return false;
        }
        return $result;
    }

    public function updateData($id, $email, $fullname)
    {
        $query = "UPDATE user_detail SET user_email='$email', user_fullname='$fullname' WHERE id='$id'";
        $this->koneksi->exec($query);
    }

    public function hapusData($id){
        $query = "DELETE FROM user_detail WHERE id='$id'";
        $this->koneksi->exec($query);
    }
}
?>