<x-app>
    <section class="container my-5">
        <div class="card">
            <div class="card-header">
                <h2>Crear Categoria</h2>
            </div>
            <div class="card-body">
                <form action="{{route('category.create.post')}}" method="POST">
                    @csrf
                    <x-categoria.form-category />
                </form>
            </div>
        </div>
    </section>
</x-app>
