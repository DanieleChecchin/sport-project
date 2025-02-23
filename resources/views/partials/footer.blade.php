<footer class="custom-footer">
    <div class="container">
        <div class="row py-4 align-items-center">
            <!-- Logo e descrizione -->
            <div class="col-md-4 text-center text-md-start">
                <h4 class="text-light fw-bold">{{ config('app.name', 'Laravel') }}</h4>
                <p class="small">Tutto sulla Serie A: squadre, giocatori, allenatori.</p>
                <img src="{{ asset('storage/serie A.png') }}" alt="Serie A Logo" class="serie-a-logo">
            </div>

            <!-- Navigazione -->
            <div class="col-md-4 text-center">
                <h5 class="text-light">Navigazione</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="footer-link">🏠 Home</a></li>
                    <li><a href="{{ route('admin.teams.index') }}" class="footer-link">⚽ Squadre</a></li>
                    <li><a href="{{ route('admin.players.index') }}" class="footer-link">👕 Giocatori</a></li>
                    <li><a href="{{ route('admin.coaches.index') }}" class="footer-link">🎩 Allenatori</a></li>
                    <li><a href="{{ route('admin.classifics.index') }}" class="footer-link">🏆 Classifica Serie A</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div class="col-md-4 text-center text-md-end">
                <h5 class="text-light">Seguici su</h5>
                <div class="social-icons">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>       

        <div class="text-center py-3 small">
            &copy; <span id="year"></span> {{ config('app.name', 'Laravel') }} Tutti i diritti riservati.
        </div>
    </div>
</footer>

<!-- CSS migliorato -->
<style>
   .custom-footer {
    background: linear-gradient(to right, #1a1a2e, #0f3460);
    color: #ffffff;
    padding: 0; 
    margin: 0; 
    position: relative;
}

.custom-footer .container {
    padding-top: 20px; 
    padding-bottom: 10px; 
}


.text-center.py-3 {
    padding: 5px 0; 
}


    .text-center.py-3 {
        padding: 5px 0; 
}


    .footer-link {
        color: #d1d1d1;
        text-decoration: none;
        display: block;
        transition: all 0.3s ease;
        padding: 5px 0;
    }

    .footer-link:hover {
        color: #00d4ff;
        transform: translateX(7px);
        font-weight: bold;
    }

    
    .serie-a-logo:hover {
        opacity: 1;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .social-link {
        color: #f8f9fa;
        font-size: 22px;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .social-link:hover {
        color: #00d4ff;
        transform: scale(1.3);
    }

    
    @media (max-width: 768px) {
        .custom-footer .text-center {
            text-align: center !important;
        }
    }
</style>

<!-- JS per aggiornare l'anno automaticamente -->
<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
