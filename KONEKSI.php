<?php
  
  /* Ini adalah variable koneksi, yang digunakan untuk mengkoneksikan database ke halaman web kita.
    adapun beberapa parameter yang dibutuhkan untuk menjalankan koneksi dengan baik yaitu    
    1. Host kita, jika teman-teman menggunakan xampp atau sejenisnya untuk menjalankan server maka teman-teman bisa tuliskan localhost
  */
  $koneksi = mysqli_connect('localhost', 'root', '', 'db_crud');

?>