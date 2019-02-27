@component('components.side-nav')
    <li class="nav-item active">
        <a href="{{ route('diseases.index') }}" class="nav-link">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            {{ __('Diseases Index') }}
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('diseases.create') }}" class="nav-link">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            {{ __('Create Disease') }}
        </a>
    </li>
@endcomponent
