 <x-app title="Peliculas del occidente">

     {{-- Cartas x Pelicula --}}
     <section class="d-flex justify-content-center flex-wrap">

         @foreach ($elementos as $elemento)
             <div class="card mx-3 my-3" style="width: 18rem;">
                 <img src="https://www.anmosugoi.com/wp-content/uploads/2022/09/Blue-Lock-manga-vol-21.jpg"
                     class="card-img-top" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">{{ $elemento->Nombres }}</h5>
                     <span class="card-value">{{ $elemento->Valor }}</span>
                     <span class="card-status">{{ $elemento->Estado }}</span>
                     <span class="card-location">{{ $elemento->Lugar }}</span>
                     <span class="card-name">{{ $elemento->categoria->Nombre }}</span>
                     <p class="card-observations">{{ $elemento->Observaciones }}</p>
                     <a href="#" class="btn btn-primary">Comprar</a>
                 </div>
             </div>
         @endforeach
     </section>
 </x-app>
