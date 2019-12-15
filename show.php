<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Post Demo</title>
<style type="text/css">
    body {
	background-color: #FFF;
	background-image: url(0.png);
	font-family: "Comic Sans MS", cursive;
	font-size: large;
}
    .y {
	text-align: center;
}
    .obj {
	font-weight: bold;
}
    .n {
	font-weight: bold;
}
.g {
	font-weight: bold;
}
.obj {
	font-size: large;
}
.g {
	font-weight: bold;
}
</style>
</head>
    <body tracingsrc="OTOP1.jpg" tracingopacity="100">
   
    <center>
    <span class="obj">    ปริซึมสี่เหลี่ยมมุมฉาก</span>
<table width="607" border="0" cellpadding="3" cellspacing="2">
  <tr>
    <td width="174" bgcolor="#C1CBCB">กว้าง</td>
    <td width="415" bgcolor="#F2F5F5"><div align="left">
    
	
   <?php
   
 
	  $prefix = "ปริซึมสี่เหลี่ยมมุมฉาก";
        $A= $_POST['name_txt'];
		$b=$A*3;
		$E= pow($b,0.33333);
		$W= $E/2;
		echo round( $W ,2 );
		$jedi = "   หน่วย";
		echo $jedi;
		

   
    ?>
    </div></td>
  
  </tr>
  <tr>
  </center>
</table>
    <center> <table width="607" border="0" cellpadding="3" cellspacing="2">
 <tr>
    <td width="174" bgcolor="#C1CBCB">ยาว</td>
    <td width="415" bgcolor="#F2F5F5"><div align="left">
   <?php
 
	   $prefix="ปริซึมสี่เหลี่ยมมุมฉาก";
   
        $A= $_POST['name_txt'];
		$c=$A*3;
		$l= pow($b,0.33333);
		echo round( $l ,2 );
		$jedi = "   หน่วย";
		echo $jedi;
		
    ?>
    </div></td>
  
  </tr>
  <tr>
  </center>
  </table>
  
   <center> <table width="607" border="0" cellpadding="3" cellspacing="2">
 <tr>
    <td width="174" bgcolor="#C1CBCB">สูง</td>
    <td width="415" bgcolor="#F2F5F5"><div align="left">
   <?php
   
       
	   $prefix="ปริซึมสี่เหลี่ยมมุมฉาก";
    $A= $_POST['name_txt'];
		$b=$A/9;
		$b= pow($b,0.33333);
		$m =$b*2;
		echo round( $m ,2 );
		$jedi = "   หน่วย";
		echo $jedi;
		
    ?>
    </div></td>
  
  </tr>
  <tr>
  </center>
  </table>
   <center> <table width="607" border="0" cellpadding="3" cellspacing="2">
 <tr>
    <td width="174" bgcolor="#C1CBCB">พื้นที่ผิวที่น้อยที่สุด</td>
    <td width="415" bgcolor="#F2F5F5"><div align="left">
   <?php
   
	   $prefix="ปริซึมสี่เหลี่ยมมุมฉาก";
        $A= $_POST['name_txt'];
		$t=($W*4*$W)+(6*$W*$m);
		$P = round( $t ,2 );
		echo $P;
		$jedi = "   ตารางหน่วย";
		echo $jedi;
	
    ?>
    </div></td>

  </tr>
  <tr>
  </center>
  </table>
  <center>
  </table>
   <span class="y">
   <center> 			
   <span class="n">ทรงกระบอก</span></span>
   <table width="607" border="0" cellpadding="3" cellspacing="2">
  <tr>
    <td width="174" bgcolor="#C1CBCB">รัศมี</td>
    <td width="415" bgcolor="#F2F5F5"><div align="left">
   <?php
 
	   $prefix="ทรงกระบอก";
        $A= $_POST['name_txt'];
		$d=$A/(2*3.14);
		$d =pow ($d,0.33333);
		echo round( $d ,2 );
		$jedi = "   หน่วย";
		echo $jedi;
		
    ?>
    </div></td>
  
  </tr>
  <tr>
  </center>
</table>
  <center>
  </table>
   <center> <table width="607" border="0" cellpadding="3" cellspacing="2">
 <tr>
    <td width="174" bgcolor="#C1CBCB">สูง</td>
    <td width="415" bgcolor="#F2F5F5"><div align="left">
   <?php
  
	   $prefix="ทรงกระบอก";
        $A= $_POST['name_txt'];
		$y=$d*2;
		$As = round( $y ,2 );
		echo $As;
		$jedi = "   หน่วย";
		echo $jedi;
	
    ?>
    </div></td>
  
  </tr>
  <tr>
  </center>
  </table>
  <center> <table width="607" border="0" cellpadding="3" cellspacing="2">
 <tr>
    <td width="174" bgcolor="#C1CBCB">พื้นที่ผิวที่น้อยที่สุด</td>
    <td width="415" bgcolor="#F2F5F5"><div align="left">
   <?php
   
	   $prefix="ทรงกระบอก";
        $A= $_POST['name_txt'];
		$p=6*3.14*$d*$d;
		echo round( $p ,2 );
		$jedi = "   ตารางหน่วย";
		echo $jedi;
		
    ?>
    </div></td>
  
  </tr>
  <tr>
  </center>
  </table>
  <center> 
  <p><span class="g"><span class="g">บรรจุภัณฑ์ที่ประหยัดวัสดุ</span>ในการผลิตมากที่สุด</span></p>
  <table width="607" border="0" cellpadding="3" cellspacing="2">
 <tr>
    <td width="174" bgcolor="#C1CBCB">บรรจุภัณฑ์</td>
    <td width="415" bgcolor="#F2F5F5"><div align="left">
	<?php 
	if ($As<$P)
	{
		echo "ทรงกระบอก";
		}
	else if ($As>$P){ echo "ปริซึมสี่เหลี่ยมมุมฉาก";}
	else echo"ไม่ทราบ";
	?>
    </div></td>
  
  </tr>
  <tr>
  </center>
  </table>
</body>
</html>