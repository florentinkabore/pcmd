<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <title>pcmd</title>
</head>
<body>
<nav class="navbar navbar-expand bg-dark ">
    <a class="navbar-brand" href="#">LAZONE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-tabs mr-auto" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link  text-primary" class="{{Request::is('home') ? 'active' : null}}"  href="{{route('home')}}" role="tab" aria-controls="home" aria-selected="true">Home</a>
    </li>
    <li class="nav-item">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Services
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">correctin de texte</a>
    <a class="dropdown-item" href="#">redaction</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Mise en forme</a>
    </div>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link text-primary"  href="{{route('about')}}" role="tab" aria-controls="contact" aria-selected="false">A propos</a>
    </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="height:2rem">
        <button class="btn btn-secondary my-2 mr-2 my-sm-0" type="submit">Search</button>
    </form>

    <a class="btn btn-primary mr-2" href="{{route('login')}}" role="button">connexion</a>
    <a class="btn btn-success px-2" href="{{route('register')}}" role="button">inscription</a>

    </div>
</nav>

    <!-- main content -->
    <main role="main" class="container">

        <div style="padding: 3rem 1.5rem;">
            <h1>Accueil</h1>
            <span>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </span>
        </div>

    </main>

    <!-- footer -->
    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/jquery/jquery-3.5.1.min.js')}}"></script> -->
</body>
</html>