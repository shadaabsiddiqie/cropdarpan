@component('components.diseases.layout', compact('diseases'))
    @slot('title')
        {{ __('Show Disease')  }}
    @endslot

    {{ $disease->name }}
@endcomponent
