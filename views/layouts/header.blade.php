<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <img src="{{ asset('images/logo4.png') }}" alt="Logo" height="70px">
 
        <a class="navbar-brand" href="{{ route('home') }}">ELYSIAN PLATE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Reservation</a>
                </li>
            </ul>
        </div>
    </div>
</nav>