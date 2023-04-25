@include('layouts.header')

@include('layouts.menu')


@section('header')
@endsection
<div class="page-wrapper">
    <!-- Parte de arriba -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Peces</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Peces</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--  ya movi el bpoton :3-->
            <div class="col-md-6 col-4 align-self-center">
                <div class="text-end upgrade-btn">
                    <a href="/fish/create" class="btn btn-success d-none d-md-inline-block text-white"
                        target="_blank">Agregar
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">Listado de Peces</h4>
            </div>
            <div class="table-responsive">
                <table class="table customize-table mb-0">
                    <thead>
                        <tr>
                            <th scope="col" class="text-nowrap">Nombre</th>
                            <th scope="col" class="text-nowrap">Tamaño</th>
                            <th scope="col" class="text-nowrap">Sexo</th>
                            <th scope="col" class="text-nowrap">Pecera</th>
                            <th scope="col" class="text-nowrap">Tipo de pez</th>
                            <th scope="col" class="text-nowrap">Comida</th>
                            <th scope="col" class="text-nowrap">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fishes as $item)
                            <tr>
                                <td class="text-nowrap">{{ $item->name }}</td>
                                <td class="text-nowrap">{{ $item->size }}</td>
                                <td class="text-nowrap">{{ $item->sex->name }}</td>
                                <td class="text-nowrap">{{ $item->fishbowl->name }}</td>
                                <td class="text-nowrap">{{ $item->kind->name }}</td>
                                <td class="text-nowrap">{{ $item->food->name }}</td>
                                <td class="text-nowrap">
                                    <a class="btn btn-success " href="fish/{{ $item->id }}"><i
                                            class="fas fa-eye"></i></a>
                                    <a class="btn btn-warning " href="fish/{{ $item->id }}/edit"><i
                                            class=" fas fa-edit"></i></a>
                                    <form action="fish/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger " type="submit"><i
                                                class="fas fa-trash"></i></button>
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
