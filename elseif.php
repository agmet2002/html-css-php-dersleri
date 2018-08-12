<?php
$sayi =3;
if ($sayi<30) {
	echo 'sayı 30dan küçük'.'<br>';
}
	

elseif ($sayi>30) {
	echo 'sayi 30 dan büyük';
}
$sayi =1358;
if ($sayi %2 ==0) {
	echo 'sayı çift'.'<br>';
}
for ($i=1; $i < 30; $i +=2) { 
	echo $i.'<br>';
	$i ++;
}
$dizi =array('kod','adı',2023 );

echo $dizi[0].$dizi[1].$dizi[2].'<br>';
foreach ($dizi as $eleman) {
	echo $eleman.'<br>';

}

$rasgelesayi = rand(1,10);
echo $rasgelesayi.'<br>';

$sayilar = array(3,5,2,9,7,0 );
sort($sayilar);//sayıları küçüktn büyüge sıralar
foreach ($sayilar as $sayi ) {
	echo $sayi;
}
echo'<br>';
rsort($sayilar);//sayıları büyükten küçüğe sırallar
foreach ($sayilar as $sayi ) {
	echo $sayi ;
}
echo'<br>';
echo ''
?>