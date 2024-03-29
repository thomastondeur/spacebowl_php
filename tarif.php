<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="assets/stylesheets/normalize.css">
  <link rel="stylesheet" href="assets/stylesheets/tarif.css">
  <link rel="stylesheet" href="assets/stylesheets/text.css">
  <link rel="stylesheet" href="assets/stylesheets/header.css">
  <link rel="stylesheet" href="assets/stylesheets/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>
  <?php include('header.php') ?>
<div class ="tarif">
  <h2>Calculez le tarif </h2>
<form class="" action="" method="GET">
  <fieldset>
    Semaine (du lundi au vendredi)
    <br>
    <label class="" for="week_day">De 12h à 19h</label>
    <select name="week_day" id="week_day">
     <?php for($i=0;$i<6;$i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?>
    </select>
    <br/>
    <label class="" for="week_night">De 19h à 00h</label>
    <select name="week_night" id="week_night">
      <?php for($i=0;$i<6;$i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?>
    </select>
  </fieldset>

 <fieldset>
   Week-end Samdi/Dimanche
   <br>
   <label class="" for="weeknd">De 12h à 00h</label>
   <select name="weeknd" id="weeknd">
    <?php for($i=0;$i<6;$i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?>
   </select>
 </fieldset>
 <fieldset>
   <label class="" for="teen">Enfant -12ans</label>
   <select name="teen" id="teen">
    <?php for($i=0;$i<6;$i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?>
   </select>
   <br>
   <label class="" for="child">Enfant -8ans</label>
   <select name="child" id="child">
    <?php for($i=0;$i<6;$i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?>
   </select>
 </fieldset>
 <br/>

 <input class="input"type="submit" name="envoyer" value="Calculer">
</form>
<?php
$week_day = isset($_GET['week_day']) ? $_GET['week_day'] : null;
$week_night = isset($_GET['week_night']) ? $_GET['week_night'] : null;
$weeknd = isset($_GET['weeknd']) ? $_GET['weeknd'] : null;
$teen = isset($_GET['teen']) ? $_GET['teen'] : null;
$child = isset($_GET['child']) ? $_GET['child'] : null;

function total_price($wd, $wn, $wnd, $te, $ch) {

$price_day = 5;
$price_night = 7;
$price_nd = 6;
$price_teen = 5;
$price_child = 4;

   $count = ($wd + $wn + $wnd + $te + $ch);
   $calcul = ($wd * $price_day) + ($wn * $price_night) + ($wnd * $price_nd) + ($te * $price_teen) + ($ch * $price_child);
   if ($count > 6) {
       echo 'Le nombre de joueurs doit être inférieur à 6';
   } else {
       echo '<br/> Le total s\'élève à ' . $calcul . '€';
   }
}

total_price($week_day, $week_night, $weeknd, $teen, $child);

?>
</div>

<?php include('footer.php') ?>
</body>
