@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Registros</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/register">Registros</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Agregar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
        <h2>Agregar usuario</h2>
        <div class="card-body">

                    <form action="/register" method="POST">
                        {!!csrf_field()!!}
                        <label for=""> Nombre de la pecera:</label>
                        <select class="form-control form-select" aria-label="Default select example" name="fishbowl_id">
                            <option selected>Elige la pecera</option>
                                @foreach($fishbowls as $fishbowl)   
                            <option value={{$fishbowl->id}}>{{$fishbowl->name}}</option>
                               @endforeach
                            </select>
                        <label for=""> Temperatura:</label>
                        <input class="form-control" type="text" name="temp" id="temp">
                        <label for=""> Iluminacion:</label>
                        <input class="form-control" type="text" name="ilumise" id="ilumise">
                        <label for=""> Ph:</label>
                        <input class="form-control" type="text" name="ph" id="ph">
                        <div class="row">
                            <a class="btn btn-danger m-3"  href="/register" >Cancelar</a>
                            <button type="submit" class="btn btn-primary m-3">Guadar</button>
                        </div>
                    </form>
                    <!-- </div> -->
                </div>
    </div>

@include('layouts.footer')