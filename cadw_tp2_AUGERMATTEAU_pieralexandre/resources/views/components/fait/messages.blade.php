@if(session('ajout-fait'))
<p class="message">{{ session('ajout-fait') }}</p>
@endif

@if(session('suppression-fait'))
<p class="message">{{ session('suppression-fait') }}</p>
@endif

@if(session('modification-fait'))
<p class="message">{{ session('modification-fait') }}</p>
@endif
