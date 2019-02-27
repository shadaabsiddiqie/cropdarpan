@component('components.symptoms.layout', compact('levels', 'locales'))
    @slot('title')
        {{ __('Create Symptom') }}
    @endslot
    <form method="POST" action="{{ route('symptoms.store') }}">
        @csrf

        <div class="form-group row">
            <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('labels.level') }}</label>
            <div class="col-md-6">
                <select class="form-control" id="level" name="level">
                    @foreach($levels as $level => $name)
                        <option value="{{ $level }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        @foreach($locales as $locale => $language)
            <div class="form-group row">
                <label for="{{ 'name_' . $locale }}" class="col-md-4 col-form-label text-md-right">{{ __('labels.name', [], $locale) }}</label>

                <div class="col-md-6">
                    <input id="{{ 'name_' . $locale }}" type="text" class="form-control" name={{ 'name_' . $locale }} required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="{{ 'question_' . $locale }}" class="col-md-4 col-form-label text-md-right">{{ __('labels.question', [], $locale) }}</label>

                <div class="col-md-6">
                    <input id="{{ 'question_' . $locale }}" type="text" class="form-control" name={{ 'question_' . $locale }} required autofocus>
                </div>
            </div>
        @endforeach

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Create Symptom') }}
                </button>
            </div>
        </div>
    </form>
@endcomponent
