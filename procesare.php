<!DOCTYPE html>
<html>
<head>
	
	<title>Procesare formular</title>
	<link rel="icon" href="img/iconita.ico">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=latin-ext" rel="stylesheet" />
	<link href="css/new 1.css" rel="stylesheet" type="text/css" />
	<link href="css/stiluri (1).css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://infoacademy.net/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="https://infoacademy.net/scripts/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="https://infoacademy.net/scripts/owl.carousel.min.js"></script>
	<script type="text/javascript" src="https://infoacademy.net/scripts/menu/mmenu.js"></script>
	<script type="text/javascript" src="https://infoacademy.net/scripts/noty.min.js"></script>
	<script type="text/javascript" src="https://infoacademy.net/scripts/scrollreveal.min.js"></script>
	<script type="text/javascript" src="https://infoacademy.net/scripts/numscroller.js"></script>
	<script type="text/javascript" src="https://infoacademy.net/scripts/script.js?v=1621624412"></script>
	
<<body>
<div id="preheader" class="anim">
	<div class="inside clearfix anim">
		<a href="mailto:rpub.cissb@mapn.ro;" class="anim"><i class="fa fa-envelope"></i>rpub.cissb@mapn.ro</a>
		<a href="tel:+4 (0) 269 233 930" class="anim"><i class="fa fa-phone"></i> <a href="tel:+4(0)269233930">+4 (0) 269 233 930</a>
		<a href="Contact.php" class="anim"><i class="fa fa-clock-o"" aria-hidden="true"></i>Luni - Vineri / 07:30 - 15:30</a>   
	</div>
</div>

<div id="header">
	<div class="inside clearfix">
		<img  src="img/logo.png" alt="Școala de Instruire pentru Comunicații, Tehnologia Informației și Apărare Cibernetică" width="140px" height="140px" >
			 <ul class="navbar-nav ml-auto">
				<div class="alice">
				<a href="Contact.php">Contact</a>
				</div>
			</ul>
			<ul class="navbar-nav ml-auto">
				<div class="alice">
					<a href="Cariere_IT.php">Cariere IT</a>
				</div>
			</ul>
			
			<ul class="navbar-nav ml-auto">
				<div class="alice">
					<div class="dropdown">
						<button class="dropbtn" onclick="document.location='Cursuri.php'">Cursuri IT
							<i class="fa fa-caret-down"></i>
						</button>
							<div class="dropdown-content">
								<a href="Cursuri_Retele_de_calculatoare.php ">Rețele de calculatoare</a> 
								<a href="Cursuri_Administrare_sisteme_de_operare.php">Administrare sisteme de operare </a>
								<a href="Cursuri_Aparare_cibernetica.php">Apărare cibernetică</a>
							</div>
					</div>
				</div>
			</ul>
			<ul class="navbar-nav ml-auto">
				<div class="alice">
				<a href="index.php">Acasă</a>
				</div>
			</ul>
		
	</div>
</div
<?php

	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$email=$_POST['email'];
	$telefon=$_POST['telefon'];
	$unitate_militara=$_POST['unitatea_militara'];
	$cnp=$_POST['cnp'];
	$denumire_curs=$_POST['denumire_curs'];

	$eroare=0;
	/* daca variabila $eroare a ramas la valoarea 0,
	nu au fost erori si datele din formular se vor afisa */
	
	// Atrubuirea de valori pentru variabila $arome de suc
	if ($denumire_curs==1)
	{
		$denumire_curs="Introducere in retele";
	}
	if ($denumire_curs==2)
	{
		$denumire_curs="Rutare si comutare";
	}
	if ($denumire_curs==3)
	{
		$denumire_curs="Retele WAN";
	}
	if ($denumire_curs==4)
	{
		$denumire_curs="Introducere administrare sisteme informatice";
	}
	if ($denumire_curs==5)
	{
		$denumire_curs="Introducere server Windows";
	}
	if ($denumire_curs==5)
	{
		$denumire_curs="";
	}
	// Realizarea conexiunii cu serverul SQL, respectiv cu baza de date
	// daca nu a fost gasita nicio eroare se face adaugarea datelor in baza de date
	if ($eroare==0)
	{
	
$AdresaBazaDate="localhost";
$UtilizatorBazaDate="root";
$ParolaBazaDate="";
$NumeBazaDate="curs it";

$conexiune=mysqli_connect($AdresaBazaDate,$UtilizatorBazaDate,$ParolaBazaDate,$NumeBazaDate)
					or die("Nu se poate realiza conectarea la serverul MySQL");

					
$adaugare_inregistrare="INSERT INTO `inregistrari_curs` (nume, prenume, email, telefon, unitate_militara, cnp, denumire_curs ) 
						VALUES ('$nume','$prenume','$email','$telefon','$unitate_militara','$cnp', '$denumire_curs')"; 


	// Se executa comanda SQL de adaugare a inregistrarii
	mysqli_query($conexiune,$adaugare_inregistrare) or die (mysqli_error($conexiune));

	//Se inchide conexiunea cu baza de date si serverul SQL
	mysqli_close($conexiune);
	echo "<center><font face='Berlin Sans FB' size='8'><br><br><br>
Felicitari $nume $prenume te-ai inregistrat cu succes la cursul $denumire_curs!</font></center>";
	}
?>


<div id="footer">
	<div class="inside clearfix">
        <div class="cols clearfix">
            <div class="col">
                <p>CARIERA TA ÎNCEPE ACUM!</p>
                <div class="partners clearfix">
    
                    <img src="img/Cisco1.png" alt="Cisco" />
                </div>
            </div>
            <div class="col">
                <h4>Cursuri</h4>
                <ul>
                    <li><a href="Cursuri_Retele_de_calculatoare.php" class="anim" title=" curs Retele de calculatoare">Rețele de calculatoare</a></li>
                    <li><a href="Cursuri_Administrare_sisteme_de_operare.php" class="anim" title="Administrare sisteme de operare">Administrare sisteme de operare</a></li>
                     <li><a href="Cursuri_Aparare_cibernetica.php" class="php" title="Aparare cibernetica">Apărare cibernetică</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Informații utile</h4>
                <ul><li><a href="Contact.php" class="anim" title="Contact">Contact</a></li></ul>
            </div>
		</div>
	</div>
</body>
</head>
</html>