<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Nuovo libro consigliato</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2 style="color: #0d6efd;">Nuovo consiglio di lettura ricevuto! 📚</h2>
    <p>Un utente registrato ha appena inviato un nuovo suggerimento tramite <strong>Il Cantuccio dei Libri</strong>:</p>
    
    <ul>
        <li><strong>Titolo del libro:</strong> {{ $data['title'] }}</li>
        <li><strong>Autore:</strong> {{ $data['author'] }}</li>
        <li><strong>Annata:</strong> {{ $data['year'] }}</li>
        <li><strong>Recensione / Dettagli:</strong> {{ $data['description'] ?? 'Nessun dettaglio aggiunto' }}</li>
        <li><strong>Consigliato da:</strong> {{ $data['user_name'] }} ({{ $data['user_email'] }})</li>
    </ul>

    <hr>
    <p style="font-size: 12px; color: #777;">Questa è un'email di notifica generata automaticamente dal progetto Laravel.</p>
</body>
</html>