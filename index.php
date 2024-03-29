<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/stylesheets/normalize.css">
    <link rel="stylesheet" href="assets/stylesheets/style.css">
    <link rel="stylesheet" href="assets/stylesheets/text.css">
    <link rel="stylesheet" href="assets/stylesheets/header.css">
    <link rel="stylesheet" href="assets/stylesheets/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  </head>
  <body>
    <?php include('header.php');?>
    <section class="bandeau">
      <h1>Space'bowl</h1>
    </section>

    <section class="main">
      <div class="text">
        <h2>Bienvenue au <span class="orangebold">Space'Bowl</span></h2>
        <h3>L'endroit idéal pour s'amuser en <span class="orange">famille</span> ou entre <span class="orange">amis.</span></h3>
        <p>Sur un espace de <span class="bold">1000 mètres carré,</span> vous retrouverez <span class="orange">un bar, un espace arcade</span> et <span class="orange">trois zones à thème</span> (<span class="italic">Star Wars, Marvel et une zone dédié à l’horreur</span>) comprenant chacune 5 pistes. <span class="bold">Un total de 15 pistes, 20 bornes d’arcade.</span></p>
        <h3>Découvrez le <span class="orange">Space'Bowl</span> en vidéo :</h3>
      </div>
      <video src="/assets/img/bowl.mp4" autoplay controls>

      </video>
      <div class="events">
        <div class="left">
            <img src="./assets/img/bar.jpg" alt="">

        </div>
        <div class="right">
          <img src="./assets/img/arcade.jpg" alt="">
          <img src="./assets/img/theme.jpg" alt="">
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>

  </body>
</html>
