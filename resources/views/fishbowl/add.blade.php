@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Usuario</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/fishbowl">Peceras</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Agregar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
        <h2>Agregar pecera</h2>
        <div class="card-body">

                    <form action="/fishbowl" method="POST">
                        {!!csrf_field()!!}
                        <label for=""> Usuario:</label>
                        <select class="form-control form-select" aria-label="Default select example" name="user_id">
                            <option selected>Elige el usuario</option>
                                @foreach($users as $user)   
                            <option value={{$user->id}}>{{$user->name}}</option>
                               @endforeach
                            </select>
                        <label for=""> Especificaciones:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="spec_id">
                            <option selected>Elige las especificaciones de la pecera</option>
                                @foreach($specs as $spec)   
                            <option value={{$spec->id}}>{{$spec->water}}</option>
                               @endforeach
                            </select>
                        <label for=""> Nombre:</label>
                        <input class="form-control" type="text" name="name" id="name">
                        <label for=""> Temperatura:</label>
                        <input class="form-control" type="number" name="temp_act" id="temp_act">
                        <label for=""> Iluminacion:</label>
                        <input class="form-control" type="number" name="ilumise_act" id="ilumise_act">
                        <label for=""> Ph:</label>
                        <input class="form-control" type="number" name="ph_act" id="temp_act">
                        <div class="row">
                            <a class="btn btn-danger m-3"  href="/fishbowl" >Cancelar</a>
                            <button type="submit" class="btn btn-primary m-3">Guadar</button>
                        </div>
                    </form>
                    <!-- </div> -->
                </div>
    </div>
@include('layouts.footer')