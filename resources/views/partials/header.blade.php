{{-- @php
$header_menu = config('menus.header_menu');
@endphp
--}}

<header>
    <header>
        <div class="logo">
        <img src="/img/dc-logo.png" alt="Logo dc">
    </div>

    <nav>
        <ul>
            <li>
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{route('comics')}}">comics</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">movies</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{route('comics')}}">comics</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">movies</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>

            {{-- @foreach ($menu_header as $link)
            <li>
            <a
            href="{{route($link['href'])}}"
            class="{{Route::currentRouteName() === $link['href'] ? 'active' : ''}}">
            {{$link['text']}}
            </a>
            </li>
            @endforeach --}}
        </ul>
    </nav>
    </header>
</header>
