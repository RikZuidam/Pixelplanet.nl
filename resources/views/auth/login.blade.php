<x-layout>
    <x-card>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-5 m-auto">
                        <header>
                            logo
                        </header>
                        <main>
                            <form action="login" method="post">
                                @csrf
<!-- Check voor banned ja of nee -->
<!-- Zekers -->
                                <input type="text" name="email" id="" placeholder="Gebruikersnaam of e-mailadres" class="auth-fields" value="{{old('email')}}">
                                @error('email')
                                <div class="alert alert-danger" role="alert"><i class="fa-solid fa-chevron-right"></i> <strong>Oeps!</strong> {{$message}}</div>
                                @enderror
                                <input type="password" name="password" id="" placeholder="Wachtwoord" class="auth-fields" value="{{old('password')}}">
                                @error('password')
                                    <div class="alert alert-danger" role="alert"><i class="fa-solid fa-chevron-right"></i> <strong>Oeps!</strong> {{$message}}</div>
                                @enderror

                                <span>
                                    <input clas="float-left" type="checkbox" name="" id=""> Onthoud mij</input>
                                    <small><a href="" class="float-right password-forget">Wachtwoord vergeten?</a></small>
                                </span>
                                <br><br>
                                <button class="auth-fields login" type="submit" class="w-100 p-3"><i class="fa-solid fa-chevron-right"></i> Inloggen met <strong>wachtwoord</strong></button>
                            </form>
                        </main>
                    </div>
                    <div class="col-1 border text-center m-auto">
                        
                    </div>
                    <div class="col-5 m-auto">
                        <button class="auth-fields facebook" type="submit" class="w-100 p-3"><i class="fa-brands fa-facebook"></i> Inloggen met <strong>Facebook</strong></button>
                        <button class="auth-fields google" type="submit" class="w-100 p-3"><i class="fa-brands fa-google"></i> Inloggen met <strong>Google</strong></button>
                        <button class="auth-fields instagram" type="submit" class="w-100 p-3"><i class="fa-brands fa-instagram"></i> Inloggen met <strong>Instagram</strong></button>
                        <button class="auth-fields snapchat" type="submit" class="w-100 p-3"><i class="fa-brands fa-snapchat"></i> Inloggen met <strong>Snapchat</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </x-card>
</x-layout>