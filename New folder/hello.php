<?php
echo "hello word <br>";/* <br> xuong dong*/
echo "string <br>"; 
echo "string <br> "; 
$x=1 ;                # "$"truoc khai bao bien
$y="nghia";
echo "$x"."$y <br>";
$st1="tin hoc ";
$st2="khong hoc";
$st=$st1.$st2;// "." noi chuoi
echo $st;
echo "<br> ------------------<br>";
$a=2;
$b=2;

echo  "c=".$c=$a>$b?$a:$b ."<br>";

if ($a>$b) {
	echo "a lon hon b, a= ".$a;
	// code ......
}
else{
	echo "b lon hon a, b= ".$b."<br>";
}

if ($a===2)
	echo "a= ".$a;
echo "<br>---------------";
$c="2a";
switch ($c) {
	case '2':
		echo " <br> aaaa <br>";
		break;
	case '2a':
		echo " =2";
		break;
}
//khai bao mang
$a= array('0','1','2','3');
echo "<br>".$a[0];
?>