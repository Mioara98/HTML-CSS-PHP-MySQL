<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ro" xml:lang="ro">
<head>

	<title>Test</title>
	<link rel="icon" href="img/iconita.ico">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=latin-ext" rel="stylesheet" />
	<link href="css/new 1.css" rel="stylesheet" type="text/css" />
	<link href="css/stiluri (1).css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="css/jquery.min.js"></script>
	<script type="text/javascript" src="css/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="css/owl.carousel.min.js"></script>
	<script type="text/javascript" src="css/mmenu.js"></script>
	<script type="text/javascript" src="css/noty.min.js"></script>
	<script type="text/javascript" src="css/scrollreveal.min.js"></script>
	<script type="text/javascript" src="css/numscroller.js"></script>
	<script type="text/javascript" src="css/script.js"></script>
</head>
<body>
<div id="preheader" class="anim">
	<div class="inside clearfix anim">
		<a href="mailto:rpub.cissb@mapn.ro;" class="anim"><i class="fa fa-envelope"></i>rpub.cissb@mapn.ro</a>
		<a href="tel:0721259520" class="anim"><i class="fa fa-phone"></i> <a href="tel:+4(0)269233930">+4 (0) 269 233 930</a>
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
</div>
<br><br><br><br><br><br>
<div id="wrapper">
<center><font face="Andalus" size="8">PUNCTAJUL TĂU ESTE DE</font></center><br>

