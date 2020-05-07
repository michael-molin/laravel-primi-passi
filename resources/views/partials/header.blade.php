<header>
    <img id="logo" src="{{asset('img/marchio-sito-test.png')}}" alt="Logo Pasta Molisana">
    <img id="hamburger" src="{{asset('img/hambuger.svg')}}" alt="">
    <ul class="nav-menu">
        <li class="{{(url() -> current() == route('home')) ? 'active' : ''}}"><a href="{{route('home')}}">{!! '<h3>Home</h3>' !!}</a></li>
        <li class="{{(url() -> current() == route('prodotti')) ? 'active' : ''}}"><a href="{{route('prodotti')}}">{!! '<h3>Prodotti</h3>' !!}</a></li>
        <li class="{{(url() -> current() == route('news')) ? 'active' : ''}}"><a href="{{route('news')}}">{!! '<h3>News</h3>' !!}</a></li>
    </ul>
    
</header>
