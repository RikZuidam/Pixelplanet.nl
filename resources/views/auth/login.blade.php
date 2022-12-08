<x-layout>
    <x-card>
        <div class="row d-flex align-items-center justify-content-center p-3" style="height: 600px">
            <div class="col-5 text-center m-auto">
                <header>
                    logo
                </header>
                <main>
                    <form action="login" method="post">
                        @csrf
                        <input type="text" name="email" id="" placeholder="Gebruikersnaam of e-mailadres" class="auth-fields" value="{{old('email')}}">
                        <br>
                        @error('email')
                            <p class="text-danger text-xs mt-1">{{$message}}</p>
                        @enderror
                        <input type="password" name="password" id="" placeholder="Wachtwoord" class="auth-fields" value="{{old('password')}}">
                        <br>
                        @error('password')
                            <p class="text-danger text-xs mt-1">{{$message}}</p>
                        @enderror
                        <a href="" class="float-right">Wachtwoord vergeten?</a><br>
                        <span class="float-left"><input type="radio" name="" id=""> Onthoud mij</span>
                        <br><br>
                        <input type="submit" value="Inloggen met&#13;&#10;Wachtwoord" class="w-100 p-3">
                    </form>
                </main>
            </div>
            <div class="col-1 border text-center m-auto">
                
            </div>
            <div class="col-5 border text-center m-auto">
                
            </div>
        </div>
        
        <!-- <table style="height: 100px;">
  <tbody>
    <tr>
      <td class="align-baseline">baseline</td>
      <td class="align-top">top</td>
      <td class="align-middle">middle</td>
      <td class="align-bottom">bottom</td>
      <td class="align-text-top">text-top</td>
      <td class="align-text-bottom">text-bottom</td>
    </tr>
  </tbody>
</table> -->
    </x-card>
</x-layout>