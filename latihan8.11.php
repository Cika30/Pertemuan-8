<?php
// Membuat interface Hewan
interface Hewan {
    public function Makan();
    public function Bergerak();
    public function Beranak();
}

// Membuat class Burung yang mengimplementasikan interface Hewan
class Burung implements Hewan {
    public function Makan() {
        return "Burung makan biji-bijian<br/>";
    }

    public function Bergerak() {
        return "Burung bergerak dengan berjalan, terbang dan melompat<br/>";
    }

    public function Beranak() {
        return "Burung beranak dengan bertelur<br/>";
    }
}

// Membuat class Kambing yang mengimplementasikan interface Hewan
class Kambing implements Hewan {
    public function Makan() {
        return "Kambing makan rumput<br/>";
    }

    public function Bergerak() {
        return "Kambing bergerak dengan berjalan dan berlari<br/>";
    }

    public function Beranak() {
        return "Kambing beranak dengan melahirkan<br/>";
    }
}

// Membuat objek
$burung = new Burung();
$kambing = new Kambing();

// Menampilkan hasil
echo "<b>Perilaku Burung: </b><br/>";
echo $burung->Makan();
echo $burung->Bergerak();
echo $burung->Beranak();

echo "<br/>";

echo "<b>Perilaku Kambing: </b><br/>";
echo $kambing->Makan();
echo $kambing->Bergerak();
echo $kambing->Beranak();
?>