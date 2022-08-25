@extends('layouts.app')

@section('content')
    @include('menu.headers')

    <div class="container-fluid mt--6">



        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->

              <div class="card-header border-0">
                <h1 class="mb-0">Nuevo menu</h1>

              </div>


                        <form class="m-5">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Nombre de menu" required max="50">
                            </div>

                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Descripción</label>
                                    <input type="text" class="form-control form-control-lg" id="description" name="description" placeholder="Descripción de menu" required max="50">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Menu padre</label>
                                <input type="number" class="form-control form-control-lg" id="menu_parent"  name="menu_parent" placeholder="Menu padre (menu raíz 0)" max="3">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Menu orden</label>
                                <input type="number" class="form-control form-control-lg" id="order" name="order" placeholder="Menu orden (de acuerdo a la base de datos)" max="3">
                            </div>

                            <div class="form-group row d-flex justify-content-center">
                                <button type="button" class="btn btn-default">Agregar</button>

                            </div>



                        </form>




            </div>
          </div>
        </div>


        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
