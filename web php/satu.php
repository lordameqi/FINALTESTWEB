<?php


$nilaiku;


?>
<html>
<head>
 <title>Form Sederhana Rachmad Fadillah</title>
</head>
<body>
<h2>Form sederhana Rachmad Fadillah</h2>
 <form method = 'post' action= "">
  <table>
   <tr>
    <td>Nilai</td>
    <td>:</td>
    <td><input type='number' name='nilai'></td>
   </tr>
  
    <td></td>
    <td></td>
    <td><input type='submit' value='KIRIM'></td>
   </tr>
  </table>  
 </form>
</body>
</html>

<?php 
  if($_SERVER['REQUEST_METHOD'] == "POST"){
 
    $nilai = $_POST['nilai'];
   
 
    // kalau mau kita juga bisa menambahkan validasi form
    if(empty($nilai)){
      echo "<p>Nilai belum diisi</p>";
    }

  function hasil(int $nilaia){
	if ($nilaia > 60 && $nilaia <= 80 ) {
		return "Memuaskan";
	}elseif ($nilaia > 80 && $nilaia <= 90 ) {
		return "Sangat Memuaskan";
	}elseif ($nilaia > 90 && $nilaia <= 100 ) {
		return "Terpuji";
	}elseif ($nilaia < 60) {
		return "tidak lulus";
	}
	else{
		return "Nilai tidak valid";
	}

}

 $a = hasil($nilai);
 echo $a;
  
  }

?>