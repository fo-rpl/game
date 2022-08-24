<?php
$judul=$_POST['judul'];
$data=$_POST['isidata'];
$deskripsi=$_POST['metadeskripsi'];
$keyword=$_POST['metakeyword'];
 
    $file=fopen('draft.data.js','w');
 
 fwrite($file,'
 document.getElementById("name").value=`'.$judul.'`;
 document.getElementById("texta").value=`'.$data.'`;
 document.getElementById("metadeskripsi").value=`'.$deskripsi.'`;
 document.getElementById("metakeyword").value=`'.$keyword.'`;
 ');
 fclose($file);
 ?>