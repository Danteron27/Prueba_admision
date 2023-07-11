<x-app>
    <section class="container my-5">
        <div class="card">
            <div class="card-header">
                <h2>Crear Elemento</h2>
            </div>
            <div class="card-body">
                <form action="{{route('element.create.post')}}" method="POST">
                    @csrf
                    <x-elemento.form-element :categorias="$categorias" :elemento="$elemento"/>
                </form>
            </div>
        </div>
    </section>
</x-app>
