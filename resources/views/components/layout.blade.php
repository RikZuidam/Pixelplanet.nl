<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        body {
            background-image: url("{{ asset('assets/img/bg.png') }}");
            background-repeat: "repeat";
        }
    </style>
    <title>Document</title>
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
                    <td class="nav-button"><button><i class="fa-solid fa-house"></i></button></td>
                    <td class="nav-button"><button id="friendlist-button"><i class="fa-solid fa-user-group"></i></button></td>
                    <td class="nav-button"><button><i class="fa-solid fa-cart-shopping"></i></button></td>
                    <td class="nav-button"><button><i class="fa-sharp fa-solid fa-gears"></i></button></td>
                </div>
                <td class="nav-message"><input type="text" name="message" id="message-field" placeholder="Typ hier..."></td>
                <div class="float-right">
                    <td class="nav-button"><button><i class="fa-solid fa-backward-step"></i></button></td>
                    <td class="nav-button"><button><i class="fa-solid fa-play"></i></button></td>
                    <td class="nav-button"><button><i class="fa-solid fa-forward-step"></i></button></td>
                    <td class="nav-song"><span>
                    <audio controls src="http://148.251.43.149:8039/stream"></audio><br>
                    Speelt nu: <a href="https://hydra.shoutca.st:2199/tunein/kai.pls" class="cc_streaminfo" data-type="song" data-username="kai">Laden ...</a><br />
                </span></td>
                </div>
            </div>
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
    <script language="javascript" type="text/javascript" src="https://hydra.shoutca.st:2199/system/streaminfo.js"></script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f9351c730f.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/toggle.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>