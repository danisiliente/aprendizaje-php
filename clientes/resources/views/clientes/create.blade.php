<div class="container w-50 border p-4 mt-4"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <form action="{{ route('clientes.store') }}" method="POST" novalidate>
    @csrf
    
    @if (session('success'))
      <h6 class="alert alert-success p-2 mt-2" >{{ session('success') }}</h6>   
    @endif

    <div class="mb-3">
      <label for="exampleInputEmail1"class="form-label">
        Rol del Susodicho:
      </label>
      <input
        id="rol" aria-describedby="rol"
        name="rol_id"
        type="number"
        class="form-control"
        value="{{ old('rol_id') }}"
      >
        @error('rol_id')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror

    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">
        Fecha de registro del Susodicho:
      </label>
      <input
        id="exampleInputPassword1"
        name="fecha_registro"
        type="date" 
        class="form-control"
        value="{{ old('fecha_registro') }}"
      >
        @error('fecha_registro')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror
    </div>
    
    <button
      type="submit" class="btn btn-primary">
        Enviar
    </button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>