<header>
    <nav class="navbar navbar-expand-md fixed-top custom-navbar">
        <div class="container">
            <!-- Logo Serie A + Nome Sito -->
            <a class="navbar-brand d-flex align-items-center fw-bold text-light" href="{{ url('/') }}">
               <img src="{{ asset('storage/serie A.png') }}" alt="Serie A" class="serie-a-logo me-2">
                {{ config('app.name', 'Laravel') }}
            </a>

            <!-- Pulsante hamburger -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav me-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link nav-animated" href="{{ route('admin.teams.index') }}">🏆 Squadre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-animated" href="{{ route('admin.players.index') }}">⚽ Giocatori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-animated" href="{{ route('admin.coaches.index') }}">🎩 Allenatori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-animated" href="{{ route('admin.classifics.index') }}">📊 Classifica</a>
                        </li>
                    @endauth
                </ul>

                <!-- Login/Register/Logout -->
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link nav-animated" href="{{ route('login') }}">🔑 Login</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav-animated" href="{{ route('register') }}">📝 Register</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-animated" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                👤 {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end custom-dropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    🚪 Esci
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Navbar */
    .custom-navbar {
        background: rgba(0, 0, 30, 0.7);
        backdrop-filter: blur(15px);
        transition: all 0.3s ease-in-out;
        padding: 10px 0;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Navbar scrolled */
    .custom-navbar.scrolled {
        background: rgba(0, 0, 50, 0.9);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
    }

    /* Logo Serie A */
    .serie-a-logo {
        width: 30px;
        height: auto;
    }

    /* Links */
    .nav-animated {
        position: relative;
        color: white !important;
        font-weight: 500;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .nav-animated::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -3px;
        width: 0;
        height: 2px;
        background-color: #00aaff;
        transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
    }

    .nav-animated:hover::after {
        width: 100%;
        left: 0;
    }

    .nav-animated:hover {
        color: #00aaff !important;
    }

    /* Pulsante hamburger */
    .custom-toggler {
        border: none;
        background: transparent;
        outline: none;
        transition: transform 0.3s ease-in-out;
    }

    .custom-toggler.active {
        transform: rotate(90deg);
    }

    /* Dropdown animato */
    .custom-dropdown {
        animation: fadeIn 0.3s ease-in-out;
        border-radius: 10px;
        overflow: hidden;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .custom-navbar {
            padding: 8px 0;
        }

        .serie-a-logo {
            width: 35px;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.querySelector(".custom-navbar");
        const toggler = document.querySelector(".custom-toggler");

        // Effetto scroll
        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

        // Animazione pulsante hamburger
        toggler.addEventListener("click", function () {
            this.classList.toggle("active");
        });
    });
</script>
