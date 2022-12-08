<x-layout>
    <x-card>
        <header>
            <h1>Register</h1>
        </header>
        <main>
            <form action="register" method="post">
                @csrf
                <input type="text" name="email" id="" placeholder="E-mailadres" class="auth-fields" value="{{old('email')}}">
                <br>
                @error('email')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
                <input type="password" name="password" id="" placeholder="Wachtwoord" class="auth-fields" value="{{old('password')}}">
                <br>
                @error('password')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
                <input type="password" class="w-100" name="password_confirmation" value="{{old('password_confirmation')}}" />
                <a href="login" class="float-right">Login?</a><br><br>
                <input type="submit" value="Inloggen met&#13;&#10;Wachtwoord" class="w-100 p-3">
            </form>
        </main>
    </x-card>
</x-layout>