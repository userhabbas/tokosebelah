<?php

//Koneksi dengan nama database e-commerce
$koneksi = mysqli_connect("localhost","root","","tokosebelah");

//Cek Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>