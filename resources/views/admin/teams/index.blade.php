@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <section class="mb-5">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="m-3 border-0 rounded-3 overflow-hidden fade-in py-3">
                            <a href="{{ route('admin.teams.show', $team->id) }}">
                                <img src="{{ asset('/storage/' . $team->team_logo) }}"
                                    class="card-img-top img-fluid team-logo object-fit-contain" alt="{{ $team->name }}">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="video-background overflow-hidden">
                <div id="player" class="position-absolute"></div>
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

        /* Contenitore del video */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }

        /* Impostazioni per il video */
        #player {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            min-width: 100vw;
            min-height: 56.25vw; 
            pointer-events: none;
        }

        @media (max-width: 768px) {
            #player {
            width: 410vw; 
            height: 450.5vw; 
            }
        }
    

        @media (max-width: 768px) {
            .team-logo {
                height: 100px;
            }
        }

        @media (max-width: 576px) {
            .team-logo {
                height: 80px;
            }
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

        let tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        let firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        let player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                videoId: 'LqPnNSIQfLQ',
                playerVars: {
                    autoplay: 1,
                    loop: 1,
                    playlist: 'LqPnNSIQfLQ',
                    mute: 1,
                    controls: 0,
                    showinfo: 0,
                    modestbranding: 1,
                    fs: 0,
                    rel: 0,
                    disablekb: 1,
                    vq: 'hd1080',
                    cc_load_policy: 0,
                    iv_load_policy: 3
                },
                events: {
                    onReady: function(event) {
                        event.target.playVideo();
                    },
                    onStateChange: function(event) {
                        if (event.data === YT.PlayerState.ENDED) {
                            event.target.seekTo(0);
                        }
                    }
                }
            });
        }
    </script>
@endsection
