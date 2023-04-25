@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper" style="display: block;">
    {{-- Menu superior --}}
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-md-5 align-self-center">
          <h3 class="page-title">Form Validation</h3>
          <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Usarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Crear Usuarios
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
              <h4 class="card-title mb-0">Registrar Usuario</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/user">
                    @csrf
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="name"  required="">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" id="correo" name="email"  required="">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="contraseña">Contraseña</label>
                    <input type="text" class="form-control" id="contraseña" name="password"  required="">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="tipos">Tipos de Usuarios</label>
                      <select class="form-select" required="" name="typeuser_id">
                        <option selected>Elige el tipo de usuario</option>
                        @foreach($typeusers as $typeuser)   
                    <option value={{$typeuser->id}}>{{$typeuser->name}}</option>
                       @endforeach
                      </select>
                  </div>
                </div>
                    <div class="container-fluid">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Estados</label>
            <select class="form-select estado" name="state_id" id="mySelectEstado" aria-label="Default select example">
                <option selected>Selecciona un Estado</option>
                @foreach ($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                @endforeach
              </select>
          </div>
        
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Municipios</label>
            <select class="form-select" name="township_id" id="mySelectMunicipio" aria-label="Default select example">
                
            </select>
          </div>
          <div class="col-md-4 mb-3">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="address"  required="">
                  </div>

    </div>

@include('layouts.footer')

<script >
    const estadoSelect = document.querySelector('.estado');
    const municipioSelect = document.getElementById('mySelectMunicipio');
    estadoSelect.addEventListener('change', (event) =>  {
        let id = document.getElementById("mySelectEstado").value
        fetch('http://127.0.0.1:8000/municipios-estados/' +id)
        .then((response) => response.json())
        .then((json) => this.generarmunicipios(json));
    });

    function generarmunicipios(data){
        data.forEach(function(element) {
            let opcion = document.createElement('option')
            opcion.value = element.id
            opcion.text = element.nombre
            municipioSelect.add(opcion)
        })
    }
</script>
                <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                  Guadar
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('layouts.footer')