<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7 bg-light p-5 rounded shadow-sm">
                <h2 class="fw-bold text-primary mb-3 text-center">Consiglia un Libro 📖</h2>
                <p class="text-muted text-center mb-4">
                    Ciao <strong>{{ Auth::user()->name }}</strong>! Compila i campi sottostanti per aggiungere il tuo libro preferito e inviare la notifica via email.
                </p>

                <!-- Messaggio di successo -->
                @if (session('success'))
                    <div class="alert alert-success">
                        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                    </div>
                @endif

                <!-- Messaggio di errore -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('books.send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Aggiungi Titolo</label>
                        <input type="text" name="title" class="form-control" placeholder="Es. L'ombra del vento" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Aggiungi Autore</label>
                        <input type="text" name="author" class="form-control" placeholder="Es. Carlos Ruiz Zafón" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Annata (Anno di pubblicazione)</label>
                        <input type="number" name="year" class="form-control" placeholder="Es. 2001" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Recensione / Dettagli</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Perché consigli questo libro?"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Invia Consiglio e Notifica Email</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>