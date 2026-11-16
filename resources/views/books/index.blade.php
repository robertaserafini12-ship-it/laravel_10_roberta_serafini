<x-layout>
    <div class="container my-5">
        <h1 class="fw-bold text-primary text-center mb-4">Tutti i Libri Aggiunti 📚</h1>

        @if (session('success'))
            <div class="alert alert-success">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse ($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 border-0 overflow-hidden">
                        <!-- Immagine astratta del libro -->
                        <img src="https://picsum.photos/seed/book-{{ $book->id }}/600/350" class="card-img-top" alt="{{ $book->title }}" style="height: 200px; object-fit: cover;">
                        
                        <div class="card-body d-flex flex-column bg-light">
                            <h3 class="card-title text-dark fw-bold h5">{{ $book->title }}</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Autore: {{ $book->author }}</h6>
                            <p class="card-text mb-1"><strong>Annata:</strong> {{ $book->year }}</p>
                            <p class="card-text flex-grow-1 text-secondary">{{ Str::limit($book->description, 90) }}</p>
                            <p class="small text-muted mb-3 fst-italic">Consigliato da: {{ $book->user->name ?? 'Utente' }}</p>
                            
                            <a href="#" class="btn btn-outline-primary mb-2 w-100">Leggi di più</a>

                            <!-- Pulsante per eliminare il libro -->
                            <form action="{{ route('books.destroy', $book) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger w-100" onclick="return confirm('Sei sicuro di voler eliminare questo libro?')">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted fs-5">Nessun libro aggiunto al momento. Fai il login e consiglia il primo libro!</p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>