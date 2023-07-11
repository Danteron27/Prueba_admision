            <div class="mb-3">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electronico</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{old('email')? old('email'): (isset($user)? $user->email: '')}}"
                    >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombres y apellidos</label>
                    <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror"
                    value="{{old('Nombre')? old('Nombre'): (isset($user)? $user->Nombre: '')}}"
                    >
                    @error('Nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="usuario" class="form-label">usuario</label>
                    <input type="text" name="usuario" class="form-control @error('usuario') is-invalid @enderror"
                    value="{{old('usuario')? old('usuario'): (isset($user)? $user->usuario: '')}}"
                    >
                    @error('usuario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="observaciones" class="form-label">observaciones</label>
                    <textarea id="observaciones" name="observaciones" rows="4" cols="40" class="form-control"
                    value="{{old('observaciones')? old('observaciones'): (isset($user)? $user->observaciones: '')}}"></textarea>
                </div>



                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- password --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">

                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Botones --}}
                <button type="submit" class="btn btn-primary me-2">Enviar</button>
                <a href="/Users" class="btn btn-danger">Cancelar</a>
