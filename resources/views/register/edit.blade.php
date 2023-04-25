@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Tipos de registros</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/register">Registros</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Editar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
        <h1>Editar usuario</h1>
        <div class="card-body">
                <form action="{{url('register/' .$registers->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label for=""> Id:</label>
                    <input class="form-control" type="text" value="{{$registers->id}}" aria-label="Disabled input example" disabled>
                    <label for=""> Pecera:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="fishbowl_id">
                                <option selected>Elige la pecera</option>
                                    @foreach($fishbowls as $fishbowl)   
                                <option value={{$fishbowl->id}}>{{$fishbowl->name}}</option>
                                   @endforeach
                                </select>
                    <label for=""> Temperatura:</label>
                    <input class="form-control" type="number" id="temp" name="temp" value="{{$registers->temp}}">
                    <label for=""> Iluminacion:</label>
                    <input class="form-control" type="number" id="ilumise" name="ilumise" value="{{$registers->ilumise}}">
                    <label for=""> Ph:</label>
                    <input class="form-control" type="number" id="ph" name="ph" value="{{$registers->ph}}">
                    <div class="row">
                        <a class="btn btn-danger m-3"  href="/register" >Cancelar</a>
                        <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>
    
                    </div>
                </form>
                </div>
    </div>


@include('layouts.footer')