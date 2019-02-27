@component('components.diseases.layout', compact('diseases', 'locales'))
    @slot('title')
        {{ __('Edit Disease') }}
    @endslot

    <form method="POST" action="{{ route('diseases.update', ['disease' => $disease]) }}" class="mb-2">
        @csrf
        @method('PATCH')

        @foreach($locales as $locale => $language)
            <div class="form-group row">
                <label for="{{ 'name_' . $locale }}" class="col-md-4 col-form-label text-md-right">{{ __('labels.name', [], $locale) }}</label>

                <div class="col-md-6">
                    @if($disease->hasTranslation($locale))
                        <input id="{{ 'name_' . $locale }}" type="text" class="form-control" name="{{ 'name_' . $locale }}" value="{{ $disease->translate($locale)->name }}" required autofocus>
                    @else
                        <input id="{{ 'name_' . $locale }}" type="text" class="form-control" name="{{ 'name_' . $locale }}" value="" required autofocus>
                    @endif
                </div>
            </div>
        @endforeach

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('messages.update') }}
                </button>
            </div>
        </div>
    </form>

    <form method="POST" action="{{ route('diseases.destroy', compact('disease')) }}">
        @method('DELETE')
        @csrf

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-danger">
                    {{ __('messages.delete') }}
                </button>
            </div>
        </div>
    </form>
@endcomponent
