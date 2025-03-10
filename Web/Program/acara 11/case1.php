<?php
// Definisi interface Bird
interface Bird {
    // Method yang harus diimplementasikan oleh class yang menggunakan interface ini
    public function makeSound();
}

// Definisi class Perkutat yang mengimplementasikan interface Bird
class Perkutat implements Bird {
    // Implementasi method makeSound untuk class Perkutat
    public function makeSound() {
        echo "Kur Kur"; // Perkutat mengeluarkan suara "Kur Kur"
    }
}

// Membuat objek dari class Perkutat
$burung = new Perkutat();

// Memanggil method makeSound untuk objek burung
$burung->makeSound(); // Output: "Kur Kur"
?>