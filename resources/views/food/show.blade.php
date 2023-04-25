@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Comida</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Comida</li>
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
                        <h4 class="card-title mb-0">Detalle Comida</h4>
                      </div>
                      <div class="card-body">
                          <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tipos">Nombre</label>
                                 <p>{{$food->name}}</p>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="tipos">Dieta</label>
                                 <p>{{$food->diet->name}}</p>
                              </div>
                              
                              <div class="col-md-6 mb-3">
                                <label for="tipos">Producto</label>
                                <p>{{$food->product->name}}</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

@include('layouts.footer')