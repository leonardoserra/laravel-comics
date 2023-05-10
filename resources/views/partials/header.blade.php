<header>
    <div class="header-container">
            <img class="logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo" />
            <nav class="navbar-menu">
                <ol class="categories">
                        @foreach ($categories as $link)
                    <li>
                        <a href="{{$link['href']}}">
                            {{$link['category']}}
                        </a>
                    </li>
                        @endforeach
                </ol>
            </nav>
    </div>
</header>