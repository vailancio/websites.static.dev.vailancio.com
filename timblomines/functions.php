<?php
$url = $_SERVER['REQUEST_URI'];
//echo $url;
/*----page tilte----*/
switch ($url){
  case "/index.php":
  $title = "Timblo Mining Group | Goa | India";
  break;
  case "/":
  $title = "Timblo Mining Group | Goa | India";
  break;
  case "/objective.php":
  $title = "Timblo Mining Group | Business Objective";
  break;
  case "/philosophy.php":
  $title = "Timblo Mining Group | Philosophy";
  break;
  case "/executive.php":
  $title = "Timblo Mining Group | Executive Team";
  break;
  case "/gallery.php":
  $title = "Timblo Mining Group | Photo Gallery";
  break;
  case "/contact.php":
  $title = "Timblo Mining Group | Contact";
  break;
}
//echo $title;
/*----meta description---*/
switch ($url){
  case "/index.php":
  $meta_desc = "Our core business is iron ore. We are currently, one of Goa`s (India), largest producer, seller, shipper of iron ore in the private sector. Having started in Goa in 1990, we also have mining operations in Karnataka India. ";
  break;
  case "/":
  $meta_desc = "Our core business is iron ore. We are currently, one of Goa`s (India), largest producer, seller, shipper of iron ore in the private sector. Having started in Goa in 1990, we also have mining operations in Karnataka India. ";
  break;
  case "/philosophy.php":
  $meta_desc = "Extraction of ore from the earth leads to a disturbance in its natural environment. At Timblo Mining, we take utmost care in managing this operation to minimize disturbance, and such that post-mining restoration makes the mining area more environment-friendly than before.";
  break;
  case "/objective.php":
  $meta_desc = "Our objective is to raise our share of the trade in iron ore and most importantly to do that profitably maintaining our position as one of India`s most cost-effective iron ore producers. ";
  break;
  case "/executive.php":
  $meta_desc = "MR. RAJESH PRAKASH TIMBLO,MR. V. SURENDRA NATHA REDDY,MR. ANIL G. NAIK,MR. HARISH JADHAV,MR. VISHAL V. KAMBLE,MR. LUIS PEIXOTE";
  break;
  case "/gallery.php":
  $meta_desc = "Have a tour to our mining process.";
  break;
  case "/contact.php":
  $meta_desc = "Contact us using below given form.";
  break;
}
//echo $meta_desc;
