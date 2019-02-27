@component('components.symptoms.layout', compact('symptoms'))
    @slot('title')
        {{ __('Symptoms Index') }}
    @endslot
    <ul class="list-group">
        @foreach($symptoms as $symptom)
            <li class="list-group-item">
                <a href={{ route('symptoms.show', compact('symptom')) }}>
                    {{ $symptom->name }}
                </a>
                <span class="btn btn-success pull-right ml-3">{{ $symptom->level }}</span>
                <a class="btn btn-info pull-right ml-3" href="{{ route('symptoms.edit', compact('symptom')) }}">{{ __('messages.edit') }}</a>
            </li>
        @endforeach
    </ul>
@endcomponent
