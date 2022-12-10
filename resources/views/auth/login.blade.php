<x-layout>
    <x-card>
        <div class="card">
            <div class="card-body">
                <!-- Check met PHP voor banned ja of nee (Zoja, onderstaande alert weergeven met informatie over de ban. Zo niet, geen alert en gewoon redirect naar home page) -->
                <div class="alert alert-danger" role="alert" style="margin-bottom: 20px;">
                    <i class="fa-solid fa-ban"></i> Oei, zo te zien ben je verbannen.<br>
                    <strong>Reden: </strong>Pesten, intimdatie en/of discriminatie<br>
                    <strong>Verbanning verloopt: </strong>27 dec. 2022 14:34
                </div>
                <!-- Zekers -->
                <div class="row">
                    <div class="col-5">
                        <header>
                            <h2><strong>Inloggen</strong></h2>
                        </header>
                        <main>
                            <form action="login" method="post">
                                @csrf
                                <input type="text" name="email" id="" placeholder="Gebruikersnaam of e-mailadres" class="auth-fields" value="{{old('email')}}">
                                @error('email')
                                <div class="alert alert-danger" role="alert"><i class="fa-solid fa-chevron-right"></i> <strong>Oeps!</strong> {{$message}}</div>
                                @enderror
                                <input type="password" name="password" id="" placeholder="Wachtwoord" class="auth-fields" value="{{old('password')}}">
                                @error('password')
                                    <div class="alert alert-danger" role="alert"><i class="fa-solid fa-chevron-right"></i> <strong>Oeps!</strong> {{$message}}</div>
                                @enderror

                                <span>
                                    <!-- <input clas="float-left" type="checkbox" name="" id=""> Onthoud mij</input> -->
                                    <small><a href="" class="float-right password-forget">Wachtwoord vergeten?</a></small>
                                </span>

                                <button class="auth-fields login social-hover" type="submit" class="w-100 p-3"><i class="fa-solid fa-chevron-right"></i> Inloggen met <strong>wachtwoord</strong></button>
                            </form>
                        </main>
                    </div>
                    <div class="col-2 text-center m-auto">
                        <span class="or-line"><div class="line"> 
                        </div>   <div style="clear:both;"></div> OF<br>
                        <div class="line"> 
                        </div>   <div style="clear:both;"></div></span>
                    </div>
                    <div class="col-5">
                        <button class="auth-fields facebook social-hover" type="submit" class="w-100 p-3"><i class="fa-brands fa-facebook"></i> Inloggen met <strong>Facebook</strong></button>
                        <button class="auth-fields google social-hover" type="submit" class="w-100 p-3"><i class="fa-brands fa-google"></i> Inloggen met <strong>Google</strong></button>
                        <button class="auth-fields instagram social-hover" type="submit" class="w-100 p-3"><i class="fa-brands fa-instagram"></i> Inloggen met <strong>Instagram</strong></button>
                        <button class="auth-fields snapchat social-hover" type="submit" class="w-100 p-3"><i class="fa-brands fa-snapchat"></i> Inloggen met <strong>Snapchat</strong></button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col text-center m-auto">
                        <div class="card no-account">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                    <span>Nog geen account? Maak snel een account aan!<br><i>Maak vrienden, doe mee en val op.</i></span>
                                </div>
                                <div class="col-4">
                                    <a href="register" class="register-button" type="submit"><i class="fa-solid fa-chevron-right"></i> Account aanmaken</strong></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    
                    <div class="col text-center m-auto footer-links">
                        <a href="" >Algemene Voorwaarden</a> | 
                        <a href="" >Privacy Beleid</a> |
                        <a href="" >Gids voor Ouders</a>
                        <br>
                        Copyright © 2022 - PixelPlanet
                    </div>
                </div>
            </div>
        </div>
    </x-card>
</x-layout>