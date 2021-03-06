<!DOCTYPE html>
<html lang="en">

<head>
    <!-- link css files and utilitys -->
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOHelp</title>
    <link rel="SHORTCUT ICON" href="img/favicon.ico" type="image/gif">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:700|Exo:900i" rel="stylesheet">
</head>

<body class="bg-custom1">   
     
    <!-- Header -->
    <div class="row align-items-center sticky-top w-100 shadow bgcol1" id="header">
        <img src="/img/logo.png" class="col-1 pa" style="left:15%;">
        <div class="col col-md-3 offset-3 offset-lg-1 row">
            <h1 class="offset-lg-3 pt-2" style="color:ghostwhite; font-family: 'Exo', sans-serif;" class="col">HOHelp</h1>
        </div>
        
        <!-- links -->
        <div class="col offset-lg-2 hide-on-small-only row">
            <a href="/mainUser" class="text-light btn col-3">Home</a>
            
            <!-- Dropdown button -->
            <div class="dropdown text-light col-3">
                <button class="btn dropdown-toggle text-light bgcol1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <p class="dropdown-item disabled">{{ Auth::user()->name }}</p>
                    <a class="dropdown-item" href="/profileUser">Profile</a>
                    <a class="dropdown-item" href="/feedUser">Feed</a>
                    <a class="dropdown-item" href="/createRequest">Make request</a>
                </div>
            </div>
            <div class="btn col-3">
                <a class="text-light" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    
    <!-- main content -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <p class="h1">Your active requests</p>
                        <div class="container mt-4">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <div class="row mt-3 bg-white card">
                                        <img src="/img/avatar.png" class="h-100 col-4">
                                        <div class="card-body">
                                            <div class="text-grey col">
                                                <p class="h2"> Mark Brown </p>
                                                <p class="h5"> volunteer </p>
                                                <a href="/profileVol" class="text-light btn btn-primary">Check profile</a>
                                            </div>
                                        </div>
                                        <div class="card-body col">
                                            <div class="text-grey col">
                                                <p class="h4 mt-4"> Want's help you </p>
                                            </div>
                                            <button type="button" class="btn btn-success">Accept</button>
                                            <button type="button" class="btn btn-danger ml-5">Decline</button>
                                        </div>
                                    </div>
                                    <div class="row mt-3 bg-white card">
                                        <img src="/img/avatar.png" class="h-100 col-4">
                                        <div class="card-body">
                                            <div class="text-grey col">
                                                <p class="h2"> Mark Brown </p>
                                                <p class="h5"> volunteer </p>
                                                <a href="/profileVol" class="text-light btn btn-primary">Check profile</a>
                                            </div>
                                        </div>
                                        <div class="card-body col">
                                            <div class="text-grey col">
                                                <p class="h4 mt-4"> Want's help you </p>
                                            </div>
                                            <button type="button" class="btn btn-success">Accept</button>
                                            <button type="button" class="btn btn-danger ml-5">Decline</button>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>  
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="h1">Answers on your requests</p>
                        <div class="container mt-4">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <p class="h2 text-light"> No one answered on your requests :( </p>
                                </div>   
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            
            <!-- Ad place -->
            <div class="col offset-1">
                <div class="card ad">
                    AD's
                </div>
                <div class="card ad mt-3">
                    AD's
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