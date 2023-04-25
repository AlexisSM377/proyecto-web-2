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
                                    <li class="breadcrumb-item"><a href="/spec">Especificaciones</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Editar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
        <h1>Editar campo</h1>
        <div class="card-body">
                
                <form action="{{url('spec/' .$specs->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label> Cpacidad de la pecera:</label>
                    <input class="form-control" type="number" name="water" id="water"  value="{{$specs->water}}">
                    <label> Nivel de iluminacion:</label>
                    <input class="form-control" type="number" name="ilumise" id="ilumise"  value="{{$specs->ilumise}}">
                    <label> Ph:</label>
                    <input class="form-control" type="number" name="ph" id="ph"  value="{{$specs->ph}}">
                    <div class="row">
                        <a class="btn btn-danger m-3"  href="/spec" >Cancelar</a>
                        <button type="submit" class="btn btn-primary m-3">Guadar</button>
                    </div>
                </form>
                </div>
    </div>

@include('layouts.footer')