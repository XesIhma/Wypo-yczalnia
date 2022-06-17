<!DOCTYPE html>
<html>
<head>
  <title>Wypożyczalnia filmów</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_main.css">
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
    
      <div id="all_categories">

        <?php 
        $category = array("Sci Fi", "Komedia, dramat", "Dokumenty");
        $thumbs = array (
          array("interstellar", "martian", "adastra", "arrival", "interstellar", "interstellar"),
          array("moonrisekingdom", "biglebowski", "bajeczniebogaciazjaci", "ventura"),
          array("sugarman", "samsara", "baraka", "amy"));
        $names = array(
          array("Interstellar", "Martian", "Ad Astra", "Arrival", "Interstellar", "Interstellar"),
          array("Moonrise kingdom", "Big Lebowski", "Bajecznie bogaci azjaci", "Ventura: Zew Natury"),
          array("Sugar man", "Samsara", "Baraka", "Amy"));
          for($j = 0; $j < 3; $j++){
        ?>

        <div class="category">
          <h3><?php echo $category[$j] ?></h3>
          <div class="hover_scroll flex100 scroll_left">
            <img src="css/img/left_arrow.png" alt="">
          </div>
          <div class="category_wraper" id="wraper1">
            <div class="category_roller">
            <?php 
              
              for($i = 0; $i < 6; $i++){
            ?>
              <a href="film.php?title=<?php echo $names[$j][$i] ?>&img=<?php echo $thumbs[$j][$i] ?>" class="position" style="background-image: url(film_cover/<?php echo $thumbs[$j][$i] ?>_thumb.jpg">
                <h4 class="position_name"><?php echo $names[$j][$i] ?></h4>
              </a>
    
            <?php
              }
            ?>

            </div>
          </div>
          <div class="hover_scroll flex100 scroll_right" style="right: 0">
            <img src="css/img/right_arrow.png" alt="">
          </div>
        </div>

        <?php
          }
        ?>

       <br><br><br>



      </div>
    </div> 
  </div>
</body>
</html>