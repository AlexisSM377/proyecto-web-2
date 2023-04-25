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
                                <h4 class="card-title">Usuario</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Datos</th>
                                                <th class="border-top-0">Informacion</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>Nombre de la pecera</td>
                                            <td>{{$fishbowls->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Usuario</td>
                                            <td>{{$fishbowls->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Especificaciones</td>
                                            <td>{{$fishbowls->spec_id}}</td>
                                         </tr>
                                        <!--mandar a traer mas datos de las especificaciones? -->
                                        <tr>
                                            <td>Temperatura Actual</td>
                                            <td>{{$fishbowls->temp_act}}</td>
                                        </tr>
                                        <tr>
                                            <td>Iluminacion Actual</td>
                                            <td>{{$fishbowls->ilumise_act}}</td>
                                        </tr>
                                        <tr>
                                            <td>PH Actual</td>
                                            <td>{{$fishbowls->ph_act}}</td>
                                        </tr>
                                   
                                        
                                    </tbody>

                                    </table>
                                    <a class="btn btn-outline-success" m-3" href="/fishbowl" ><i class="fas fa-arrow-left"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Especificaciones de Pecera</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Datos</th>
                                                <th class="border-top-0">Informacion</th>
                                            </tr>
                                        </thead>
                                        <!--mandar a traer mas datos de las especificaciones? -->
                                        <tr>
                                            <td>Agua</td>
                                            <td>{{$fishbowls->especificacion->water}}</td>
                                        </tr>
                                        <tr>
                                            <td>iluminacion</td>
                                            <td>{{$fishbowls->especificacion->ilumise}}</td>
                                        </tr>
                                        <tr>
                                            <td>Ph</td>
                                            <td>{{$fishbowls->especificacion->ph}}</td>
                                        </tr>
                                   
                                        
                                    </tbody>

                                    </table>
                                    <a class="btn btn-outline-success" m-3" href="/fishbowl" ><i class="fas fa-arrow-left"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('layouts.footer')