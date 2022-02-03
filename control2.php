<?php
    class control2 {
        
        public function __construct() {
            $this->con = new PDO("mysql:host=localhost;dbname=kotaksaran","root","");
        }


public function saran($id_p,$pelapor,$isi_saran) {
        $query = $this->con->prepare("INSERT INTO kotak_saran (id_p,pelapor,isi_saran) VALUES ('$id_p','$pelapor','$isi_saran')");
        $query->execute();
        if(!$query){
            return "Input Gagal";   
        }else{
            return "Input Sukses";
        }
    }

    public function editp($id_p) {
        $query = $this->con->prepare("SELECT * FROM kotak_saran WHERE id_p = '$id_p'");
        $query->execute();
        return $query;
    }

    public function updatep($id_p,$pelapor,$isi_saran) {
        $query = $this->con->prepare("UPDATE kotak_saran SET pelapor = '$pelapor', isi_saran = '$isi_saran' WHERE id_p = '$id_p'");
        $query->execute();
        if(!$query){
            return "Update Gagal";
        }else{
            return "Update Sukses";
        }
    }
    
    public function readp() {
        $query = $this->con->prepare("SELECT * FROM kotak_saran");
        $query->execute();
        return $query;
    }

    public function deletep($id_p) {
        $query = $this->con->prepare("DELETE FROM kotak_saran WHERE id_p = '$id_p'");
        $query->execute();
    }
}
?>