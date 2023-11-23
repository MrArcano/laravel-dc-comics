<header>
    <nav class="navbar bg-primary border-bottom border-body" data-bs-theme="dark">
        <ul class="nav m-auto fw-bold">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('comics.index')}}">Comics list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('comics.create')}}">Add new comics</a>
            </li>
        </ul>
    </nav>
</header>
