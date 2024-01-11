@extends('layout.base')

@section('content')

<div class="container w-50 border p-4 mt-4"> 
  <form action="{{ route('paises.store') }}" method="POST" novalidate>
    @csrf
    
    @if (session('success'))
      <h6 class="alert alert-success p-2 mt-2" >{{ session('success') }}</h6>   
    @endif

    <div class="mb-3">
      <label for="exampleInputEmail1"class="form-label">
        Código País:
      </label>
      <input
        id="exampleInputEmail1" aria-describedby="emailHelp"
        name="codigo"
        type="text"
        class="form-control"
        value="{{ old('codigo') }}"
      >
        @error('codigo')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror

    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">
        Nombre País:
      </label>
      <input
        id="exampleInputPassword1"
        name="nombre"
        type="text" class="form-control"
        @error('nombre')
          value="{{ old('nombre') }}"
        @enderror
      >
        @error('nombre')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">
        Continente:
      </label>
      <input
        id="exampleInputPassword1"
        name="continente"
        type="text" class="form-control"
        @error('continente')
          value="{{ old('continente') }}"
        @enderror
      >
        @error('continente')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror
    </div>
    
    <button
      type="submit" class="btn btn-primary">
        Enviar
    </button>
  </form>
</div>

@endsection 