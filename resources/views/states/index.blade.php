@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Estado</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Estados</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--  ya movi el bpoton :3-->
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="/diet/create"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Agregar
                                </a>
                        </div>
                    </div>
                </div>
            </div>

    <div class="container-fluid">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Estados</label>
            <select class="form-select estado" name="estado" id="mySelectEstado" aria-label="Default select example">
                <option selected>Selecciona un Estado</option>
                @foreach ($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                @endforeach
              </select>
          </div>
        
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Municipios</label>
            <select class="form-select" name="manicipio" id="mySelectMunicipio" aria-label="Default select example">
                
            </select>
          </div>

    </div>

@include('layouts.footer')

<script >
    const estadoSelect = document.querySelector('.estado');
    const municipioSelect = document.getElementById('mySelectMunicipio');
    estadoSelect.addEventListener('change', (event) =>  {
        let id = document.getElementById("mySelectEstado").value
        fetch("http://127.0.0.1:8000/municipios-estados/" + id)
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