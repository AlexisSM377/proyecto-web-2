@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Expedientes</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Expedientes</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--  ya movi el bpoton :3-->
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="/expedient/create"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Agregar
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Expedientes tabla</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Id</th>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0">Acciones</th>
                                            </tr>
                                        </thead>
                                        @foreach($expedients as $expedient)
                                        <tr>
                                            <td>{{$expedient->id}}</td>
                                            <td>{{$expedient->description}}</td>
                                            <td>
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="expedient/{{$expedient->id}}"  ><i class="fas fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="expedient/{{$expedient->id}}/edit"  ><i class=" fas fa-edit"></i></a>
                                                </div>
                                                <form action="expedient/{{$expedient->id}}" method="POST">
                                                    {!! csrf_field() !!}
                                                    @method("delete")
                                                        
                                                    <button class="btn btn-danger m-3" type="submit"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                           
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@include('layouts.footer')