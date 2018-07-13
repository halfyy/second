<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOHelp</title>
    <link rel="SHORTCUT ICON" href="img/favicon.ico" type="image/gif">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:700|Exo:900i" rel="stylesheet">
</head>
<body class="bg-custom1">   
        
    <div class="row align-items-center sticky-top w-100 shadow bgcol1" id="header">
        <img src="/img/logo.png" class="col-1 pa l-15">
        <div class="col col-md-3 offset-3 offset-lg-1 row">
            <a class="offset-lg-3 pt-2 fs-40" href="/mainUser" style="color:ghostwhite; font-family: 'Exo', sans-serif;" class="col">HOHelp</a>
        </div>
        
        <div class="col offset-lg-2 hide-on-small-only row">
            <a href="/mainUser" class="text-light btn col-3">Home</a>
            <div class="dropdown text-light col-3">
                <button class="btn dropdown-toggle text-light bgcol1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item disabled" href="">{{ Auth::user()->name }}</a>
                    <a class="dropdown-item" href="/profileUser">Profile</a>
                    <a class="dropdown-item" href="/feedUser">Feed</a>
                    <a class="dropdown-item" href="/createRequest">Make request</a>
                </div>
            </div>
            <div class="btn col-3" aria-labelledby="navbarDropdown">
                <a class="text-light" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="card col-3 offset-1">
                <img class="col-12 mb-3" src="/img/avatar.png">
            </div>
            <div class="text-dark text-center col-6 card offset-1">
                <div class="card-body">
                    <p class="h1">User</p>
                    <div class="row">
                        <p class="h3 col card"> {{ Auth::user()->name }} {{ Auth::user()->second_name }}</p>
                        <div class="w-100"></div>
                        <p class="h3 col card mt-2">Age: {{ Auth::user()->age }} </p>
                        <div class="w-100"></div>
                        <p class="h3 col card mt-2"> E-mail : {{ Auth::user()->email }} </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-10 offset-1 mt-4">
            <div class="card-body">
                <p class="h1">About me:</p>
                <p class="h4"></p>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="card h-500">
            <div class="card-body text center border-dark">
                <p class="h2 text-center">
                    You haven't made any requests yet
                </p>
                <a href="/createRequest" class="btn bgcol1 text-light col-4 offset-4">Make Request</a>    
            </div>
        </div> 
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>

    </script>
</body>
</html>