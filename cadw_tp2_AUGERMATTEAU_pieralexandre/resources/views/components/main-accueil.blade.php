@props(['faits'])

<div class="fait">
    <h2>Fait #{{ $faits->id }}</h2>
    <p>{{ $faits->texte }}</p>
    <div class="images">
        <img src="https://placekitten.com/200/300" alt="">
        <img src="https://placekitten.com/205/300" alt="">
        <img src="https://placekitten.com/210/300" alt="">
        <img src="https://placekitten.com/215/300" alt="">
    </div>
</div>
