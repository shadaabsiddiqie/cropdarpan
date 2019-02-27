@component('components.diseases.layout', compact('locales'))
    @slot('title')
       {{ __('Create Disease') }}
    @endslot
    <form method="POST" action="{{ route('diseases.store') }}">
        @csrf

        @foreach($locales as $locale => $language)
            <div class="form-group row">
                <label for="{{ 'name_' . $locale }}" class="col-md-4 col-form-label text-md-right">{{ __('labels.name', [], $locale) }}</label>

                <div class="col-md-6">
                    <input id="{{ 'name_' . $locale }}" type="text" class="form-control" name="{{ 'name_' . $locale }}" required autofocus>
                </div>
            </div>
        @endforeach

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Create Disease') }}
                </button>
            </div>
        </div>
    </form>
@endcomponent
