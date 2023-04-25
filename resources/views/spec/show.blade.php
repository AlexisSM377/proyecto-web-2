@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Especificaciones</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/spec">Especificaciones</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mostrar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Especificaciones</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Datos</th>
                                                <th class="border-top-0">Informacion</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>{{$specs->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Pecera</td>
                                            <td>{{$specs->fishbowl->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Capacidad en litros</td>
                                            <td>{{$specs->water}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nivel de luminacion</td>
                                            <td>{{$specs->ilumise}}</td>
                                        </tr>
                                        <tr>
                                            <td>PH estable</td>
                                            <td>{{$specs->ph}}</td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                    <a class="btn btn-outline-success" m-3" href="/spec" ><i class="fas fa-arrow-left"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@include('layouts.footer')