@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Tu pecera</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Estado de la pecera</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--  ya movi el bpoton :3-->
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="/fish/create"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Agregar pez
                                </a>
                        </div>
                    </div>
                </div>
            </div>
    <div class="container-fluid">
<table>
  <tr>
    <td style="width: 70%;">Tu pecera</td>
    <td style="width: 30%;">Datos</td>
  </tr>
  <tr>
    <td style="width: 70%;">
    <div style="text-align: right;"><iframe src="https://www.youtube.com/embed/t6D3i8N0Uu8" width="750" height="500" allowfullscreen></iframe></div>
    </td>
    <td style="width: 30%;">
      <h4 class="page-title mb-0 p-0" style="text-align: center;">Temperatura:</h4>
      
      <h3 class="page-title mb-0 p-0" style="text-align: center; color:#77dd77">32 °</h3>
      <br>
      <h4 class="page-title mb-0 p-0" style="text-align: center;">Iluminacion:</h4>
      
      <h3 class="page-title mb-0 p-0" style="text-align: center; color:#77dd77">67 lum</h3>
      <br>
      <h4 class="page-title mb-0 p-0" style="text-align: center;">Ph:</h4> 
      
      <h3 class="page-title mb-0 p-0" style="text-align: center; color:#77dd77">7 ph</h3>
      <br>
      <div class="text-end upgrade-btn">
                            <a href="/fish/create"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Administrar
                                </a>
                        </div>
    </td>
  </tr>
</table>

                
    </div>

@include('layouts.footer')