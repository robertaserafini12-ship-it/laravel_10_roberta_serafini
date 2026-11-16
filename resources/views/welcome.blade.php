<x-layout>
    <!-- Intestazione -->
    <div class="container my-5">
        <div class="row bg-light p-5 rounded shadow-sm text-center">
            <div class="col-12">
                <h1 class="display-4 fw-bold text-primary">Il Cantuccio dei Libri 📚</h1>
                <p class="lead text-muted mt-3">
                    Un luogo dove le storie prendono vita. I libri sono finestre su mondi lontani, strumenti per comprendere meglio noi stessi e compagni silenziosi di ogni viaggio. Qui raccogliamo le trame più emozionanti, i grandi classici intramontabili e le novità editoriali da non perdere.
                </p>
                <a href="#recensioni" class="btn btn-dark btn-lg mt-3">Esplora le recensioni</a>
            </div>
        </div>
    </div>

    <!-- Sezione Recensioni con Foto -->
    <div class="container my-5" id="recensioni">
        <h2 class="text-center fw-bold mb-4">Le ultime recensioni</h2>
        <div class="row g-4">
            <!-- Libro 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Libro Narrativa" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Narrativa</span>
                        <h5 class="card-title fw-bold">L'Ombra del Vento</h5>
                        <p class="card-text text-muted">Una Barcellona misteriosa e gotica fa da sfondo alla storia di Daniel e di un libro maledetto che cambierà per sempre il suo destino.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <small class="text-warning">★★★★★</small> <small class="text-muted">(5/5)</small>
                    </div>
                </div>
            </div>

            <!-- Libro 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Libro Fantasy" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Fantasy</span>
                        <h5 class="card-title fw-bold">Il Nome del Vento</h5>
                        <p class="card-text text-muted">La leggenda di Kvothe, mago, musicista e avventuriero, raccontata dalla sua stessa voce in una locanda sperduta.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <small class="text-warning">★★★★★</small> <small class="text-muted">(4.8/5)</small>
                    </div>
                </div>
            </div>

            <!-- Libro 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Libro Thriller" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">Thriller & Gialli</span>
                        <h5 class="card-title fw-bold">La Verità sul Caso Harry Quebert</h5>
                        <p class="card-text text-muted">Un giovane scrittore in crisi indaga su un vecchio omicidio che coinvolge il suo celebre mentore letterario.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <small class="text-warning">★★★★☆</small> <small class="text-muted">(4.5/5)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>