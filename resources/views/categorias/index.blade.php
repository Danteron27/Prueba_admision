<x-app>
    <div class="card mx-5 my-5">
        <div class="card-header d-flex justify-content-between">
            <h2>Categorias</h2>
            <a href="{{route('category.create')}}" class="btn btn-primary">Agregar Categoria</a>
        </div>
        <div class="card-body">
            <table class="table my-4 mx-2">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <th>{{ $categoria->Codigo }}</th>
                            <td>{{ $categoria->Nombre }}</td>
                            <td>{{ $categoria->Descripcion }}</td>
                            <td class="observation-column">
                                <div class="observation-content">{{ $categoria->Observacion }}</div>
                            </td>
                            <td class="d-flex">
                                <a href="{{route('category.edit', ['categoria'=> $categoria->id])}}" class="btn btn-warning btn-sm me-1">Editar</a>
                                <form action="{{route('category.delete', ['categoria' => $categoria->id])}}" method="post">
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
