@component('components.side-nav')
    <li class="nav-item active">
        <a href="{{ route('symptoms.index') }}" class="nav-link">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            {{ __('Symptoms Index') }}
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('symptoms.create') }}" class="nav-link">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            {{ __('Create Symptom') }}
        </a>
    </li>
@endcomponent
