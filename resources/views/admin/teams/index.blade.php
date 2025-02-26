@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        {{-- <h1 class="text-center mb-4 text-primary fw-bold">Serie A - Giocatori, Squadre e Allenatori</h1> --}}

        <!-- Sezione Squadre -->
        <section class="mb-5">
            {{-- <h2 class="text-danger">🏆 Squadre di Serie A</h2> --}}
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-3">
                        <div class=" m-5  border-0 rounded-3 overflow-hidden fade-in py-3">
                            <a href="{{ route('admin.teams.show', $team->id) }}">
                                <img src="{{ asset('/storage/' . $team->team_logo) }}"
                                    class="card-img-top img-fluid team-logo" alt="{{ $team->name }}">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="video-background">
                <div id="player"></div>
            </div>
        </section>
    </div>

    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .team-logo {
            height: 100px;
            object-fit: contain;
            transition: transform 0.3s ease-in-out;
        }

        .team-logo:hover {
            transform: scale(1.1);
        }


        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        /* Contenitore del video  */
        .video-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    z-index: -1;
}

/* Impostazioni per il video */
#player {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 177.78vh; /* Altezza adattata per il formato 16:9 */
    height: 100vh;
    min-width: 100vw;
    min-height: 56.25vw; /* Larghezza adattata per il formato 16:9 */
    pointer-events: none; /* Evita interazioni col video */
}
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".fade-in");
            let delay = 200;

            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = 1;
                    card.style.transform = "translateY(0)";
                }, index * delay);
            });
        });

        // ------------------------------------------

        let tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        let firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        let player;

        function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: 'LqPnNSIQfLQ', // ID del video YouTube
        playerVars: {
            autoplay: 1, // Auto avvia
            loop: 1, // Loop infinito
            playlist: 'LqPnNSIQfLQ', // Necessario per il loop
            mute: 1, // Muto
            controls: 0, // Nasconde i controlli
            showinfo: 0, // Nasconde info video
            modestbranding: 1, // Rimuove il logo YouTube
            fs: 0, // Disabilita fullscreen
            rel: 0, // Non mostra video correlati
            disablekb: 1, // Disabilita controlli da tastiera
            vq: 'hd1080', // Forza la qualità in Full HD
            cc_load_policy: 0, // Disabilita i sottotitoli
            iv_load_policy: 3 // Disabilita le annotazioni
        },
        events: {
            onReady: function(event) {
                event.target.playVideo();
                event.target.unloadModule("captions"); // Tenta di disattivare manualmente i sottotitoli
                event.target.setOption("captions", "track", {}); // Forza la rimozione dei sottotitoli
            },
            onStateChange: function(event) {
                if (event.data === YT.PlayerState.ENDED) {
                    event.target.seekTo(0); // Riavvia il video dall'inizio senza interruzioni
                }
            }
        }
    });
}



    </script>
@endsection
