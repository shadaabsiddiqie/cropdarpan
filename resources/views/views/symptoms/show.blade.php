@component('components.symptoms.layout', compact('symptom'))
    @slot('title')
        {{ __('Show Symptom') }}
    @endslot
    {{ $symptom->name }} <br>
    {{ $symptom->question }} <br>
    {{ config()->get('levels')[$symptom->level] }}
@endcomponent
