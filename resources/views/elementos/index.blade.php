<x-app>
    <div class="card mx-5 my-5">
        <div class="card-header d-flex justify-content-between">
            <h2>Elementos</h2>
            <a href="{{route('element.create')}}" class="btn btn-primary">Agregar Elemento</a>
        </div>
        <div class="card-body">
            <table class="table my-4 mx-2" id="table_elements">
                <thead>
                    <tr>
                        <th scope="col">Categoria</th>
                        <th scope="col">Referencia</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Lugar</th>
                        <th scope="col">Fecha de Registro</th>
                        <th scope="col">Hora de Registro</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($elementos as $elemento)
                        <tr>
                            <td>{{ $elemento->categoria->Nombre }}</th>
                            <td>{{ $elemento->Referencias}}</th>
                            <td>{{ $elemento->Nombres }}</th>
                            <td>{{ $elemento->Cantidad }}</th>
                            <td>{{ $elemento->Valor }}</th>
                            <td>{{ $elemento->Estado }}</th>
                            <td>{{ $elemento->Lugar }}</td>
                            <td>{{ $elemento->Fecha_reg }}</td>
                            <td>{{ $elemento->Hora_reg }}</td>
                            <td>{{ $elemento->Observaciones }}</td>
                            <td class="d-flex">
                                <a href="{{route('element.edit', ['elemento'=> $elemento->id])}}" class="btn btn-warning btn-sm me-1">Editar</a>
                                <form action="{{route('element.delete', ['elemento' => $elemento->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-app>
