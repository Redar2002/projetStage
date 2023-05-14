<!DOCTYPE html>
<html lang="en">
<head>


                 <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="js/bootstrap.bundle.min.js" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
                 <!-- END additional CSS -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
      <img style="margin-left: 5px;" src="css/co.png" alt="Bootstrap" width="40" height="30">
    </a>
        <a class="navbar-brand" href="#">COPE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inscription">Inscription</a>
                </li>
            </ul>
            <img class='logo' src="css/logo.png" alt="MA logo">
        </div>
        
</nav>
    <H2 style="text-align: center; padding: 40px;" >Pour nous contacter!!</H2>
    <div class="contact">
    <div class="card" style="width: 70% ; margin-left: 15%;">
       <img style="width: 25% " src="css/hanihassan.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Hassan EL Hani <h6 style=" text-decoration: solid;">secretaire General </h6>  </h5>
    <ul>
        <li>Centre dorentation et de planification de l’Education</li>
        <li>Avenue Azzaioune, Hay Riad-Rabat</li>
    </ul>
 <div  style=" margin-left: 10%; margin-right:10% ;" class="card mb-3" style="max-width: 300px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="css/tele.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
       <ul style=" padding: 45px;" >
        <li>
        Tel:05 37 71 44 51/06 61 93 35 21
        </li>
        <li>Fax:05 37 71 44 50</li>
        <li>Courrier:BP 6222 RABAT INSTITUS</li>
       </ul>
      </div>
    </div>
  </div>
</div>
 </div>
</div>
 </div>
 <h1 style="text-align: center;padding: 10px; "> votre message </h1>
 <form style="border: 1px solid azure;width: 70%;margin-left: 15%; border-radius:10px; padding: 10px;" action="/submit" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <footer class="footer">
        <div class="container">
            <h2>COPE:</h2>
            <p>&copy; Centre d'Orientation et de Planification de l'Education.</p>
            <div class="footer-links">
                <a href="#">Accueil</a>
                <a href="#">Contact</a>
                <a href="#">À propos</a>
                <a href="#">Conditions d'utilisation</a>
            </div>
        </div>
    </footer>
   

   

</div>
</body>
</html>