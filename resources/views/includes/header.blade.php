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