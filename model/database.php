<?php

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "market";
	var $con;

	function __construct(){
		$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	function tampil_data(){
		$data = mysqli_query($this->con,"select * from data");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($merek, $harga, $email){
		mysqli_query($this->con,"insert into data values('', '$merek', '$harga', '$email')");
	}
	function hapus($id){
		mysqli_query($this->con,"delete from data where ID ='$id'");
	}
	function edit($id){
		$data = mysqli_query($this->con,"select * from data where ID ='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($merek, $harga, $email){
		mysqli_query($this->con, "update data set Merek='$merek',Harga='$harga',
		Email='$email' where ID ='$id'");
	}
}