<?php $_SERVER['REQUEST_METHOD'] == 'POST'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Wypożyczalnia filmów</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_film.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100, 200,300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
  <script src="jquery.js"></script>
  <script src="animations.js"></script>
</head>
<body>
  <div id="background_overflow">
    <div id="background"></div>
  </div>
  <div id="container">
    <header>
      <nav>
        <ul>
          <li><a href="main.php" class="flex100">Główna</a></li>
          <li><a href="films.php" class="flex100">Filmy i seriale</a></li>
          <li><a href="plan.php" class="flex100">Plan</a></li>
        </ul>
      </nav>
      <div id="search_box">
        <form action="search.php" class="flex100">
          <input type="text" class="text_input" placeholder="wyszukaj film">
      </div>
        </form>
      <div id="login_box" class="flex100">
        <a href="index.php" class="flex100">Zaloguj się</a>
      </div>
   </header> 

   <div id="general" class="flex100">
    
      <div id="film">
        <div id="film_info">
        <br><br>
          <h2><?php echo $_GET['title']; ?></h2><br>
          <p>Byt ludzkości na Ziemi dobiega końca wskutek zmian klimatycznych. Grupa naukowców odkrywa tunel czasoprzestrzenny, który umożliwia poszukiwanie nowego domu.</p><br>
          <p>Reżyseria: Cristopher Nolan</p><br>
          <p>Scenariusz: Cristopher Nolan</p><br>
          <p>Gatunek: sci fi</p><br>
          <p>Czas trwania: 2h 49min</p><br>
  
        </div>
        <div id="film_player" class="flex100">
          <img src="film_cover/<?php echo $_GET['img']; ?>.jpg" alt="">
        </div>
      </div>

    </div> 
  </div>
</body>
</html>