<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav me-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link nav-animated" href="{{ route('admin.teams.index') }}">TEAMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-animated" href="{{ route('admin.players.index') }}">PLAYERS</a>
                        </li>
                    @endauth
                </ul>

                
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link nav-animated" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav-animated" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-animated" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end custom-dropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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
    
    .custom-navbar {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

  
    .custom-navbar.scrolled {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    }

    
    .nav-animated {
        position: relative;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .nav-animated::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -3px;
        width: 100%;
        height: 2px;
        background-color: #007bff;
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
    }

    .nav-animated:hover::after {
        transform: scaleX(1);
    }

    
    .custom-toggler {
        border: none;
        background: transparent;
        outline: none;
        transition: transform 0.3s ease-in-out;
    }

    .custom-toggler:focus {
        outline: none;
        box-shadow: none;
    }

   
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
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.querySelector(".custom-navbar");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

       
        const toggler = document.querySelector(".custom-toggler");
        toggler.addEventListener("click", function () {
            this.classList.toggle("active");
        });
    });
</script>
