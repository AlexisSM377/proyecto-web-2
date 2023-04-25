@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper" style="display: block;">
    {{-- Menu superior --}}
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-md-5 align-self-center">
          <h3 class="page-title">Ediciion Productos</h3>
          <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Editar Productos
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    {{-- Fin de Menu Superior --}}

    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="border-bottom title-part-padding p-3" >
                <h4 class="card-title mb-0">Editar Productos</h4>
              </div>
              <div class="card-body">
                  <form method="POST" action="/product/{{$product->id}}">
                    @csrf
                    @method('PATCH')
                      
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="name"  required="" value="{{$product->name}}">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="descripcion">Descripcion</label>
                      <input type="text" class="form-control" id="descripcion" name="description"  required="" value="{{$product->description}}">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="precio">Precio</label>
                      <input type="text" class="form-control" id="precio" name="price"  required="" value="{{$product->price}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="existencia">Existencia</label>
                        <input type="text" class="form-control" id="existencia" name="existence"  required="" value="{{$product->existence}}">
                      </div>
                  </div>
                  <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                    Actualizar
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@include('layouts.footer')