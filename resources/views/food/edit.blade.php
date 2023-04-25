@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Usuario</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Usuario</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="border-bottom title-part-padding p-3" >
                        <h4 class="card-title mb-0">Registrar Comida</h4>
                      </div>
                      <div class="card-body">
                          <form method="POST" action="/food">
                              @csrf
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="tipos">Nombre</label>
                              <input type="text" class="form-control" id="nombre" name="name"  required="" value="{{$food->name}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tipos">Dieta</label>
                                  <select class="form-select" required="" name="diet_id">
                                    <option selected>Elige la dieta</option>
                                    @foreach($diets as $diet)   
                                    <option value="{{$diet->id}}" @if($diet->id == $food->diet_id) selected @endif>{{$diet->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="tipos">Producto</label>
                                  <select class="form-select" required="" name="product_id">
                                    <option selected>Elige el producto</option>
                                    @foreach($products as $product)   
                                    <option value="{{$product->id}}" @if($product->id == $food->product_id) selected @endif>{{$product->name}}</option>
                                    @endforeach
                                  </select>
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