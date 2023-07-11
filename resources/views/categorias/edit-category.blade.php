<x-app>
    <section class="container my-5">
        <div class="card">
            <div class="card-header">
                <h2>Editar Categoria</h2>
            </div>
            <div class="card-body">
                    <form action="{{route('category.edit.put', ['categoria' => $categoria->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                    <x-categoria.form-category :categoria="$categoria" />
                </form>
            </div>
        </div>
    </section>
</x-app>
