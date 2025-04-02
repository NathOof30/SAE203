<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title>La vallée | Restaurant associatif</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Meow+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&display=swap" rel="stylesheet">
-->
  <link href="{{URL_CSS}}fontawesome.min.css" rel="stylesheet" type="text/css" />
  <link href="{{URL_CSS}}normalize.css" rel="stylesheet" type="text/css" />
  <link href="{{URL_CSS}}style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header class="container">
    <div class="header_text">
      <a href="{{BASE_URL}}" class="logo">
        <h1>La vallée</h1>
      </a>
      <span>Restaurant associatif</span>
      <a class="button" href="{{BASE_URL}}?page=inscription">Nous rejoindre</a>
    </div>
    <div class="header_image">
      <img src="{{URL_IMG}}./interieur.jpg" alt="test">
    </div>
    @if(!isset($_SESSION['adherent']))
    <a id="login" href="{{BASE_URL}}?page=connexion"><i class="fal fa-user"></i></a>
  @else
  <p id="login">
    <a href="{{BASE_URL}}?action=deconnexion"><i class="fal fa-user-slash"></i></a>
    <a href="{{BASE_URL}}?page=perso">{{$_SESSION['adherent']['nom']}}</a>
  </p>
@endif
  </header>

  @yield("content")

  <footer>
    <div class="container">
      <div>
        <span>Restaurant associatif</span>
        <h2>La vallée</h2>

        <p>Association loi de 1901</p>

      </div>

      <div>
        <span>Adresse</span>
        <p>3 rue de la Bruyère,</p>
        <p>62300 LENS</p>
      </div>


      <div>
        <span>Horaires</span>
        <p>De 11h30 à 14h</p>
        <p>Du lundi au vendredi hors jours fériés</p>
      </div>

      <div>
        <span>Contact</span>
        <p>email : lavallee@wanadoo.fr</p>
      </div>

    </div>
    <p class="container">&copy; MMI Création 2025
      -- <a href="#">Mentions légales</a>
      -- <a href="#">Administration</a></p>
  </footer>
  @isset($_SESSION['info'])
    <p id="info">{{$_SESSION['info']}}</p>@php unset($_SESSION['info']); @endphp
  @endisset
</body>

</html>