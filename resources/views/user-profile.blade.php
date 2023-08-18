@extends('layout/app')
@section('content')


    <section id="my-profile" class="bg-secondary">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center d-flex align-items-center py-5">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header text-center bg-main">
                                <img class="rounded-circle pt-2" style="width:125px" src="{{ asset('assets/png/defaultpp.jpeg') }}">
                                <h6 class="pt-2">Nama </h6>
                                <span>Username</span>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">An item</li>
                              <li class="list-group-item">A second item</li>
                              <li class="list-group-item">A third item</li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


@endsection