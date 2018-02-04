<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>David Mustač</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('styles')


    </head>
    <body>

    <div class="container">
        <nav class="navbar">
            <div class="menu">
                <ul>
                    <li>
                        <a href="#">Home </a>
                    </li>
                    <li>
                        <a href="#">About me </a>
                    </li>
                    <li>
                        <a href="#">Videos </a>
                    </li>
                    <li>
                        <a href="#">Contact </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-6">
                <div class="oDejvu">
                    <h1 class="dejvNaslov">Hi, I'am David Mustač, videographer from Croatia</h1>
                    <p class="dejv-tekst">
                        Veliki sam ljubitelj video produkcije i fotografije.
                        Svojim uradcima prikazujem posebne i svojevrsne priče te ih uz zanimljive kadrove i filmske kuteve želim približiti svakome od vas!
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius justo viverra nunc pretium laoreet. Curabitur congue purus nisi, at bibendum lectus rutrum ac.
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12 col-lm-6" >
                <img class="dejvovaslika" src="{{asset('img/test-image.jpg') }}" >
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="nasloviKategorija">
                    LATEST WORK</h3>
            </div>
        </div>

        <div class="row">
            <div class="video-odjeljak"> <!-- ovo treba videti, ugl, treba odmaknuti video panel od headera. Moremo i
            deti možda prazni div iznad ovog s određenom visinom i fluidnom širinom. Možda je i ovak ok. Nezz..-->
                <!--row 1-->
                <!-- bnd implementation -->
                <div class="col-lg-4">
                    <div>
                        <iframe width="360" height="215" src="https://www.youtube.com/embed/ajM1hQb2__A?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0"
                                gesture="media" allow="encrypte d-media" allowfullscreen></iframe>
                    </div>
                    <!--div za video-->
                    <h5 style="color: #588ead">JEDAN DAN U BEČU - 02:37 min</h5>

                    <p class="dejv-tekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut velit nulla, consectetur a pellentesque feugiat,
                        ornare vitae neque. Aliquam sed ex massa..</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="nasloviKategorijaContact ">
                    CONTACT</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="okvir">
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="row">
                <div class="col-md-6">
                    <h4>COPYRIGHT </h4>
                    <p>
                        Neovlašteno korištenje bilo kojeg dijela webstranice bez dozvole vlasnika autorskih prava  smatra se kršenjem autorskih prava i podložno je tužbi.
                    </p>
                    <p>
                        All rights reserved © 2018</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="footer-srednji">
                        <h4 class="text-center">LINKOVI </h4>
                        <p class="text-center">
                            <a href="#">Neki ok link</a><br/>
                            <a href="#"> Druga poveznica</a><br/>
                            <a href="#">Korisni tutoriali</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>PRATI ME</h4>
                    <ul class="social-icons">
                        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                        <li><a href="" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        </div>
    </div>
    </body>
</html>
