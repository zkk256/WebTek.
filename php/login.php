    <?php
	$username=$_POST['kullaniciAdi'];
	$password=$_POST['parola'];
	
	if($username=="b201210071@sakarya.edu.tr" &&$password=="b201210071"){
	 echo " Hoşgeldiniz ".$_POST['kullaniciAdi']. " adlı kullanıcı";
	
	}else{
		header("Location: ../login.html");
	}
    ?>