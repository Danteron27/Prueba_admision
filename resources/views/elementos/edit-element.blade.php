<x-app>
    <section class="container my-5">
        <div class="card">
            <div class="card-header">
                <h2>Editar Elemento</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('element.edit.put', ['elemento' => $elemento->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <x-elemento.form-element :categorias="$categorias" :elemento="$elemento" />
                </form>
            </div>
        </div>
    </section>
</x-app>

