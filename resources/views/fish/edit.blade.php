@include('layouts.header')

@include('layouts.menu')


@section('header')
@endsection
<div class="page-wrapper" style="display: block;">
    {{-- Menu superior --}}
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-md-5 align-self-center">
                <h3 class="page-title">Peces</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Peces</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Crear Peces
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
                    <div class="border-bottom title-part-padding p-3">
                        <h4 class="card-title mb-0">Registrar Peces</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/fish">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="name"
                                        required="" value="{{$fish->name}}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="descripcion">Tamaño</label>
                                    <input type="text" class="form-control" id="descripcion" name="size"
                                        required="" value="{{$fish->size}}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tipos">Sexo</label>
                                    <select class="form-select" required="" name="sex_id">
                                        <option selected>Elige el tipo de sexo</option>
                                        @foreach ($sexs as $sex)
                                            <option value="{{ $sex->id }}"
                                                @if ($sex->id == $fish->sex_id) selected @endif>{{ $sex->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tipos">Pecera</label>
                                    <select class="form-select" required="" name="fishbowl_id">
                                        <option selected>Elige la Pecera</option>
                                        @foreach ($fishbowls as $fishbowl)
                                            <option value="{{ $fishbowl->id }}"
                                                @if ($fishbowl->id == $fish->fishbowl_id) selected @endif>{{ $fishbowl->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tipos">Tipo de Pez</label>
                                    <select class="form-select" required="" name="kind_id">
                                        <option selected>Elige el tipo de pez</option>
                                        @foreach ($kinds as $kind)
                                            <option value="{{ $kind->id }}"
                                                @if ($kind->id == $fish->kind_id) selected @endif>{{ $kind->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tipos">Comida</label>
                                    <select class="form-select" required="" name="food_id">
                                        <option selected>Elige el tipo de Comida</option>
                                        @foreach ($foods as $food)
                                            <option value="{{ $food->id }}"
                                                @if ($food->id == $fish->food_id) selected @endif>{{ $food->name }}
                                            </option>
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
