<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		var $conn;
		function __construct(){
			$this->conn = mysqli_connect("localhost", "root", "", "db_jurnal10");
			//$db = mysqli_select_db("db_jurnal10");//buatlah koneksi seperti modul 9 kemarin	
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			$query = "SELECT * FROM t_jurnal10";//query select*from 
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			$query = "SELECT * FROM t_jurnal10 WHERE nim='$nim'";//query select mahasiswa berdasarkan nim
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $wisata){
			$query = "UPDATE t_jurnal10 SET nim='$nim',nama='$nama',angkatan='$angkatan',fakultas='$fakultas', prodi='$prodi', film='$film', wisata='$wisata' WHERE nim='$nim'";//query update nim, nama, angkatan, fakultas, prodi
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			$query = "DELETE FROM t_jurnal10 WHERE nim='$nim'";//query delete berdasarkan nim
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $wisata){
			$query = "INSERT INTO t_jurnal10 VALUES ('$nim', '$nama', '$angkatan', '$fakultas', '$prodi', '$film', '$wisata')";//query insert nim,nama, angkatan, fakultas, prodi
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>