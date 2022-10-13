<?php

  class Siswa {
      public $nama           = "Dimas";
      public $kelas          = "11";
      protected $jurusan  = "RPL";
      private $nis        = "55555";
      function tampilkanDataSiswa(){
          echo "nama    : ->nama    <br>";
          echo "kelas   : ->kelas   <br>";
          echo "jurusan : ->jurusan <br>";
          echo "nis     : ->nis     <br>";
      }
  }  
  
  class rpl extends siswa{
      
  }
  
   $siswa1 = new Siswa("");
  $siswa1->tampilkanDataSiswa();
?>  