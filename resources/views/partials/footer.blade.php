<footer class="custom-footer ">
    <div class="container">
        <div class="row py-4">
            <!-- Logo e descrizione -->
            <div class="col-md-4 text-center text-md-start">
                <h4 class="text-light fw-bold">{{ config('app.name', 'Laravel') }}</h4>
                <p class=" small">Tutto sulla Serie A: squadre, giocatori, allenatori.</p>
            </div>


            <div class="col-md-4 text-center">
                <h5 class="text-light">Navigazione</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="footer-link">🏠 Home</a></li>
                    <li><a href="{{ route('admin.teams.index') }}" class="footer-link">⚽ Squadre</a></li>
                    <li><a href="{{ route('admin.players.index') }}" class="footer-link">👕 Giocatori</a></li>
                    <li><a href="{{ route('admin.coaches.index') }}" class="footer-link">🎩 Allenatori</a></li>
                    <li><a href="{{ route('admin.classifics.index') }}" class="footer-link">Classifica Serie A</a></li>
                </ul>
            </div>


            <div class="col-md-4 text-center text-md-end">
                <h5 class="text-light">Seguici su</h5>
                <div class="social-icons">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>


        <div class="text-center  py-3 small">
            &copy; <span id="year"></span> {{ config('app.name', 'Laravel') }}. Tutti i diritti riservati.
        </div>
    </div>
</footer>

<style>
    .mt-5 {
        margin-top: 7rem !important;
    }

    .custom-footer {
        background: #1a1a2e;
        color: #ffffff;
        padding-top: 20px;
        position: relative;
        top: 0px;
        left: 0;
    }

    .custom-footer h5 {
        font-size: 1.1rem;
        margin-bottom: 15px;
        color: #f8f9fa;
    }

    .footer-link {
        color: #d1d1d1;
        text-decoration: none;
        display: block;
        transition: color 0.3s ease;
        padding: 3px 0;
    }

    .footer-link:hover {
        color: #007bff;
        transform: translateX(5px);
    }


    .social-icons {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .social-link {
        color: #f8f9fa;
        font-size: 20px;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .social-link:hover {
        color: #007bff;
        transform: scale(1.2);
    }


    @media (max-width: 768px) {
        .custom-footer .text-center {
            text-align: center !important;
        }
    }
</style>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
