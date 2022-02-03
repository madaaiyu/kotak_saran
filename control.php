<?php
    class control {
        
        public function __construct() {
            $this->con = new PDO("mysql:host=localhost;dbname=kotaksaran","root","");
        }
        
        public function register($id,$nama,$alamat,$sekolah,$kelas) {
            $query = $this->con->prepare("INSERT INTO peserta_didik (id,nama,alamat,sekolah,kelas) VALUES ('$id','$nama','$alamat','$sekolah','$kelas')");
            $query->execute();
            if(!$query){
                return "Input Gagal";   
            }else{
                return "Input Sukses";
            }
        }

        public function editsiswa($id) {
            $query = $this->con->prepare("SELECT * FROM peserta_didik WHERE id = '$id'");
            $query->execute();
            return $query;
        }

        public function updatesiswa($id,$nama,$alamat,$sekolah,$kelas) {
            $query = $this->con->prepare("UPDATE peserta_didik SET nama = '$nama', alamat = '$alamat', sekolah = '$sekolah', kelas = '$kelas' WHERE id = '$id'");
            $query->execute();
            if(!$query){
                return "Update Gagal";
            }else{
                return "Update Sukses";
            }
        }
        
        public function readsiswa() {
            $query = $this->con->prepare("SELECT * FROM peserta_didik");
            $query->execute();
            return $query;
        }

        public function deletesiswa($id) {
            $query = $this->con->prepare("DELETE FROM peserta_didik WHERE id = '$id'");
            $query->execute();
        }
    }
?>