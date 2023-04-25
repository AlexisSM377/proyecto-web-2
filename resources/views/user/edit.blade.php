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
                                    <li class="breadcrumb-item"><a href="/user">Usuario</a></li>
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
                <form action="{{url('user/' .$users->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label for=""> Id:</label>
                    <input class="form-control" type="text" value="{{$users->id}}" aria-label="Disabled input example" disabled>
                    <label for=""> Tipo de usuario:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="typeuser_id">
                                <option selected>Elige el tipo de usuario</option>
                                    @foreach($typeusers as $typeuser)   
                                <option value={{$typeuser->id}}>{{$typeuser->name}}</option>
                                   @endforeach
                                </select>
                    <label for=""> Nombre:</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{$users->name}}">
                    <label for=""> Correo:</label>
                    <input class="form-control" type="text" id="email" name="email" value="{{$users->email}}">
                    <label for=""> Contraseña:</label>
                    <input class="form-control" type="text" id="password" name="password" value="{{$users->password}}">
                    <!-- <input class="form-control" type="text" id="subject_id" name="subject_id" value="{{$users->subject_id}}"> -->
                    <div class="row">
                        <a class="btn btn-danger m-3"  href="/students" >Cancelar</a>
                        <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>
    
                    </div>
                </form>
                </div>
    </div>

@include('layouts.footer')