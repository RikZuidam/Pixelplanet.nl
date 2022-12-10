<x-layout>
    @section('title')
        Home
    @endsection
    <div class="container-fluid">
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
</x-layout>