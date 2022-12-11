<x-layout>
    @extends('partials._settings')
    @section('title')
        Home
    @endsection
    <!-- Test Knop -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#settingsModal">
  Open Instellingen Modal Test
</button>

<!-- Instellingen -->
<div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px);">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #16192C;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="settingsModalLabel" style="color: #fff; font-family: RobotoTitle;">INSTELLINGEN</h1>
            </div>
            <div class="modal-body" style="color: #fff; font-family: RobotoText;">
                <form class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" placeholder="Username" value="Kai" disabled>
                    <label for="floatingInputValue" style="color: grey;">Gebruikersnaam</label>
                </form>
                <div style="padding: 5px;"></div>
                <form class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" placeholder="E-mail" value="kaidenhollander2004@gmail.com" disabled>
                    <label for="floatingInputValue" style="color: grey;">E-mailadres</label>
                </form>
                <hr>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked disabled>
                    <label class="form-check-label" for="flexSwitchCheckChecked"><span class="badge" style="background: #FFD700; box-shadow: 0px 0px 40px 5px #FFD700;">V.I.P</span> Vriendverzoeken inschakelen</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Ruilverzoeken inschakelen</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" style="width: 100%; height: 50px; background-color: #56AF36; border-color: #3C7A25; font-family: RobotoTitle;">Opslaan</button>
            </div>
        </div>
    </div>
</div>

<style>

@font-face {
  font-family: RobotoTitle;
  src: url(fonts/Roboto-Black.ttf);
}
@font-face {
  font-family: RobotoText;
  src: url(fonts/Roboto-Regular.ttf);
}

</style>
    <div class="container-fluid p-0">
        <div class="row m-auto">
            <div class="col-3 text-center">

            </div>
            <div class="col-3 text-center m-auto">

            </div>
            <div class="col-3 text-center p-4" id="friendlist">
                <!-- <div id="list"> -->
                    <header>VRIENDENLIJST</header>
                    <main>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </main>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</x-layout>