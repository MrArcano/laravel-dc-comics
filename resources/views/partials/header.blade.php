<header>
    <nav class="navbar bg-primary border-bottom border-body" data-bs-theme="dark">
        <ul class="nav m-auto fw-bold">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'text-bg-dark rounded' : ''}}" href="{{ route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'text-bg-dark rounded' : ''}}" href="{{route('comics.index')}}">Comics list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'comics.create' ? 'text-bg-dark rounded' : ''}}" href="{{route('comics.create')}}">Add new comics</a>
            </li>
        </ul>
    </nav>
</header>
