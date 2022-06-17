<!DOCTYPE html>
<html>
<head>
  <title>Wypożyczalnia filmów</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100, 200,300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
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
      <div id="login">
        <div id="login_caption">
          <div id="caption">
            <h1>Zarejestruj się</h1><br>
            <p>Uzyskaj dostęp do mnóstwa filmów i seriali</p>
          </div>
        </div>
        <div id="login_form">
          <form action="register.php">
            <input type="text" name="email" class="text_input" placeholder="email"><br><br>
            <input type="password" name="password" class="text_input" placeholder="hasło"><br><br>
            <input type="password" name="password1" class="text_input" placeholder="powtórz hasło"><br><br>
            <label> <input type="checkbox" id="regulamin" name="regulamin"><span style="color:#FFFFFF"> Przeczytałem <a href="regulamin.html">Regulamin</a></span></label><br><br>
            <input type="submit" value="Zarejestruj" id="login_button" class="button">
          </form>
        </div>
      </div>

   </div> 
  </div>
</body>
</html>