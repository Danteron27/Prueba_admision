<div class="mb-3">
    <div class="mb-3">
        <label for="email" class="form-label">Codigo</label>
        <input type="text" name="Codigo" class="form-control @error('Codigo') is-invalid @enderror"
        value="{{old('Codigo')? old('Codigo'): (isset($categoria)? $categoria->Codigo: '')}}"
        >
        @error('Codigo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror"
        value="{{old('Nombre')? old('Nombre'): (isset($categoria)? $categoria->Nombre: '')}}"
        >
        @error('Nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="Descripcion" class="form-label">Descripción</label>
        <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror"
        value="{{old('Descripcion')? old('Descripcion'): (isset($categoria)? $categoria->Descripcion: '')}}"
        >
        @error('usuario')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="Observacion" class="form-label">Observacion</label>
        <textarea id="Observacion" name="Observacion" rows="4" cols="40" class="form-control"
        value="{{old('Observacion')? old('Observacion'): (isset($categoria)? $categoria->Observacion: '')}}"></textarea>
    </div>

    {{-- Botones --}}
    <button type="submit" class="btn btn-primary me-2">Enviar</button>
    <a href="/Categories" class="btn btn-danger">Cancelar</a>
