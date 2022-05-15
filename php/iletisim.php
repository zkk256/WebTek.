<?php
echo "Mesajınız alınmıştır!"."<br><br>";
echo "ADI SOYADI: ".$_POST['adi'] ."&nbsp;" .$_POST['soyadi']."<br><br>";



echo "CİNSİYETİ: ".$_POST['cinsiyet']."<br><br>";

echo "YABANCI DİLLER: "."<br>";
		if(isset($_POST['ingilizce']))
		{
			echo $_POST['ingilizce']."<br>";
		}
		if(isset($_POST['almanca']))
		{
			echo $_POST['almanca']."<br>";
		}
		if(isset($_POST['fransizca']))
		{
			echo $_POST['fransizca']."<br>";
		}
		if(isset($_POST['cince']))
		{
			echo $_POST['cince']."<br>";
		}
		if(isset($_POST['diger']))
		{
			echo $_POST['diger']."<br>";
		}

echo "<br>"."YAŞADIĞI ŞEHİR: ".$_POST['sehir']."<br><br>";

echo "DOSYA: ";
	if(isset($_POST['dosya']))
	{
	echo $_POST['dosya']."<br>";
	}
?>
	
