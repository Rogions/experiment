<html>
	<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
	<?php
//index.php

$s2 = '';
$s3 = '';
$s4 = '';
$s5 = '';
$s6 = '';
$s7 = '';
$s8 = '';
$s9 = '';
$s10 = '';
$s11 = '';
$s12 = '';
$s13 = '';
$s14 = '';
$s15 = '';
$s16 = '';
$s17 = '';
$s18 = '';
$s19 = '';
$s20 = '';
$s21 = '';
$Education = '';
$Instrument = '';
$Listen = '';
$wroteMusic = '';



$s2 = $_POST["s2"];
$s3 = $_POST["s3"];
$s4 = $_POST["s4"];
$s5 = $_POST["s5"];
$s6 = $_POST["s6"];
$s7 = $_POST["s7"];
$s8 = $_POST["s8"];
$s9 = $_POST["s9"];
$s10 = $_POST["s10"];
$s11 = $_POST["s11"];
$s12 = $_POST["s12"];
$s13 = $_POST["s13"];
$s14 = $_POST["s14"];
$s15 = $_POST["s15"];
$s16 = $_POST["s16"];
$s17 = $_POST["s17"];
$s18 = $_POST["s18"];
$s19 = $_POST["s19"];
$s20 = $_POST["s20"];
$s21 = $_POST["s21"];
$Education = $_POST["Education"];
$Instrument = $_POST["Instrument"];
$Listen = $_POST["Listen"];
$wroteMusic = $_POST["wroteMusic"];


$file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   $s2,
   $s3,
   $s4,
   $s5,
   $s6,
   $s7,
   $s8,
   $s9,
   $s10,
   $s11,
   $s12,
   $s13,
   $s14,
   $s15,
   $s16,
   $s17,
   $s18,
   $s19,
   $s20,
   $s21,
   $Instrument,
   $Education,
   $Listen,
   $wroteMusic
  );
  fputcsv($file_open, $form_data);

?>
<h1 class="w3-center"> Thanks!</h1>
<p class="w3-center"> Thank you so much for your time and effort! </p>
	</body>
</html>