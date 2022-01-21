<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"> -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <nav class="navbar navbar-expand bg-dark ">
    <a class="navbar-brand" href="#">Navbar</a>
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
    </div>
    </nav> 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
