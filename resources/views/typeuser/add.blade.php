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
                                    <li class="breadcrumb-item"><a href="/typeuser">Tipos de usuario</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Agregar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    <div class="container-fluid">
        <h1>Agregar tipo de usuario</h1>
        <div class="card-body">

                    <form action="/typeuser" method="POST">
                        {!!csrf_field()!!}
                        <label for=""> Tipo de usuario:</label>
                        <input class="form-control" type="text" name="name" id="name">
                        <div class="row">
                            <button type="submit" class="btn btn-primary m-3">Guadar</button>

                        </div>
                    </form>
                    <!-- </div> -->
                </div>
    </div>

@include('layouts.footer')