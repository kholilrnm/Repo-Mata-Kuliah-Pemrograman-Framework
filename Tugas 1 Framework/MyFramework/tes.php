<?php

class Motor{
 
   protected $nama="kholel"; // buat protected property
 	

   public function jalan() { // buat public method
   	
   	echo $this->nama;
   	return "Brian Abraham";

   }



 }
 
$aksi_motor = new motor(); // buat objek dari class motor (instansiasi)
// echo $aksi_motor->nama; // jalankan property dari luar class motor
echo $aksi_motor->jalan(); // jalankan method dari class motor

/**
 * 
 */
class baru extends Motor
{
	public function tes()
	{
		$this->nama();
	}
}

$alah = new baru();

$alah->tes();