<nav class="navbar navbar-expand-lg navbar-light bg-light mx-2">

    <a class="navbar-brand font-weight-bold fs-3" href="#">COMICS</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}"> Home </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('comics.index')}}"> Comics </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('contacts')}}"> Contatti </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('comics.create')}}"> Crea nuovo prodotto </a>
            </li>

        </ul>
    </div>
</nav>
