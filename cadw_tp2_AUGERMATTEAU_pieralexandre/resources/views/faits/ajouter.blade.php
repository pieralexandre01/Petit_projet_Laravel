<x-layout>
    <main>

        <div class="entete">
            <h1>Ajouter un fait</h1>
        </div>

        @error('fait')
            <p class="message">{{ $message }}</p>
        @enderror

        <x-fait.form-ajout />

        <div class="options">
            <a href="/">Accueil</a>
            <a href="/faits">Liste des faits</a>
        </div>

    </main>
</x-layout>
