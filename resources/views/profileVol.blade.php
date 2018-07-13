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
        <img src="/img/logo.png" class="col-1 pa" style="left:15%;">
        <div class="col col-md-3 offset-3 offset-lg-1 row">
            <h1 class="offset-lg-3 pt-2" style="color:ghostwhite; font-family: 'Exo', sans-serif;" class="col">HOHelp</h1>
        </div>
        
        <div class="col offset-lg-2 hide-on-small-only row">
            <a href="" class="text-light btn col-3">Home</a>
            <div class="dropdown text-light col-3">
                <button class="btn dropdown-toggle text-light bgcol1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item disabled" href="">{{ __('Login') }}</a>
                    <a class="dropdown-item" href="/profileUser">Profile</a>
                    <a class="dropdown-item" href="/feedUser">Feed</a>
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
                <img class="card-img-top" src="/img/1needy.png" alt="USER IMG">
            </div>
            <div class="text-dark text-center col-6 card offset-1">
                <div class="card-body">
                    <p class="h1">User</p>
                    <div class="row">
                        <p class="h3 col card"> Someoneov Someone Someoneovich </p>
                        <div class="w-100"></div>
                        <p class="h3 col card"> Age : 57 </p>
                        <div class="w-100"></div>
                        <p class="h3 col card"> Phone : +7(914) 335-85-95 </p>
                    </div>
                </div>
                
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