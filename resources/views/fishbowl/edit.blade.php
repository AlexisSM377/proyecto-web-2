@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Tipos de usuario</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/fishbowl">Peceras</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Editar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
        <h1>Editar pecera</h1>
        <div class="card-body">
                <form action="{{url('fishbowl/' .$fishbowls->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label for=""> Id:</label>
                    <input class="form-control" type="text" value="{{$fishbowls->id}}" aria-label="Disabled input example" disabled>
                    <label for=""> Usuario:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="user_id">
                                <option selected>Elige el usuario</option>
                                    @foreach($users as $user)   
                                <option value={{$user->id}}>{{$user->name}}</option>
                                   @endforeach
                                </select>
                    <label for=""> especificaciones:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="spec_id">
                                <option selected>Elige las especificaciones</option>
                                    @foreach($specs as $spec)   
                                <option value={{$spec->id}}>{{$spec->water}}</option>
                                   @endforeach
                                </select>
                    <label for=""> Nombre de la pecera:</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{$fishbowls->name}}">
                    <label for=""> Temperatura:</label>
                    <input class="form-control" type="number" id="temp_act" name="temp_act" value="{{$fishbowls->temp_act}}">
                    <label for=""> Iluminacion:</label>
                    <input class="form-control" type="number" id="ilumise_act" name="ilumise_act" value="{{$fishbowls->ilumise_act}}">
                    <label for=""> Ph:</label>
                    <input class="form-control" type="number" id="ph_act" name="ph_act" value="{{$fishbowls->ph_act}}">
                    <div class="row">
                        <a class="btn btn-danger m-3"  href="/students" >Cancelar</a>
                        <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>
    
                    </div>
                </form>
                </div>
    </div>

@include('layouts.footer')