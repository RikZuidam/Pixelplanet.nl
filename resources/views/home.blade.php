<x-layout>
    @extends('partials._settings')
    @extends('partials._commands')
    @section('title')
        Home
    @endsection

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
                                @foreach ($friends as $friend)
                                    @for ($i = 0; $i < count($friend); $i++)
                                        <tr>
                                            <td>
                                                <span style="text-align: left">{{ $friend[0]->name }}</span>
                                                <span style="text-right float-right">
                                                <button>[]</button>
                                                <button>[]</button>
                                                </span>
                                                
                                            </td>
                                        </tr>
                                    @endfor
                                @endforeach
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