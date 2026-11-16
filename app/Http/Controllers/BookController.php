<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Mail\BookSuggestedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    // Mostra la lista di tutti i libri aggiunti
    public function index()
    {
        $books = Book::latest()->get();
        return view('books.index', compact('books'));
    }

    // Mostra il form per consigliare un libro
    public function create()
    {
        return view('suggest-book');
    }

    // Salva il libro nel DB, invia l'email e reindirizza alla lista
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Salva il libro associato all'utente loggato
        $book = Auth::user()->books()->create($data);

        // Prepara i dati per l'email
        $mailData = $data;
        $mailData['user_name'] = Auth::user()->name;
        $mailData['user_email'] = Auth::user()->email;

        try {
            Mail::to('redazione@cantucciodeilibri.it')->send(new BookSuggestedMail($mailData));

            return redirect()->route('books.index')->with('success', 'Libro aggiunto con successo e notificato via email!');
        } catch (\Exception $e) {
            return redirect()->route('books.index')->with('error', 'Libro salvato, ma errore nell\'invio email: ' . $e->getMessage());
        }
    }
// Elimina un libro dal database
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Libro eliminato con successo!');
    }
}