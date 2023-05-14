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
<body class='body'>
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
    <h1 style='margin-left: 30%;'  class='h1'>remplir ces données suivantes:</h1>

 <form style=" width: 60%; margin-left: 20%; border: 1px solid rgb(99, 106, 106);border-radius:10px; padding: 10px;">
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
     </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
    <div class='exame' style="text-align: center">
       <p><a class="link-opacity-25" href="https://cope.men.gov.ma/Account/Login?idApps=2">(click here) COPE الترشيح الالكتروني لاجتياز امتحان
       </a></p>
       <img style="text-align: center ; width: 70%; "  src="css/exame.jpg" alt="" srcset="">
    </div>
       
       





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
</body>
</html>