<?php
try {
	
	  
  if (isset($_POST['unu']))
  {
$answer1= $_POST['unu'];
  }
  else{
		$answer1="";
	}
  
  if (isset($_POST['doi']))
  {
$answer2= $_POST['doi'];
  }
   else{
		$answer2="";
	}
  
  if (isset($_POST['trei']))
  {
$answer3= $_POST['trei'];
  }
  else{
		$answer3="";
	}
  
  if (isset($_POST['patru']))
  {
$answer4= $_POST['patru'];
  }
  else{
		$answer4="";
	}
  
  if (isset($_POST['cinci']))
  {
$answer5= $_POST['cinci'];
  }
  else{
		$answer5="";
	}
  
  if (isset($_POST['sase']))
  {
$answer6= $_POST['sase'];
  }
  else{
		$answer6="";
	}

  if (isset($_POST['sapte']))
  {
$answer7= $_POST['sapte'];
  }
  else{
		$answer7="";
	}
  
  if (isset($_POST['opt']))
  {
$answer8= $_POST['opt'];
  }
  else{
		$answer8="";
	}
  
  if (isset($_POST['noua']))
  {
$answer9= $_POST['noua'];
  }
  else{
		$answer9="";
	}
  
  if (isset($_POST['zece']))
  {
$answer10= $_POST['zece'];
  }
  else{
		$answer10="";
	}
  
  if (isset($_POST['unsprezece']))
  {
$answer11= $_POST['unsprezece'];
  }
  else{
		$answer11="";
	}
  
  if (isset($_POST['douasprezece']))
  {
$answer12= $_POST['douasprezece'];
  }
  else{
		$answer12="";
	}
    
  if (isset($_POST['treisprezece']))
  {
$answer13= $_POST['treisprezece'];
  }
  else{
		$answer13="";
	}
  
  if (isset($_POST['paisprezece']))
  {
$answer14= $_POST['paisprezece'];
  }
  else{
		$answer14="";
	}
  
if (isset($_POST['cincisprezece'])) 
  {
$answer15= $_POST['cincisprezece'];
  }
  else{
		$answer15="";
	}
  
  if (isset($_POST['saisprezece']))
  {
$answer16= $_POST['saisprezece'];
  }
  else{
		$answer16="";
	}
  
   if (isset($_POST['saptesprezece']))
  {
$answer17= $_POST['saptesprezece'];
  }
  else{
		$answer17="";
	}
  
   if (isset($_POST['optisprezece']))
  {
$answer18= $_POST['optisprezece'];
  }
  else{
		$answer18="";
	}
  
   if (isset($_POST['nouasprezece']))
  {
$answer19= $_POST['nouasprezece'];
  }
  else{
		$answer19="";
	}
  
   if (isset($_POST['douazeci']))
  {
$answer20= $_POST['douazeci'];
  }
  else{
		$answer20="";
	}
  
   if (isset($_POST['douazeci_si_unu']))
  {
$answer21= $_POST['douazeci_si_unu'];
  }
  else{
		$answer21="";
	}
  
   if (isset($_POST['douazeci_si_doi']))
  {
$answer22= $_POST['douazeci_si_doi'];
  }
  else{
		$answer22="";
	}
  
   if (isset($_POST['douazeci_si_trei']))
  {
$answer23= $_POST['douazeci_si_trei'];
  }
  
  else{
		$answer23="";
	}
  
   if (isset($_POST['douazeci_si_patru']))
  {
$answer24= $_POST['douazeci_si_patru'];
  }
  else{
		$answer24="";
	}
  
   if (isset($_POST['douazeci_si_cinci']))
  {
$answer25= $_POST['douazeci_si_cinci'];
  }
  else{
		$answer25="";
	}
  
   if (isset($_POST['douazeci_si_sase']))
  {
$answer26= $_POST['douazeci_si_sase'];
  }
else{
		$answer26="";
	}
  
   if (isset($_POST['douazeci_si_sase']))
  {
$answer27= $_POST['douazeci_si_sapte'];
  }
  else{
		$answer27="";
	}
  
   if (isset($_POST['douazeci_si_opt']))
  {
$answer28= $_POST['douazeci_si_opt'];
  }
  else{
		$answer28="";
	}
  
   if (isset($_POST['douazeci_si_noua']))
  {
$answer29= $_POST['douazeci_si_noua'];
  }
  else{
		$answer29="";
	}
  
   if (isset($_POST['treizeci']))
  {
$answer30= $_POST['treizeci'];
  }
  else{
		$answer30="";
	}
  
   if (isset($_POST['treizeci_si_unu']))
  {
$answer31= $_POST['treizeci_si_unu'];
  }
  else{
		$answer31="";
	}
  
   if (isset($_POST['treizeci_si_doi']))
  {
$answer32= $_POST['treizeci_si_doi'];
  }
  else{
		$answer32="";
	}
 
   if (isset($_POST['treizeci_si_trei']))
  {
$answer33= $_POST['treizeci_si_trei'];
  }
  else{
		$answer33="";
	}
  
   if (isset($_POST['treizeci_si_patru']))
  {
$answer34= $_POST['treizeci_si_patru'];
  }
  else{
		$answer34="";
	}
  
   if (isset($_POST['treizeci_si_cinci']))
  {
$answer35= $_POST['treizeci_si_cinci'];
  }
  else{
		$answer35="";
	}
  
   if (isset($_POST['treizeci_si_sase']))
  {
$answer36= $_POST['treizeci_si_sase'];
  }
  else{
		$answer36="";
	}
  
  if (isset($_POST['treizeci_si_sapte']))
  {
$answer37= $_POST['treizeci_si_sapte'];
  }
  else{
		$answer37="";
	}
  
  if (isset($_POST['treizeci_si_opt']))
  {
$answer38= $_POST['treizeci_si_opt'];
  }
  else{
		$answer38="";
	}
  
  if (isset($_POST['treizeci_si_noua']))
  {
$answer39= $_POST['treizeci_si_noua'];
  }
  else{
		$answer39="";
	}
  
  if (isset($_POST['patruzeci']))
  {
$answer40= $_POST['patruzeci'];
  }
  else{
		$answer40="";
	}
  
  if (isset($_POST['patruzeci_si_unu']))
  {
$answer41= $_POST['patruzeci_si_unu'];
  }
  else{
		$answer41="";
	}
  
  if (isset($_POST['patruzeci_si_doi']))
  {
$answer42= $_POST['patruzeci_si_doi'];
  }
  else{
		$answer42="";
	}
  
  if (isset($_POST['patruzeci_si_trei']))
  {
$answer43= $_POST['patruzeci_si_trei'];
  }
  else{
		$answer43="";
	}
  
  if (isset($_POST['patruzeci_si_patru']))
  {
$answer44= $_POST['patruzeci_si_patru'];
  }
  else{
		$answer44="";
	}
  
  if (isset($_POST['patruzeci_si_cinci']))
  {
$answer45= $_POST['patruzeci_si_cinci'];
  }
  else{
		$answer45="";
	}
  
  if (isset($_POST['patruzeci_si_sase']))
  {
$answer46= $_POST['patruzeci_si_sase'];
  }
  else{
		$answer46="";
	}
  
  if (isset($_POST['patruzeci_si_sapte']))
  {
$answer47= $_POST['patruzeci_si_sapte'];
  }
  else{
		$answer47="";
	}
  
  if (isset($_POST['patruzeci_si_opt']))
  {
$answer48= $_POST['patruzeci_si_opt'];
  }
  else{
		$answer48="";
	}
  
  if (isset($_POST['patruzeci_si_noua']))
  {
$answer49= $_POST['patruzeci_si_noua'];
  }
  else{
		$answer49="";
	}
  
  if (isset($_POST['cincizeci']))
  {
$answer50= $_POST['cincizeci'];
  }
else{
		$answer50="";
	}
	
	$query = 'SELECT COUNT(*) FROM questions';
$scor = 0;
if ($answer1 == "C"){$scor++;}
if ($answer2== "B"){$scor++;}
if ($answer3 == "A"){$scor++;}
if ($answer5 == "A"){$scor++;}
if ($answer6 == "A"){$scor++;}
if ($answer7 == "A"){$scor++;}
if ($answer8 == "A"){$scor++;}
if ($answer9 == "C"){$scor++;}
if ($answer10 == "B"){$scor++;}
if ($answer11 == "C"){$scor++;}
if ($answer12 == "C"){$scor++;}
if ($answer13 == "B"){$scor++;}
if ($answer14 == "B"){$scor++;}
if ($answer15 == "C"){$scor++;}
if ($answer16 == "C"){$scor++;}
if ($answer17 == "B"){$scor++;}
if ($answer18 == "C"){$scor++;}
if ($answer19 == "A"){$scor++;}
if ($answer20 == "C"){$scor++;}
if ($answer21 == "A"){$scor++;}
if ($answer22 == "B"){$scor++;}
if ($answer23 == "C"){$scor++;}
if ($answer24 == "A"){$scor++;}
if ($answer25 == "C"){$scor++;}
if ($answer26 == "A"){$scor++;}
if ($answer27 == "C"){$scor++;}
if ($answer28 == "A"){$scor++;}
if ($answer29 == "B"){$scor++;}
if ($answer30 == "B"){$scor++;}
if ($answer31 == "A"){$scor++;}
if ($answer32 == "A"){$scor++;}
if ($answer33 == "B"){$scor++;}
if ($answer34 == "C"){$scor++;}
if ($answer35 == "A"){$scor++;}
if ($answer36 == "C"){$scor++;}
if ($answer37 == "C"){$scor++;}
if ($answer38 == "A"){$scor++;}
if ($answer39 == "C"){$scor++;}
if ($answer40 == "A"){$scor++;}
if ($answer41 == "A"){$scor++;}
if ($answer42 == "B"){$scor++;}
if ($answer43 == "A"){$scor++;}
if ($answer44 == "B"){$scor++;}
if ($answer45 == "A"){$scor++;}
if ($answer46 == "C"){$scor++;}
if ($answer47 == "A"){$scor++;}
if ($answer48 == "C"){$scor++;}
if ($answer49 == "B"){$scor++;}
if ($answer50 == "B"){$scor++;}

	}  catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
$scortotal=$scor*2;

echo "<center><font face='Berlin Sans FB' size='8'><br>
$scortotal/100</font></center>";
?>

<br><br><br>
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
</html>
