<x-layout>
    <main>

        <div class="entete">
            <h1>Tous les faits</h1>
        </div>

        <x-fait.messages />

        <x-fait.fait :faits="$faits"/>

        <div class="options">
            <a href="/">Accueil</a>
            <a href="/faits/creer">Ajouter un fait</a>
        </div>

    </main>
</x-layout>
