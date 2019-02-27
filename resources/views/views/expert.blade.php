@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{--                    <img src="{{ url('storage/images/logo.png') }}" alt="" class="mx-auto" width="10%;">--}}
                    <div class="card-body mx-auto">
                        {{--<h5 class="card-title text-center">{{ __('select language and start diagnosis') }}</h5>--}}
                        <div class="row justify-content-center">
                            <div class="col-md col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4mhqd1Ob8-1_Fd2to719XHomfxLUgwvak9JgO4hVOOktolrws" alt="Card image cap">
                                        <a href="{{ route('diseases.index') }}">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">{{ __('labels.diseases') }}</h4>
                                        <p class="card-text">{{ __('messages.model_card_description', ['model' => __('labels.disease')]) }}</p>
                                        <a href="{{ route('diseases.index') }}" class="btn btn-primary">{{ __('pagination.view_more') }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://content.ces.ncsu.edu/media/images/Bacterial_Blight_Figure_1" alt="Card image cap">
                                        <a href="{{ route('symptoms.index') }}">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">{{ __('labels.symptoms') }}</h4>
                                        <p class="card-text">{{ __('messages.model_card_description', ['model' => __('labels.symptom')]) }}</p>
                                        <a href="{{ route('symptoms.index') }}" class="btn btn-primary">{{ __('pagination.view_more') }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md col-sm-6 col-12 mb-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
