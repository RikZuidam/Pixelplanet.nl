<x-layout>
    <x-card>
        <div class="row d-flex align-items-center justify-content-center p-3" style="height: 600px">
            <div class="col-5 text-center m-auto">
                <header>
                    logo
                </header>
                <main>
                    <form action="" method="post">
                        @csrf
                        <input type="text" name="" id="" placeholder="Gebruikersnaam of e-mailadres" class="login-fields p-3 w-100 m-2">

                        <input type="password" name="" id="" placeholder="Wachtwoord" class="login-fields p-3 w-100 m-2">
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