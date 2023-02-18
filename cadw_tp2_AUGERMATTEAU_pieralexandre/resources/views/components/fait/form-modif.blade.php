@props(["fait"])

<div class="form">
    <h2>Fait #{{ $fait->id }}</h2>
    <form action="{{ url('faits/modifier/' . $fait->id ) }}" method="POST">
        @csrf
        <textarea name="texte" id="" cols="30" rows="10">{{ $fait->texte }}</textarea>

        <div class="submit">
            <input type="submit" value="Modifier">
        </div>
    </form>
</div>
