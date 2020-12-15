@extends('main')

@section('title', '| About')

@section('content')
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
                        <a href="httlp://laravel.com/docs">Laravel - Docs</a>
                    </li>
                    <li>
                        <a href="https://laravel.com/docs/8.x/blade">Laravel - Blade</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    @endsection

