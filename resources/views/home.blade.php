<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | Home</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>
            <!-- header navbar -->
        <div class="container">        
            <nav class="navbar">
                <figure>
                    <a href="#"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="dc_logo"></a>
                </figure>
                <ul>
                    <li><a href="{{ route('characters') }}">characters</a></li>
                    <li><a href="{{ url('/') }}">comics</a></li>
                    <li><a href="{{ route('movies') }}">movies</a></li>
                    <li><a href="{{ route('tv') }}">tv</a></li>
                    <li><a href="{{ route('games') }}">games</a></li>
                    <li><a href="{{ route('collectibles') }}">collectibles</a></li>
                    <li><a href="{{ route('videos') }}">videos</a></li>
                    <li><a href="{{ route('fans') }}">fans</a></li>
                    <li><a href="{{ route('news') }}">news</a></li>
                    <li><a href="{{ route('shop') }}">shop</a></li>
                </ul>
            </nav>
        </div>    
    </header>
    <main>
        <h1>MAIN</h1>
    </main>
    <footer>
        <!-- footer-top -->
        <section id="footer-top">
            <div class="container">
                <div class="row">
                    <!-- links -->
                    <div class="col">
                        <div>
                            <h4>DC COMICS</h4>
                            <ul>
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                            <div>
                                <h4>SHOP</h4>
                                <ul>
                                    <li><a href="#">Shop DC</a></li>
                                    <li><a href="#">Shop DC Collectibles</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h4>DC</h4>
                            <ul>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy Policy (New)</a></li>
                                <li><a href="#">Ad Choices</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Subscriptions</a></li>
                                <li><a href="#">Talent Workshops</a></li>
                                <li><a href="#">CPSC Certificates</a></li>
                                <li><a href="#">Ratings</a></li>
                                <li><a href="#">Shop Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>SITES</h4>
                            <ul>
                                <li><a href="#">DC</a></li>
                                <li><a href="#">MAD Magazine</a></li>
                                <li><a href="#">DC Kids</a></li>
                                <li><a href="#">DC Universe</a></li>
                                <li><a href="#">DC Power Visa</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- logo big -->
                    <div class="col">
                        <figure>
                            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="dc_logo_bg">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer-bottom -->
        <section id="footer-bottom">
            <div class="container">
                <!-- footer-navbar -->
                <nav class="footer-nav">
                    <a href="#">SIGN-UP NOW!</a>
                    <ul>
                        <li>
                            <a href="#">FOLLOW US</a>
                        </li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt=""></a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </footer>
</body>
</html>