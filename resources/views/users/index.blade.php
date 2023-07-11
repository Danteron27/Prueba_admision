<x-app>
    <div class="card mx-5 my-5">
        <div class="card-header d-flex justify-content-between">
            <h2>Usuarios</h2>
            <a href="{{route('user.create')}}" class="btn btn-primary">Agregar Usuario</a>
        </div>
        <div class="card-body">
            <table class="table my-4 mx-2">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Email</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{ $user->Nombre }}</th>
                            <td>{{ $user->usuario }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="observation-column">
                                <div class="observation-content">{{ $user->observaciones }}</div>
                            </td>
                            <td class="d-flex">
                                <a href="{{route('user.edit', ['user'=> $user->Id_usuario])}}" class="btn btn-warning btn-sm me-1">Editar</a>
                                <form action="{{route('user.delete', ['user' => $user->Id_usuario])}}" method="post">
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
