<x-layout>
    <main>

        <div class="entete">
            <h1>Modification d'un fait</h1>
        </div>

        <x-fait.form-modif :fait="$fait" />

        <div class="options">
            <a href="/faits">Liste de faits</a>
            <a href="/faits/creer">Ajouter un fait</a>
        </div>

    </main>
</x-layout>
