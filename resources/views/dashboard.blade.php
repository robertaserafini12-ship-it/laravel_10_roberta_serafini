<x-layout>
    <div class="alert alert-success">
        <h4 class="alert-heading">Accesso consentito!</h4>
        <p>Ciao <strong>{{ Auth::user()->name }}</strong>, sei dentro la pagina protetta dal middleware <code>auth</code>[cite: 1].</p>
    </div>
</x-layout>