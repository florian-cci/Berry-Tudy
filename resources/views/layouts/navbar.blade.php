<nav class="navbar navbar-expand-md navbar-light bg-light">
    @if (Route::current()->getName() == 'login')
        <div class="container-fluid justify-content-center">
        @else
            <div class="container-fluid">
    @endif
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle"
        aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @if (Route::current()->getName() == 'login')
        <div class="collapse navbar-collapse justify-content-center" id='navbarToggle'>
        @elseif (Route::current()->getName() == 'home')
            <div class="collapse navbar-collapse justify-content-end" id='navbarToggle'>
            @else
                <div class="collapse navbar-collapse justify-content-between" id='navbarToggle'>
    @endif

    @if (Route::current()->getName() != 'home')
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Centre de vacance Berry Tudy" height=100>
        </a>
    @endif
    @auth
        <ul class="navbar-nav">
					<li class='nav-item'><a class="nav-link" href="{{ route('home') }}">Acceuil</a></li>
						@if(Auth::user()->role === 0)
								<li class="nav-item">
										<a class="nav-link" href="/admin">Dashboard</a>
								</li>
						@endif
            <li class='nav-item'><a class="nav-link" href="{{ route('user.sejours') }}">Mes séjours</a></li>
            <li class='nav-item'><a class="nav-link" href="{{ route('user.payment') }}">Mes Paiements</a></li>
            {{-- LOGOUT --}}
            <li class='nav-item'><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Deconnexion') }}
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    @endauth
    </div>
    </div>
</nav>
