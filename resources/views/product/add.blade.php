@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper" style="display: block;">
    {{-- Menu superior --}}
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-md-5 align-self-center">
          <h3 class="page-title">Productos</h3>
          <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Registrar Productos
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
                <h4 class="card-title mb-0">Registrar Productos</h4>
              </div>
              <div class="card-body">
                  <form method="POST" action="/product">
                      @csrf
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="name"  required="">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="descripcion">Descripcion</label>
                      <input type="text" class="form-control" id="descripcion" name="description"  required="">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="precio">Precio</label>
                      <input type="text" class="form-control" id="precio" name="price"  required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="existencia">Existencia</label>
                        <input type="text" class="form-control" id="existencia" name="existence"  required="">
                      </div>
                  </div>
                  <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                    Guadar
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
            

@include('layouts.footer')