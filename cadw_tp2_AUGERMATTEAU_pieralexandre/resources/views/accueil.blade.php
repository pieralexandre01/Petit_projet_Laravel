<x-layout>
    <main>

        <div class="entete">
            <h1>Faits sur les chats</h1>
        </div>

        <hr>

        <x-main-accueil :faits="$faits" />

        <hr>

        <div class="options">
            <a href="faits">Liste de faits</a>
            <a href="/faits/creer">Ajouter un fait</a>
        </div>

    </main>
</x-layout>
