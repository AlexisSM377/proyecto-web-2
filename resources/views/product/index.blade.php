@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Productos</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Productos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--  ya movi el bpoton :3-->
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="/product/create"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Agregar
                                </a>
                        </div>
                    </div>
                </div>
            </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">Listado de Productos</h4>
            </div>
            <div class="table-responsive">
              <table class="table customize-table mb-0">
                <thead>
                  <tr>
                    <th scope="col" class="text-nowrap">Nombre</th>
                    <th scope="col" class="text-nowrap">Descripcion</th>
                    <th scope="col" class="text-nowrap">Precio</th>
                    <th scope="col" class="text-nowrap">Existencia</th>
                    <th scope="col" class="text-nowrap">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                        <td class="text-nowrap">{{$item->name}}</td>
                        <td class="text-nowrap">{{$item->description}}</td>
                        <td class="text-nowrap">{{$item->price}}</td>
                        <td class="text-nowrap">{{$item->existence}}</td>
                        <td class="text-nowrap">                                       
                                <a class="btn btn-success " href="product/{{$item->id}}"  ><i class="fas fa-eye"></i></a>
                                <a class="btn btn-warning " href="product/{{$item->id}}/edit"  ><i class=" fas fa-edit"></i></a>
                                <form action="product/{{$item->id}}" method="POST">
                                    @csrf
                                    @method("delete")  
                                    <button class="btn btn-danger " type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                        </td>
                        </tr> 
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>

@include('layouts.footer')