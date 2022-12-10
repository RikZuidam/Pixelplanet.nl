<x-layout>
    <x-card>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <main>
                            <form action="register" method="post">
                                @csrf
                                <input type="text" name="email" id="" placeholder="E-mailadres" class="auth-fields" value="{{old('email')}}">
                                <br>
                                @error('email')
                                    <div class="alert alert-danger" role="alert"><i class="fa-solid fa-chevron-right"></i> <strong>Oeps!</strong> {{$message}}</div>
                                @enderror
                                <input type="password" name="password" id="" placeholder="Wachtwoord" class="auth-fields" value="{{old('password')}}">
                                <br>
                                @error('password')
                                    <div class="alert alert-danger" role="alert"><i class="fa-solid fa-chevron-right"></i> <strong>Oeps!</strong> {{$message}}</div>
                                @enderror
                                <input type="password" name="password_confirmation" placeholder="Wachtwoord nogmaals" class="auth-fields" value="{{old('password_confirmation')}}" />
                                <button class="auth-fields login social-hover" type="submit" class="w-100 p-3"><i class="fa-solid fa-chevron-right"></i> Registreren met <strong>wachtwoord</strong></button>
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
                        <button class="auth-fields facebook social-hover" type="submit" class="w-100 p-3"><i class="fa-brands fa-facebook"></i> Registeren met <strong>Facebook</strong></button>
                        <button class="auth-fields google social-hover" type="submit" class="w-100 p-3"><i class="fa-brands fa-google"></i> Registeren met <strong>Google</strong></button>
                        <button class="auth-fields instagram social-hover" type="submit" class="w-100 p-3"><i class="fa-brands fa-instagram"></i> Registeren met <strong>Instagram</strong></button>
                        <button class="auth-fields snapchat social-hover" type="submit" class="w-100 p-3"><i class="fa-brands fa-snapchat"></i> Registeren met <strong>Snapchat</strong></button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col text-center m-auto">
                        <div class="card no-account">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                    <span>Heb je al een account?<br><i>Ga dan snel terug en login.</i></span>
                                </div>
                                <div class="col-4">
                                    <a href="login" class="register-button" type="submit"><i class="fa-solid fa-chevron-right"></i> Inloggen</strong></a>
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