@component('components.diseases.layout', compact('diseases'))
    @slot('title')
        {{ __('Diseases Index') }}
    @endslot

    <ul class="list-group">
        @foreach($diseases as $disease)
            <li class="list-group-item">
                <a href={{ route('diseases.show', compact('disease')) }}>
                    {{ $disease->name }}
                </a>
                <a class="btn btn-info pull-right ml-3" href="{{ route('diseases.edit', compact('disease')) }}">{{ __('messages.edit') }}</a>
            </li>
        @endforeach
    </ul>
@endcomponent
