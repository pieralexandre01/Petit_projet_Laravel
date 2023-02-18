@props(["faits"])

<div class="faits">
    <div class="fait">
        @foreach ($faits as $fait)
            <div class="fait-infos">
                <h4>Fait #{{ $fait->id }}</h4>
                <p>{{ $fait->texte_limite }}</p>
            </div>
            <div class="fait-options">
                <a href="{{ url('/faits/modifier/' . $fait->id)}}" class="btn modif">Modifier</a>
                <a href="{{ url('/faits/supprimer/' . $fait->id)}}" class="btn delete">Supprimer</a>
            </div>
            <hr>
        @endforeach
    </div>
</div>
