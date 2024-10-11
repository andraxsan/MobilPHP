<?php
class Mobil
{
    public $nama;
    public $merk;

    function __construct($nama, $merk)
    {
        $this->nama = $nama;
        $this->merk = $merk;
    }

    function cetakInfo()
    {
        return "Nama: " . $this->nama . ", Merk: " . $this->merk;
    }
}

class MobilSport extends Mobil
{
    private $speed;

    function __construct($nama, $merk, $speed)
    {
        parent::__construct($nama, $merk);
        $this->speed = $speed;
    }

    function cetakInfo()
    {
        return parent::cetakInfo() . ", Speed Maks: " . $this->speed . " km/jam";
    }

    function getSpeed()
    {
        return $this->speed;
    }

    function turbo()
    {
        return "Turbo diaktifkan! Speed meningkat!";
    }
}

class CityCar extends Mobil
{
    private $modelMobil;

    function __construct($nama, $merk, $modelMobil)
    {
        parent::__construct($nama, $merk);
        $this->modelMobil = $modelMobil;
    }

    function cetakInfo()
    {
        return parent::cetakInfo() . ", Model Mobil: " . $this->modelMobil;
    }

    function getModelMobil()
    {
        return $this->modelMobil;
    }

    function irit()
    {
        return "Mobil ini irit bahan bakar!";
    }

    function sensor()
    {
        return "Sensor parkir aktif!";
    }
}

$mobilSport = new MobilSport("Ferrari", "Ferrari", 350);
echo $mobilSport->cetakInfo() . "<br/>";
echo $mobilSport->turbo() . "<br/>";
echo "<br/>";
$cityCar = new CityCar("Honda Jazz", "Honda", "Hatchback");
echo $cityCar->cetakInfo() . "<br/>";
echo $cityCar->irit() . "<br/>";
echo $cityCar->sensor() . "<br/>";

?>