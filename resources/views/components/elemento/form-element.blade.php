<div class="mb-3">
    <div class="mb-3">
        <label for="Id_categorias" class="form-label">Categoría</label>
        <select name="Id_categorias" class="form-control @error('Id_categorias') is-invalid @enderror">
            <option value="">Seleccionar Categoría</option>
            @foreach ($categorias as $id => $nombre)
                <option value="{{ $id }}" {{ old('Id_categorias', $elemento->Id_categorias) == $id ? 'selected' : '' }}>
                    {{ $nombre }}</option>
            @endforeach
        </select>


    </div>



    <div class="mb-3">
        <label for="Referencias" class="form-label">Referencia</label>
        <input type="text" name="Referencias" class="form-control @error('Referencias') is-invalid @enderror"
            value="{{ old('Referencias') ? old('Referencias') : (isset($elemento) ? $elemento->Referencias : '') }}">
        @error('Referencias')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="Nombres" class="form-label">Nombre</label>
        <input type="text" name="Nombres" class="form-control @error('Nombres') is-invalid @enderror"
            value="{{ old('Nombres') ? old('Nombres') : (isset($elemento) ? $elemento->Nombres : '') }}">
        @error('Nombres')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="Cantidad" class="form-label">Cantidad</label>
        <input type="number" name="Cantidad" class="form-control @error('Cantidad') is-invalid @enderror"
            value="{{ old('Cantidad') ? old('Cantidad') : (isset($elemento) ? $elemento->Cantidad : '') }}">
        @error('Cantidad')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <div class="mb-3">
            <label for="Valor" class="form-label">Valor</label>
            <input type="text" name="Valor" class="form-control @error('Valor') is-invalid @enderror"
                value="{{ old('Valor') ? old('Valor') : (isset($elemento) ? $elemento->Valor : '') }}">
            @error('Valor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="Estado" class="form-label">Estado</label>
            <select name="Estado" class="form-control @error('Estado') is-invalid @enderror">
                <option value="">Seleccionar Estado</option>
                <option value="Activo" {{ old('Estado') === 'Activo' ? 'selected' : (isset($elemento) && $elemento->Estado === 'Activo' ? 'selected' : '') }}>Activo</option>
                <option value="Inactivo" {{ old('Estado') === 'Inactivo' ? 'selected' : (isset($elemento) && $elemento->Estado === 'Inactivo' ? 'selected' : '') }}>Inactivo</option>
            </select>
            @error('Estado')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="mb-3">
            <label for="Lugar" class="form-label">Lugar</label>
            <input type="text" name="Lugar" class="form-control @error('Lugar') is-invalid @enderror"
                value="{{ old('Lugar') ? old('Lugar') : (isset($elemento) ? $elemento->Lugar : '') }}">
            @error('Lugar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Fecha_reg" class="form-label">Fecha de Registro</label>
            <input type="date" name="Fecha_reg" class="form-control @error('Fecha_reg') is-invalid @enderror"
                value="{{ old('Fecha_reg') ? old('Fecha_reg') : (isset($elemento) ? $elemento->Fecha_reg : '') }}">
            @error('Fecha_reg')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Hora_reg" class="form-label">Hora de Registro</label>
            <input type="time" name="Hora_reg" class="form-control @error('Hora_reg') is-invalid @enderror"
                value="{{ old('Hora_reg') ? old('Hora_reg') : (isset($elemento) ? $elemento->Hora_reg : '') }}">
            @error('Hora_reg')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>



        <div class="mb-3">
            <label for="Observaciones" class="form-label">Observaciones</label>
            <textarea name="Observaciones" class="form-control @error('Observaciones') is-invalid @enderror" rows="4">
            {{ old('Observaciones') ? old('Observaciones') : (isset($elemento) ? $elemento->Observaciones : '') }}</textarea>
            @error('Observaciones')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        {{-- Botones --}}
        <button type="submit" class="btn btn-primary me-2">Enviar</button>
        <a href="/Elements" class="btn btn-danger">Cancelar</a>
