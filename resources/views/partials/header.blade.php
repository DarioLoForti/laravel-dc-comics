<header>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </div>
            <div class="menu">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a class="{{ Route::currentRoutename() === 'home' ? 'navtext' : '' }}"
                            href="{{ route('home') }}">Characters</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'comics' ? 'navtext' : '' }}"
                            href="{{ route('comic.index') }}">Comics</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'movies' ? 'navtext' : '' }}"
                            href="#">Movies</a>
                    </li>
                    <li>
                        tv
                    </li>
                    <li>
                        Games
                    </li>
                    <li>
                        Collectibles
                    </li>
                    <li>
                        Videos
                    </li>
                    <li>
                        Fans
                    </li>
                    <li>
                        News
                    </li>
                    <li>
                        Shop
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
