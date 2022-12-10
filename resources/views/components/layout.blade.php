<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/kac4pga.css">
    <style>
        body {
            background-image: url("{{ asset('assets/img/bg.png') }}");
            background-repeat: "repeat";
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    @auth
    <!-- Logged in -->
        <nav></nav>
        <main>
            {{ $slot }}
        </main>
        <footer class="fixed-bottom">
            <div class="navbar w-100">
                <div class="float-left">
                    <button class="nav-button house"><i class="fa-solid fa-house-chimney fa-xl"></i></button><button class="nav-button friends" id="friendlist-button"><i class="fa-solid fa-user-group fa-xl"></i></button><button class="nav-button shop"><i class="fa-solid fa-cart-shopping fa-xl"></i></button><button class="nav-button settings"><i class="fa-sharp fa-solid fa-gears fa-xl"></i></button><a href="logout"><button class="nav-button logout"><i class="fa-solid fa-right-from-bracket fa-xl"></i></button></a>
                </div>
                <td class="nav-message"><input type="text" name="message" id="message-field" placeholder="Je kunt hier jouw bericht typen..."></td>
                <div class="float-right radio">
                    <img src="{{ asset('assets/img/pixelfm.png') }}" alt="PixelFM Logo">
                    <td><button class="radio-button" id="pause" value="Pause"><i class="fa-solid fa-pause"></i></button></td>
                    <td><button class="radio-button" id="play" value="Play"><i class="fa-solid fa-play"></i></button></td><br>
                    <td class="nav-song"><span>
                    <span class="playnow"><strong>Speelt nu:</strong> <span href="" class="cc_streaminfo" data-type="song" data-username="kai">Laden...</span></span>
                    <div>
                </span></td>
                </div>
            </div>
            <script language="javascript" type="text/javascript" src="https://hydra.shoutca.st:2199/system/streaminfo.js"></script>
            <script>
                // Invoke new Audio object
                var audio = new Audio('http://148.251.43.149:8039/stream');
                audio.autoplay = true;
                // Get the play button and append an audio play method to onclick
                var play = document.getElementById('play');
                play.addEventListener('click', function(){
                    audio.play();
                }, false);

                // Get the pause button and append an audio pause method to onclick
                var pause = document.getElementById('pause');
                pause.addEventListener('click', function(){
                    audio.pause();
                }, false);

                // Get the HTML5 range input element and append audio volume adjustment to onchange
                var volume = document.getElementById('volume');
                volume.addEventListener('change', function(){
                    audio.volume = parseFloat(this.value / 10);
                }, false);
            </script>
        </footer>
    @else
    <!-- Not logged in -->
        <nav>
            
        </nav>
        <main>
            {{ $slot }}
        </main>
        <footer></footer>
    @endauth
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f9351c730f.js" crossorigin="anonymous"></script>
<script type="javascript" src="{{ asset('assets/js/toggle.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>