@component('components.symptoms.layout', compact('levels', 'locales', 'symptom'))
    @slot('title')
        {{ __('Edit Symptom') }}
    @endslot
    <form method="POST" action="{{ route('symptoms.update', compact('symptom')) }}">
        @csrf
        @method('PATCH')

        <div class="form-group row">
            <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('labels.level') }}</label>
            <div class="col-md-6">
                <select class="form-control" id="level" name="level" value="{{ $symptom->level }}">
                    @foreach($levels as $level => $name)
                        @if($level == $symptom->level)
                            <option value="{{ $level }}" selected>{{ $name }}</option>
                        @else
                            <option value="{{ $level }}">{{ $name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        @foreach($locales as $locale => $language)
            <div class="form-group row">
                <label for="{{ 'name_' . $locale }}" class="col-md-4 col-form-label text-md-right">{{ __('labels.name', [], $locale) }}</label>

                <div class="col-md-6">
                    @if($symptom->hasTranslation($locale))
                        <input id="{{ 'name_' . $locale }}" type="text" class="form-control" name="{{ 'name_' . $locale }}" value="{{ $symptom->translate($locale)->name }}" required autofocus>
                    @else
                        <input id="{{ 'name_' . $locale }}" type="text" class="form-control" name="{{ 'name_' . $locale }}" value="" required autofocus>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="{{ 'question_' . $locale }}" class="col-md-4 col-form-label text-md-right"> {{ __('labels.question', [], $locale) }}</label>

                <div class="col-md-6">
                    @if($symptom->hasTranslation($locale))
                        <input id="{{ 'question_' . $locale }}" type="text" class="form-control" name="{{ 'question_' . $locale }}" value="{{ $symptom->translate($locale)->question }}" required autofocus>
                    @else
                        <input id="{{ 'question_' . $locale }}" type="text" class="form-control" name="{{ 'question_' . $locale }}" value="" required autofocus>
                    @endif
                </div>
            </div>
        @endforeach

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update Symptom') }}
                </button>
            </div>
        </div>
    </form>
@endcomponent
