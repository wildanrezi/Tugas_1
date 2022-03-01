#!/usr/bin/php 

<?php
 echo "Selamat Datang!\n";

  //for($i=1; $i<=; $i++) {
  // echo "urutan ke-$i\n";
  //}

  //shell_exec('touch index.html');
  //shell_exec('echo "<h1>Hai, apa kabar</h1>" > index.html');

  //$output = shell_exec(ls -lasrt');
  //echo "$output";

  $nama = readline('Nama Anda : ');
  $nim = readline('NIM Anda : ');
  $kelas = readline('Kelas Anda : ');
  echo "Hai, apa kabar $nama\n";
  echo "NIM kamu adalah $nim\n";
  echo "Kelasmu di $kelas\n";

  $arg1 = $srgv[1];
  $arg0 = $argv[0];
  echo "$arg1, berkasmu bernama $arg0\n\n";
 ?>