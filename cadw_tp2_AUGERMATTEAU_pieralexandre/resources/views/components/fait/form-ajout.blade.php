<div class="form">
    <form action="{{ url('/faits/sauvegarder') }}" method="POST">
        @csrf

        <textarea name="fait"></textarea>

        <div class="submit">
            <input type="submit" value="Ajouter">
        </div>
    </form>
</div>
