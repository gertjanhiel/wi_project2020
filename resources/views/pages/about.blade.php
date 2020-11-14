<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/nl_BE/sdk.js#xfbml=1&version=v8.0&appId=645244712757991&autoLogAppEvents=1"
            nonce="tINufZKi"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>


    <title>About Rescue Puppers</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

        .carousel-inner {
            height: 1000px;
            width: auto;
        }

        .about-img {
            max-width: 110%;
            max-height: 110%;
        }


    </style>
</head>

<body>

<!-- Default bootstrap navbar | https://getbootstrap.com/docs/4.5/components/navbar/ -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/welcome">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Rescue Puppers
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navigation bar left-side -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/welcome" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Most popular</a>
                    <a class="dropdown-item" href="#">Most recent</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Create a post</a>
                </div>
            </li>
            <li class="active">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
        <!-- Navigation bar right-side -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">{{$user['full name']}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <a class="dropdown-item" href="#">View Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- End of default bootstrap navbar -->


<main role="main">
    <div class="container">
        <br>
        <br>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img class="about-img"
                     src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/118072025_10224003727023647_4285181777126101250_n.jpg?_nc_cat=108&ccb=2&_nc_sid=e3f864&_nc_ohc=RR8mdWepSrwAX80jr-_&_nc_ht=scontent-bru2-1.xx&oh=d676dd5d00baa5c3c6a210e2adc83b5e&oe=5FCC9EB2"
                     alt="Hond Stella">
            </div>
            <div class="offset-md-1 col-md-4">
                <div class="about-desc">
                    <h3>Over ons</h3>
                    <hr>
                    {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid architecto at culpa--}}
                    {{--                        doloribus fuga id maiores necessitatibus nemo nihil nisi provident, quidem reprehenderit--}}
                    {{--                        repudiandae sequi soluta tempora temporibus voluptates!Lorem ipsum dolor sit amet, consectetur--}}
                    {{--                        adipisicing elit. Adipisci aliquid architecto at culpa--}}
                    {{--                        doloribus fuga id maiores necessitatibus nemo nihil nisi provident, quidem reprehenderit--}}
                    {{--                        repudiandae sequi soluta tempora temporibus voluptates!Lorem ipsum dolor sit amet, consectetur--}}
                    {{--                        adipisicing elit. Adipisci aliquid architecto at culpa--}}
                    {{--                        doloribus fuga id maiores necessitatibus nemo nihil nisi provident, quidem reprehenderit--}}
                    {{--                        repudiandae sequi soluta tempora temporibus voluptates!Lorem ipsum dolor sit amet, consectetur--}}
                    {{--                        adipisicing elit. Adipisci aliquid architecto at culpa--}}
                    {{--                        doloribus fuga id maiores necessitatibus nemo nihil nisi provident, quidem reprehenderit--}}
                    {{--                        repudiandae sequi soluta tempora temporibus voluptates!</p>--}}

                    <ul>
                        <li>
                            De huidige pagina, 'about' zal een 'over ons' pagina worden met uitleg over de host van de
                            blog, een vriendin van mij, die zich bezig houdt met het promoten van adoptie van dieren,
                            voornamelijk honden.
                        </li>
                        <li>
                            Er zal een link op de website komen die verwijst naar de toekomstige 'About' pagina met
                            hierin alle verreisten voor de opdracht.
                            Momenteel plaats ik alle content van de toekomstige About pagina hier nog in (tegen volgende
                            milestone zal er een onderscheid zijn tussen 'About' en 'Over ons'.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <p><br>Toekomstige features:</p>
                <ul>
                    <li>
                        Login via facebook credentials, ik ben momenteel bezig met het uitzoeken hoe ik de huidige
                        laravel-login pagina kan linken met een facebook-dev-login systeem zodat nieuwe
                        users zich kunnen registreren en inloggen met hun facebook gegevens.
                    </li>
                    <li>
                        Ingelogde gebruikers zullen blog-posts kunnen aanmaken (+ hun eigen posts aanpassen en
                        verwijderen) en andere gebruikers hun posts kunnen 'liken' en op reageren.
                        Er zal ook een mogelijkheid zijn om per post een foto toe te voegen, ik ben opnieuw momenteel
                        nog aan het uitzoeken of het mogelijk is om die foto te linken aan een facebook / instagram
                        bericht.
                    </li>
                    <li>
                        Een 'most-popular' pagina waarop de 10(?) meest populaire (geselecteerd adhv. likes) blog-posts
                        zullen worden weergegeven. -> Soort van eregalerij.
                    </li>
                    <li>
                        User systeem verder uitwerken, admin kan nieuwe admin aanmaken en andere users
                        verwijderen/aanpassen.
                        Gebruikers kunnen ook hun instellingen wijzigen -> email / passwoord aanpassen
                    </li>
                    <li>
                        Ras-selector van x-aantal vragen over een gebruiker zijn/haar levensstijl en karakter waarna er
                        aan de hand van de antwoorden een ras gekoppeld wordt aan de persoon die de vragenlijst ingevuld
                        heeft.
                    </li>
                    <li>
                        Pagina waarop een lijst wordt weergegeven met naam, ras, korte karakter beschrijving (adhv.
                        database) van 'openstaande' adopteerbare dieren. Ook met een kaart bij zodat het visueel
                        duidelijk is voor
                        eventueel toekomstige adopteerders hoe ver ze zich bevinden van hun mogelijk toekomstige
                        huisdier.
                    </li>

                    <li>
                        Logo ontwerpen 'Rescue Puppers'.
                    </li>
                    <li>
                        -MOGELIJKHEID- Meter/peter systeem voor dieren die nog ter adoptie staan -> gebruikers kunnen
                        maandelijks/eenmalig een bedrag storten aan het asiel waar het dier zich momenteel bevindt tot
                        wanneer het geadopteerd wordt
                        -> onderhoudsgeld voor het dier. (Moeilijkheid hierbij is dat er een betaalsysteem zal moeten
                        worden geimplementeerd worden waarvan ik tot op heden niet weet hoe moeilijk dat is om te
                        verwezenlijken. Ik dacht hierbij aan een
                        standaard Bancontact en Pay-pal API + mogelijkheid tot klassieke overschrijving)
                    </li>
                    <li>
                        -MOGELIJKHEID- Een categorie systeem (zal gekozen kunnen worden in de sidebar op de main-blog
                        pagina) waarbij elke gemaakte post binnen een categorie geplaatst zal worden en men kan filteren
                        op categorie ipv op datum / populariteit
                    </li>
                    <li>
                        -MOGELIJKHEID- Samenwerking met bedrijven dat een goodie-box (of dergelijke) opsturen naar de
                        persoon die een dier geadopteerd heeft.<br>
                        (Weet niet hoeveel nut(?) dit heeft aangezien er veel tijd in gestoken zal moeten worden om
                        sponsors te zoeken voor een school project)
                    </li>
                </ul>
                <hr>
                <p><br>Geraadpleegde bronnen:</p>
                <ul>
                    <li>
                        <a href="http://serene-fjord-57767.herokuapp.com/">Referentie simpele laravel blog</a>
                    </li>
                    <li>
                        <a href="http://stackoverflow.com">Stackoverflow</a>
                    </li>
                    <li>
                        <a href="https://www.w3schools.com/php/default.asp">w3schools - PHP / HTML</a>
                    </li>
                    <li>
                        <a href="http://bootstrap.com">Bootstrap - Layout</a>
                    </li>
                    <li>
                        <a href="https://laravel.com/docs/8.x/blade">Laravel - Blade</a>
                    </li>

                </ul>
            </div>
        </div>
        <br>
        <hr>
    </div>

</main>
</body>
</html>
